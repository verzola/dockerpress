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
- :newspaper: Latest Wordpress
- :elephant: PHP 7.3
- :dolphin: MySQL 5.7
- :musical_score: Plugins managed by Composer
- :mailbox: MailHog
- WP-CLI

## :ballot_box_with_check: Requirements <a id="requirements"></a>
- :whale: [docker](https://www.docker.com/get-started)
- :octopus: [docker-compose](https://docs.docker.com/compose/install/)

## :fast_forward: Quickstart
If you meet all the requirements, you can use this quickstart script.

It clones the repo, enter in it, runs the setup script, and then opens http://localhost.
```sh
$ curl https://raw.githubusercontent.com/verzola/dockerpress/master/bin/quickstart | bash
```

## :scroll: Setup <a id="setup"></a>
```sh
# clone repo
$ git clone --recursive https://github.com/verzola/dockerpress.git

# enter in directory
$ cd dockerpress

# run setup script
$ ./bin/setup

Wait a few seconds and open http://localhost to setup Wordpress.
Open http://localhost

# after initial setup, run this command to start the containers
$ ./bin/start
```

## :deciduous_tree: Environment variables <a id="env"></a>
If you need to edit the default config, edit .env file.
```sh
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

- ./bin/composer -> wrapper for php composer
- ./bin/start -> start up
- ./bin/dump -> create a database dump in database/dump.sql
- ./bin/logs -> attach to browsersync container
- ./bin/mailhog -> starts mailhog service
- ./bin/mysql -> wrapper to connect to mysql shell
- ./bin/reset -> delete all containers, mysql, vendor and wp folder
- ./bin/setup -> setup dockerpress and startup containers
- ./bin/wp -> wrapper for wp-cli

## :electric_plug: Plugins <a id="plugins"></a>
- [Duplicate Post](https://br.wordpress.org/plugins/duplicate-post/)
Go to https://wpackagist.org add plugins to composer

##  :mailbox: MailHog <a id="mail"></a>
1. Run ./bin/mailhog
2. Send an e-mail
3. Access http://localhost:8025

## :raising_hand_woman: Contributing <a id="contrib"></a>
Contribuitions are welcome. If you find any problem or have a suggestion, please [open an issue](https://github.com/verzola/dockerpress/issues/new)

## :memo: TODO <a id="todo"></a>
