# eng-software-projeto
Projeto da disciplina de Engenharia de Software PPGCC UFSCar


# Requisitos

## Docker

Para executar a stack, precisa do docker instalado na máquina. O [Docker][docker_wiki] é um conjunto de produtos de plataforma como serviço que usam virtualização de nível de sistema operacional para entregar software em pacotes chamados contêineres. Os contêineres são isolados uns dos outros e agrupam seus próprios softwares, bibliotecas e arquivos de configuração.

### Instalação Docker

Considerando que você usa uma distribuição Linux baseada em Debian, execute:

```
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
sudo chmod a+r /etc/apt/keyrings/docker.gpg
dpkg --print-architecture
echo  "deb [arch="$(dpkg --print-architecture)" signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
      "$(. /etc/os-release && echo "$VERSION_CODENAME")" stable" |   sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
apt update -y
apt install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin -y
```

## Docker Compose (docker-compose)

O [docker-compose][docker-compose_ref] é uma ferramenta que agilizaa o deploy de ambientes, utilizando uma forma simples, claro e padronizada. É uma forma de definir infraestrutura docker em um só arquivo, considerando rede, volumes, etc.

### Install docker-compose

Source Code Docker-Compose: https://github.com/docker/compose/releases/tag/v2.24.0

1. Download da versão mais recente do docker-compose:

`sudo curl -L "https://github.com/docker/compose/releases/download/v2.23.0/docker-compose-linux-x86_64" -o /usr/local/bin/docker-compose`

## Trabalhando com a stack localmente

Abra um terminal na pasta onde você salvou esses arquivos.

Execute os seguintes comandos:

### Para construir a imagem Docker

Para evitar de termos diferenças entre configurações nos computadores, podemos usar só o docker. O primeiro passo é construir uma imagem Docker. Cada vez que você fizer uma mudança, terá que construir ela novamente.

```bash
make build
```

### Para executar toda a stack

Para subir um container com a imagem construida anteriormente, basta rodar o comando:

```bash
make run-app
```
Com o comando acima, o terminal fica bloqueado e você verá todos os logs dos containers que estão rodando e sendo gerenciados pelo `docker-compose.yml`. Para rodar a stack sem ver os logs e liberar o terminal, execute:

```bash
make run-app-detached
```

### Para derrubar toda a stack

Caso queira destruir a stack para remover cache ou mesmo liberar recursos do computador, execute:

```bash
make down
```

### Executando testes

Para rodar testes, coloquei a lib `pytest` no docker e criei um teste simples. Para executar os testes:

```bash
make run-testes
```

### Entrando no container

Para entrar no container através de um terminal, basta executar:

```bash
make shell
```

[docker_wiki]: https://pt.wikipedia.org/wiki/Docker_(software)]
[docker-compose_ref]: https://www.mundodocker.com.br/docker-compose/


# Acesso Local Frontend e Backend

## Frontend

Para acessar o frontend, basta acessar no Browser o endereço `localhost`, ou ainda pode configurar o seu arquivo `/etc/hosts` e adicionar a linha confome abaixo e o site estará disponível no endereço `eng-software.local`:

```
127.0.0.1 eng-software.local
```

## Backend

Para acessar o backend, basta acessar no Browser o endereço `localhost:8008`, ou ainda pode configurar o seu arquivo `/etc/hosts` e adicionar a linha confome abaixo e o site estará disponível no endereço `eng-software-backend.local:8008`:

```
127.0.0.1 eng-software-backend.local
```

# Usando Database PostgreSQL

Para subir o banco, basta executar o mesmo comando de `UP` da aplicação:

```bash
make run-app
```

ou ainda

```bash
make run-app-detached
```

## Conectar no container do banco PostgreSQL

Para conectar no container do banco e verificar os dados lá contidos, basta:

```bash
make shell-db
```

Dentro do banco, basta selecionar o database e executar os comandos desejados.

Exemplo de comandos básicos de PostgreSQL para interagir com o banco:

`\l`: Lista todos os Databases

`\c <DATABASE_NAME>`: Seleciona o Database que será usado nos comandos

`\dt+`: Mostra todas as tabelas no Database selecionado

`\dt+ <TABLE_NAME>`: _Describe_ em detalhes toda a tabela


## Gerar Database e Tabelas no PostgreSQL

Para gerar o database e as tabelas no banco, basta:

```bash
make run-database
```

Este comando irá executar tudo que está definido no script _database/database.sql_. Caso precise mudar algo na estrutura do banco, dê preferência para usar o script. Assim, caso outra pessoa vá configurar seu ambiente, terá a estrutura atualizada.

## Destruir o banco PostgreSQL

Caso seja necessário limpar de uma vez o banco, basta:

```bash
make down
```
Para desligar toda a stack e em seguida, pois se você tentar limpar o banco com a stack UP, pode ter erros. Após isso, executar o comando para deletar o banco:

```bash
make clean-database
```

Esse comando será executado como _sudo_, pois precisa deletar conteúdo criado pelo docker.


# Executando localmente sem o Docker

## Python 3.12

Para instalar a versão correta do python você pode seguir as instrucoes do
[site oficial]: https://www.python.org/downloads/release/python-3120/
ou utilizar um gerenciador de versão como `pyenv`
[pyenv_repo]: https://github.com/pyenv/pyenv

## Poetry

Para instalar o poetry em seu sistema (considerando um sistema Linux, macOS, Windows WSL) execute

``` bash
curl -sSL https://install.python-poetry.org | python3 -
```

## Executando o projeto

Para instalar as dependencias do projeto execute o comando `poetry install` e para entrar no ambiente virtual criado `poetry shell`.
Para executar o projeto basta rodar o comando `poetry run start` para executar o servidor web
