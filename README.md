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

Ou ainda, para executar o serviço e liberar o terminal, execute:

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
