DOCKER_COMPOSE = docker-compose
DOCKER_COMPOSE_FILE = ./srcs/docker-compose.yml

# Build Docker images and start containers
.PHONY: all
all: build up

# Build Docker images
.PHONY: build
build:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) build

# Start containers
.PHONY: up
up:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d

# Stop and remove containers
.PHONY: down
down:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) down

# Clean up containers, volumes, and networks
.PHONY: fclean
fclean:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) down -v --remove-orphans