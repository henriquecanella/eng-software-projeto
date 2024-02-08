from sqlalchemy import Boolean, Column, ForeignKey, Integer, String, Date
from sqlalchemy.orm import relationship

from .database import Base

class Project(Base):
    __tablename__ = "tbl_projetos"

    id_projeto = Column(Integer, primary_key=True)
    titulo = Column(String)
    descricao = Column(String)
    data_inicio = Column(Date)
    data_fim = Column(Date)
