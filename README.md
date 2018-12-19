# :whale: :newspaper: DockerPress
Fast wordpress development environment based on Docker and Webpack.

**WARNING**: This tool is under development. Use at your own risk.  :warning:

## :trophy: Features
- :whale: Official Wordpress Docker image
- :elephant: PHP 7.2
- :dolphin: MySQL 5.7
- :spider_web: :package: Webpack 4
- :eyeglasses: SCSS
- :mailbox: MailHog
- :lipstick: Prettier
- :no_entry_sign: :hankey: Stylelint
- :no_entry_sign: :hankey: ESLint
- :battery: Comes with base theme pre-configured
- BrowserSync
- Autoprefixer
- WP-CLI
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
```sh
# Inject CSS via JS
BROWSERSYNC=false

# Wordpress Database Configuration
WP_DB_HOST=mysql
WP_DB_USER=root
WP_DB_PASSWORD=root
WP_DB_NAME=wordpress
WP_TABLE_PREFIX=wp_

# Wordpress Keys Configuration
# Use this: https://wordplate.github.io/salt/ and append WP_.
WP_AUTH_KEY=dev
WP_SECURE_AUTH_KEY=dev
WP_LOGGED_IN_KEY=dev
WP_NONCE_KEY=dev
WP_AUTH_SALT=dev
WP_SECURE_AUTH_SALT=dev
WP_LOGGED_IN_SALT=dev
WP_NONCE_SALT=dev

# Debug mode on
WP_DEBUG=true
```

## :robot: Helpers
These helpers run things inside container, so you don't have to install on your machine

- ./bin/build -> build production webpack bundle
- ./bin/dev -> attach to browsersync container
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/mailhog -> starts mailhog service
- ./bin/mysql -> wrapper to connect to mysql db
- ./bin/npm -> wrapper to npm package manager
- ./bin/wp -> wrapper for wp-cli
- ./bin/composer -> php composer
- ./bin/reset -> delete all containers, mysql folder and start again

##  :mailbox: MailHog
1. Activate plugin Mail
2. Run ./bin/mailhog
3. Send an e-mail
4. Access http://localhost:8025/

## :warning: Known issues
- Watch does not work on Docker Desktop on Windows.

## :raising_hand_woman: Contributing
Contribuitions are welcome. If you find any problem or have a suggestion, please [open an issue](https://github.com/verzola/dockerpress/issues/new)

## :memo: TODO
- [ ] Install Composer dependencies (including WP itself)
