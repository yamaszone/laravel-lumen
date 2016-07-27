# PHP Laravel Lumen Micro Framework

Minimal Lumen with: Nginx and MySQL

## Requirements

* [Docker Engine](https://docs.docker.com/installation/)
* [Docker Compose](https://docs.docker.com/compose/)

## Prerequisite: Install docker-compose on CoreOS

Use the following convenient script to do frequent operation around Lumen app.

```sh
$ sudo su -
$ curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > /opt/bin/docker-compose
$ chmod +x /opt/bin/docker-compose
```

## Running

Use the following convenient script to do frequent operation around Lumen app.

```sh
$ ./run help
Usage:
         a, app         : Launch Lumen app.
         e, enter       : Enter Lumen container.
         example        : Send an example request to sample Lumen app.
         t, tests       : Run tests.
         h, help        : Show this help.
```
