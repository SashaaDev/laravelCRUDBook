# laravel-api-crud-docker-tests

## Introduction

Simple laravel crud api docker-compose.

## Usage


###  Setup project

1. Git clone & change directory
2. Execute the following command


###  Software requirments
docker, docker-compose, make

```bash
$ make install
```

###  Run project

```bash
$ make up
```

http://localhost


###  Stop project

```bash
$ make down
```

###  Test project

```bash
$ make test
```

###  Get swagger
before getting swagger be sure that you`re run make up
```
http://localhost/docs/index.html
```

## Tips

- Read this [Makefile](https://github.com/ucan-lab/docker-laravel/blob/main/Makefile).
- Read this [Wiki](https://github.com/ucan-lab/docker-laravel/wiki).

## Container structures

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php):php:8.3.2-fpm-alpine3.18
  - [composer](https://hub.docker.com/_/composer):2.6

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.25

### db container

- Base image
  - [postgres:16-alpine](https://hub.docker.com/r/mysql/mysql-server):16.0
