# :whale: :newspaper: DockerPress
Fast Wordpress development environment based on Docker and Webpack.

**WARNING**: This tool is under development. Use at your own risk.  :warning:

## Table of contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Setup](#setup)
4. [Environment variables](#env)
5. [Helpers](#helpers)
7. [Mail](#mail)
8. [Plugins](#plugins)
9. [Known issues](#known-issues)
10. [Contribuiting](#contrib)
11. [TODO](#todo)

## :trophy: Features <a id="features"></a>
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

## :ballot_box_with_check: Requirements <a id="requirements"></a>
- :whale: [docker](https://www.docker.com/get-started)
- :octopus: [docker-compose](https://docs.docker.com/compose/install/)

## :scroll: Setup <a id="setup"></a>
```sh
# clone repo
$ git clone https://github.com/verzola/dockerpress.git

# enter in directory
$ cd dockerpress

# run setup script
$ ./bin/setup

Wait a few seconds and access http://localhost:3000 to setup Wordpress.
```

## :deciduous_tree: Environment variables <a id="env"></a>
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

## :robot: Helpers <a id="helpers"></a>
These helpers run things inside containers, so you don't have to install anything besides Docker on your machine

- ./bin/build -> build production webpack bundle
- ./bin/dev -> attach to browsersync container
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/mailhog -> starts mailhog service
- ./bin/mysql -> wrapper to connect to mysql db
- ./bin/npm -> wrapper to npm package manager
- ./bin/wp -> wrapper for wp-cli
- ./bin/composer -> php composer
- ./bin/reset -> delete all containers, mysql, vendor and wp folder

##  Plugins <a id="plugins"></a>
- Base plugin for general project config/functions
- [Plate](https://github.com/wordplate/plate)
- [BEM](https://github.com/wordplate/bem)
- [Mail](https://github.com/wordplate/mail)
- [Disable Emojis](https://br.wordpress.org/plugins/disable-emojis/)
- [Duplicate Post](https://br.wordpress.org/plugins/duplicate-post/)
- [Email Log](https://wordpress.org/plugins/email-log/)

##  :mailbox: MailHog <a id="mail"></a>
1. Run ./bin/mailhog
2. Send an e-mail
3. Access http://localhost:8025

## :warning: Known issues <a id="known-issues"></a>
- Watch does not work on Docker Desktop on Windows.

## :raising_hand_woman: Contributing <a id="contrib"></a>
Contribuitions are welcome. If you find any problem or have a suggestion, please [open an issue](https://github.com/verzola/dockerpress/issues/new)

## :memo: TODO <a id="todo"></a>
