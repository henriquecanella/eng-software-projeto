# Use a imagem slim do Python 3.10 como base
FROM python:3.10-slim

# Define o diretório de trabalho no container
WORKDIR /app

# Install libs
RUN python3 -m pip install --upgrade pip setuptools wheel

RUN python3 -m pip install "pytest"

# Não precisa mais copiar porque o docker-compose monta o volume. Vou deixar caso a gente mude de ideia pra alguma coisa
# # Copia o script Python para o diretório de trabalho
# COPY hello.py .
