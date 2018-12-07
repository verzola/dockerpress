# :whale: :newspaper: DockerPress
Fast wordpress development environment based on Docker and Webpack.

**WARNING**: This tool is under development. Use at your own risk.  :warning:

## :trophy: Features
- :elephant: PHP 7.2
- :dolphin: MySQL 5.7
- :spider_web: :package: Webpack 4
- :eyeglasses: SCSS
- :mailbox: MailHog
- :lipstick: Prettier
- BrowserSync
- Autoprefixer
- Stylelint
- ESLint
- WP-CLI
- Comes with base theme pre-configured
- Official Wordpress Docker image
- Optimizes and minifies JS, CSS and images

## :ballot_box_with_check: Requirements
- :whale: [docker](https://www.docker.com/get-started)
- :octopus: [docker-compose](https://docs.docker.com/compose/install/)

## :scroll: Setup
```sh
# clone repo
$ git clone https://github.com/verzola/dockerpress.git

# enter in directory
$ cd dockerpress

# copy env example file
$ cp .env.example .env

# start compose
$ docker-compose up -d

Access http://localhost:3000 and setup Wordpress.
```

## :deciduous_tree: Environment variables
If you need to edit the default config, edit .env file.

## :robot: Helpers
These helpers run things inside container, so you don't have to install on your machine

- ./bin/build -> build production webpack bundle
- ./bin/dev -> starts development environment
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/mailhog -> starts mailhog service
- ./bin/mysql -> wrapper to connect to mysql db
- ./bin/npm -> wrapper to npm package manager
- ./bin/wp -> wrapper for wp-cli

##  :mailbox: MailHog
1. Activate plugin Mail
2. Run ./bin/mailhog
3. Send an e-mail
4. Access http://localhost:8025/

## :warning: Known issues
Watch does not work on Docker Desktop on Windows.

## :raising_hand_woman: Contributing
Contribuitions are welcome. If you find any problem or have a suggestion, please [open an issue](https://github.com/verzola/dockerpress/issues/new)

## :memo: TODO
- [ ] Foo
