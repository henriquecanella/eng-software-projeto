import uvicorn
import logging
import os

from fastapi import FastAPI
from fastapi.encoders import jsonable_encoder
from fastapi.responses import JSONResponse
from .models.user import User
from .schemas.user import UserBase
from .models.project import Project
from .schemas.project import ProjectBase

from .models.database import SessionLocal

LOGLEVEL = os.environ.get('LOGLEVEL', 'INFO').upper()
logging.basicConfig(level=LOGLEVEL)
session = SessionLocal()

app = FastAPI()


@app.get("/")
def root_page():
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


@app.post("/projects")
def post_project(project: ProjectBase):
    db_project = Project(titulo=project.titulo, descricao=project.descricao, data_inicio=project.data_inicio, data_fim=project.data_fim)
    try:
        session.add(db_project)
        session.commit()
        session.refresh(db_project)
        return {"cadastro_projeto": "True"}
    except:
        session.rollback()
        return {"null"}


@app.get("/projects")
def get_projects():
    all_projects = session.query(Project).all()
    print(all_projects)
    return all_projects

def start():
    """Launched with `poetry run start` at root level"""
    uvicorn.run("eng_software_projeto.main:app", host="0.0.0.0", port=8000,
                reload=True)
