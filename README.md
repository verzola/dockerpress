# :whale: :newspaper: DockerPress
Fast wordpress development environment based on Docker and Webpack

**WARNING**: :warning: This tool is under development. Use at your own risk.

If you find any problem, please [open an issue](https://github.com/verzola/dockerpress/issues/new).

## Features
- PHP 7.2
- MySQL 5.7
- Webpack 4
- SCSS
- BrowserSync
- Autoprefixer
- Stylelint
- ESLint
- Prettier
- WP-CLI
- MailHog
- Comes with base theme pre-configured
- Official Wordpress Docker image
- Optimizes and minifies JS, CSS and images

## Development

### Requirements
- :whale: [docker](https://www.docker.com/get-started)
- :octopus: [docker-compose](https://docs.docker.com/compose/install/)

### :scroll: Setup
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
- ./bin/dev -> starts development environment
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/mailhog -> starts mailhog service
- ./bin/mysql -> wrapper to connect to mysql db
- ./bin/npm -> wrapper to npm package manager
- ./bin/wp -> wrapper for wp-cli

### MailHog
1. Activate plugin Mail
2. Run ./bin/mailhog
3. Send an e-mail
4. Access http://localhost:8025/

## :warning: Known issues
Watch does not work on Docker Desktop on Windows.

## :raising_hand_woman: Contributing
Contribuitions are welcome. If you find any problem or have a suggestion, please open an issue.

## :memo: TODO
- [ ] 
