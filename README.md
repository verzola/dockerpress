# Dockerpress
Tired of waiting for a VM to provision so you can develop your next Wordpress product?
Dockerpress starts in seconds and comes with everything you need to develop awesome Wordpress applications.

## Features
- Official Wordpress Docker image
- PHP 7.2
- MySQL 5.7
- Webpack 4
- Browsersync
- Optimizes and minifies CSS and JS
- Autoprefixer
- Stylelint
- Prettier
- WP-CLI

## Development

### Requirements
- docker (https://www.docker.com/get-started)
- docker-compose (https://docs.docker.com/compose/install/)

### Setup
```sh
$ git clone https://github.com/verzola/dockerpress.git
$ cd dockerpress
$ docker-compose up -d
Access http://localhost:3000
```

### Environment variables
If you need to edit the default config, copy env.example to .env:
```sh
$ cp .env.example .env
$ vim .env
```

### Helpers
These helpers run things inside container, so you don't have to install on your machine

- ./bin/build -> build production webpack bundle
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/mysql -> wrapper to connect to mysql db
- ./bin/npm -> wrapper to npm package manager
- ./bin/wp -> wrapper for wp-cli

## TODO
- Add MailHog
- Add SMTP plugin to use it with MailHog
- Deploy
