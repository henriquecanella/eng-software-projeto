import uvicorn
import logging
import os

from pathlib import Path
from typing import Union
from fastapi import FastAPI, Request
from fastapi.responses import HTMLResponse
from fastapi.templating import Jinja2Templates
from fastapi_htmx import htmx, htmx_init
from pydantic import BaseModel
from .models.user import User
from .schemas.user import UserBase


from .models.database import SessionLocal

LOGLEVEL = os.environ.get('LOGLEVEL', 'INFO').upper()
logging.basicConfig(level=LOGLEVEL)
session = SessionLocal()

app = FastAPI()
htmx_init(templates=Jinja2Templates(
    directory=Path("eng_software_projeto") / "templates"))


@app.get("/", response_class=HTMLResponse)
@htmx("index", "index")
async def root_page(request: Request):
    return {"greeting": "Hello World"}

@app.get("/auth")
def auth(user: UserBase):
    usuario = user.usuario
    senha = user.senha

    if not usuario or not senha:
        return {"null"}

    user_local = session.query(User).filter_by(usuario=usuario, senha=senha).one_or_none()
    if user_local != None:
        return {"usuario": usuario, "logged": "True"}
    else:
        return {"null"}

@app.post("/cadastro_pessoa")
def auth(user: UserBase):
    db_user = User(nome=user.nome, email=user.email, usuario=user.usuario, senha=user.senha, wpp=user.wpp, skype=user.skype, cargo=user.cargo)
    try:
        session.add(db_user)
        session.commit()
        session.refresh(db_user)
        return {"cadastro_pessoa": "True"}
    except:
        session.rollback()
        return {"null"}

def start():
    """Launched with `poetry run start` at root level"""
    uvicorn.run("eng_software_projeto.main:app", host="0.0.0.0", port=8000,
                reload=True)
