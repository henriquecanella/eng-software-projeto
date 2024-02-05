SERVICE-NAME=eng-software #mesmo do github_actions
IMAGE_NAME=eng-software
IMAGE_TAG=lastest
CONTAINER_NAME=eng-software

build:
	IMAGE_TAG=${IMAGE_TAG} IMAGE_NAME=${IMAGE_NAME} CONTAINER_NAME=${CONTAINER_NAME} docker-compose build --no-cache

down:
	@docker-compose down

clean-database:
	@sudo rm -rf volumes/*

run-testes: build
	docker run --rm -v .:/app ${IMAGE_NAME}:${IMAGE_TAG} bash -c "python3 -m pytest"

run-database-generate:
	@docker exec postgres bash -c 'psql -U $${POSTGRES_USER} -f database/database.sql'

run-app:
	IMAGE_TAG=${IMAGE_TAG} IMAGE_NAME=${IMAGE_NAME} CONTAINER_NAME=${CONTAINER_NAME} docker-compose up

run-app-detached:
	IMAGE_TAG=${IMAGE_TAG} IMAGE_NAME=${IMAGE_NAME} CONTAINER_NAME=${CONTAINER_NAME} docker-compose up -d

shell: run-app-detached
	docker exec -it ${SERVICE-NAME} bash

shell-db: run-app-detached
	docker exec -it postgres bash -c 'psql -U $${POSTGRES_USER}'
