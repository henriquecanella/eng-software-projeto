from sqlalchemy import Boolean, Column, ForeignKey, Integer, String
from sqlalchemy.orm import relationship

from .database import Base

class User(Base):
    __tablename__ = "tbl_pessoas"

    id_pessoas = Column(Integer, primary_key=True)
    nome = Column(String, index=True)
    email = Column(String, unique=True, index=True)
    usuario = Column(String, unique=True, index=True)
    senha = Column(String)
    wpp = Column(String)
    skype = Column(String)
    cargo = Column(Integer)
