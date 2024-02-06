SELECT 'CREATE DATABASE dbgestaodeconhecimento' WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'dbgestaodeconhecimento')\gexec

\c dbgestaodeconhecimento;

CREATE TABLE IF NOT EXISTS tbl_projetos (
  id_projeto SERIAL PRIMARY KEY,
  titulo VARCHAR(45) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_catalogo_tarefas (
  id_catalogo_tarefas SERIAL PRIMARY KEY,
  titulo VARCHAR(45) NOT NULL,
  descricao VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_tarefas_projeto (
  id_tarefas SERIAL PRIMARY KEY,
  titulo VARCHAR(45) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  status VARCHAR(11) NOT NULL,
  prioridade INT NOT NULL,
  id_projeto INT NOT NULL,
  id_catalogo_tarefas INT,
  CONSTRAINT fk_tbl_tarefas_tbl_projetos1
    FOREIGN KEY (id_projeto)
    REFERENCES tbl_projetos (id_projeto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_tarefas_tbl_catalogo_tarefas1
    FOREIGN KEY (id_catalogo_tarefas)
    REFERENCES tbl_catalogo_tarefas (id_catalogo_tarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_subtarefas (
  id_subtarefas SERIAL PRIMARY KEY,
  titulo VARCHAR(45) NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  data_inicio DATE NOT NULL,
  data_fim DATE NOT NULL,
  status VARCHAR(11) NOT NULL,
  prioridade INT NOT NULL,
  id_tarefa INT NOT NULL,
  CONSTRAINT fk_tbl_subtarefas_tbl_tarefas1
    FOREIGN KEY (id_tarefa)
    REFERENCES tbl_tarefas_projeto (id_tarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_competencias (
  id_competencia SERIAL PRIMARY KEY,
  nome VARCHAR(20) NOT NULL,
  descricao VARCHAR(50) NOT NULL,
  status INT NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_pessoas (
  id_pessoas SERIAL PRIMARY KEY,
  nome VARCHAR(45) NOT NULL,
  email VARCHAR(30) NOT NULL UNIQUE,
  usuario VARCHAR(20) NOT NULL,
  senha VARCHAR(20) NOT NULL,
  wpp VARCHAR(11) NOT NULL,
  skype VARCHAR(20) NOT NULL,
  cargo INT NOT NULL
);

CREATE TABLE IF NOT EXISTS tbl_telefone (
  id_telefone SERIAL PRIMARY KEY,
  id_pessoas INT NOT NULL,
  telefone VARCHAR(11) NOT NULL,
  CONSTRAINT fk_tbl_telefone_tbl_pessoas
    FOREIGN KEY (id_pessoas)
    REFERENCES tbl_pessoas (id_pessoas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_tarefas_competencias (
  id_tarefa_competencia SERIAL PRIMARY KEY,
  id_competencia INT NOT NULL,
  id_tarefa INT NOT NULL,
  nivel_de_habilidade INT NOT NULL,
  CONSTRAINT fk_tbl_competencias_has_tbl_tarefas_tbl_competencias1
    FOREIGN KEY (id_competencia)
    REFERENCES tbl_competencias (id_competencia)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_competencias_has_tbl_tarefas_tbl_tarefas1
    FOREIGN KEY (id_tarefa)
    REFERENCES tbl_tarefas_projeto (id_tarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_subtarefas_competencias (
  id_subtarefa_competencia SERIAL PRIMARY KEY,
  id_competencia INT NOT NULL,
  id_subtarefa INT NOT NULL,
  nivel_de_habilidade INT NOT NULL,
  CONSTRAINT fk_tbl_competencias_has_tbl_subtarefas_tbl_competencias1
    FOREIGN KEY (id_competencia)
    REFERENCES tbl_competencias (id_competencia)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_competencias_has_tbl_subtarefas_tbl_subtarefas1
    FOREIGN KEY (id_subtarefa)
    REFERENCES tbl_subtarefas (id_subtarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_pessoas_competencias (
  id_pessoa_competencia SERIAL PRIMARY KEY,
  id_competencia INT NOT NULL,
  id_pessoa INT NOT NULL,
  nivel_de_habilidade INT NOT NULL,
  data DATE NOT NULL,
  CONSTRAINT fk_tbl_competencias_has_tbl_pessoas_tbl_competencias1
    FOREIGN KEY (id_competencia)
    REFERENCES tbl_competencias (id_competencia)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_competencias_has_tbl_pessoas_tbl_pessoas1
    FOREIGN KEY (id_pessoa)
    REFERENCES tbl_pessoas (id_pessoas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_tarefas_pessoas (
  id_tarefa_pessoa SERIAL PRIMARY KEY,
  id_tarefa INT NOT NULL,
  id_pessoa INT NOT NULL,
  data_atribuicao DATE NOT NULL,
  desempenho VARCHAR(100),
  CONSTRAINT fk_tbl_tarefas_has_tbl_pessoas_tbl_tarefas1
    FOREIGN KEY (id_tarefa)
    REFERENCES tbl_tarefas_projeto (id_tarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_tarefas_has_tbl_pessoas_tbl_pessoas1
    FOREIGN KEY (id_pessoa)
    REFERENCES tbl_pessoas (id_pessoas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_subtarefas_pessoas (
  id_subtarefa_pessoa SERIAL PRIMARY KEY,
  id_subtarefa INT NOT NULL,
  id_pessoa INT NOT NULL,
  data_atribuicao DATE NOT NULL,
  desempenho VARCHAR(100),
  CONSTRAINT fk_tbl_subtarefas_has_tbl_pessoas_tbl_subtarefas1
    FOREIGN KEY (id_subtarefa)
    REFERENCES tbl_subtarefas (id_subtarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_subtarefas_has_tbl_pessoas_tbl_pessoas1
    FOREIGN KEY (id_pessoa)
    REFERENCES tbl_pessoas (id_pessoas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS tbl_feedback (
  id_feedback SERIAL PRIMARY KEY,
  id_tarefa INT,
  id_subtarefa INT,
  id_pessoa INT NOT NULL,
  descricao VARCHAR(100) NOT NULL,
  data DATE NOT NULL,
  CONSTRAINT fk_tbl_feedback_tbl_tarefas1
    FOREIGN KEY (id_tarefa)
    REFERENCES tbl_tarefas_projeto (id_tarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_feedback_tbl_subtarefas1
    FOREIGN KEY (id_subtarefa)
    REFERENCES tbl_subtarefas (id_subtarefas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_tbl_feedback_tbl_pessoas1
    FOREIGN KEY (id_pessoa)
    REFERENCES tbl_pessoas (id_pessoas)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

INSERT INTO tbl_pessoas (
  nome,
  email,
  usuario,
  senha,
  wpp,
  skype,
  cargo
  ) VALUES (
    'Administrador',
    'admin@local',
    'admin',
    'admin',
    '00000000000',
    'admin@local',
     1
  );
