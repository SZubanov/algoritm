#!make

COMPOSE=docker-compose -f docker/docker-compose.yml

up:
	$(COMPOSE) up -d

down:
	$(COMPOSE) down

container:
	$(COMPOSE) exec leetcode sh

exec:
	$(COMPOSE) exec leetcode php $(path)