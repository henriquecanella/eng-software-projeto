from pydantic import BaseModel

class UserBase(BaseModel):
    id_pessoas: str | None = None
    nome: str | None = None
    email: str | None = None
    usuario: str
    senha: str
    wpp: str | None = None
    skype: str | None = None
    cargo: int | None = None
