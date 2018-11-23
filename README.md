# DockerPress
Fast wordpress development environment based on Docker and Webpack

## Features
- Comes with base theme pre-configured
- Official Wordpress Docker image
- PHP 7.2
- MySQL 5.7
- Webpack 4
- Browsersync
- Optimizes and minifies JS, CSS and images
- Autoprefixer
- Stylelint
- Prettier
- WP-CLI
- MailHog

## Development

### Requirements
- docker (https://www.docker.com/get-started)
- docker-compose (https://docs.docker.com/compose/install/)

### Setup
```sh
$ git clone https://github.com/verzola/dockerpress.git
$ cd dockerpress
$ cp .env.example .env
$ docker-compose up -d
Access http://localhost:3000
```

### Environment variables
If you need to edit the default config, edit .env file.

### Helpers
These helpers run things inside container, so you don't have to install on your machine

- ./bin/build -> build production webpack bundle
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/mysql -> wrapper to connect to mysql db
- ./bin/npm -> wrapper to npm package manager
- ./bin/wp -> wrapper for wp-cli
