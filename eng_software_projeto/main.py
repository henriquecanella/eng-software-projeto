from pathlib import Path

from typing import Union
import uvicorn
from fastapi import FastAPI, Request
from fastapi.responses import HTMLResponse
from fastapi.templating import Jinja2Templates
from fastapi_htmx import htmx, htmx_init

app = FastAPI()
htmx_init(templates=Jinja2Templates(
    directory=Path("eng_software_projeto") / "templates"))


@app.get("/", response_class=HTMLResponse)
@htmx("index", "index")
async def root_page(request: Request):
    return {"greeting": "Hello World"}


def start():
    """Launched with `poetry run start` at root level"""
    uvicorn.run("eng_software_projeto.main:app", host="0.0.0.0", port=8000,
                reload=True)
