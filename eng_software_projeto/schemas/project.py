from datetime import date
from pydantic import BaseModel

class ProjectBase(BaseModel):
    id_projeto: str | None = None
    titulo: str | None = None
    descricao: str | None = None
    data_inicio: date | None = None
    data_fim: date | None = None
