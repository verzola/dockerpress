# :whale: :newspaper: DockerPress

Fast Wordpress environment based on Docker.

**WARNING**: This tool is under development. Use at your own risk. :warning:

## Table of contents

1. [Features](#features)
2. [Requirements](#requirements)
3. [Setup](#setup)
4. [Environment variables](#env)
5. [Helpers](#helpers)
6. [Mail](#mail)
7. [Plugins](#plugins)
8. [Known issues](#known-issues)
9. [Contribuiting](#contrib)
10. [TODO](#todo)

## :trophy: Features <a id="features"></a>

- :newspaper: Wordpress 5.8
- :elephant: PHP 7.3
- Nginx 1.17
- :dolphin: MySQL 8
- :musical_score: [Composer](https://getcomposer.org/)
- :mailbox: [Mailhog](https://github.com/mailhog/MailHog)
- [WP-CLI](https://wp-cli.org/)

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
$ git clone https://github.com/verzola/dockerpress.git

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
WP_DB_HOST=mysql
WP_DB_NAME=dockerpress
WP_TABLE_PREFIX=wp_
WP_DB_USER=root
WP_DB_PASSWORD=changeme
WP_AUTH_KEY=dev
WP_SECURE_AUTH_KEY=dev
WP_LOGGED_IN_KEY=dev
WP_NONCE_KEY=dev
WP_AUTH_SALT=dev
WP_SECURE_AUTH_SALT=dev
WP_LOGGED_IN_SALT=dev
WP_NONCE_SALT=dev
WP_DEBUG=1

NGINX_VERSION=1.17-alpine

MYSQL_VERSION=8.0
MYSQL_ROOT_PASSWORD=changeme
MYSQL_USER=root
MYSQL_PASSWORD=changeme
MYSQL_DATABASE=dockerpress
```

## :robot: Helpers <a id="helpers"></a>

These helpers run things inside containers, so you don't have to install anything besides Docker on your machine

- ./bin/composer -> wrapper for composer inside docker
- ./bin/dump -> create a database dump in `data/dumps/dump.sql`
- ./bin/logs -> show services logs
- ./bin/mailhog -> start mailhog service
- ./bin/mysql -> wrapper for mysql inside docker
- ./bin/reset -> delete everything and start again
- ./bin/setup -> setup dockerpress and starts up containers
- ./bin/start -> start containers
- ./bin/stop-> start up
- ./bin/wp -> wrapper for wp-cli

## :electric_plug: Plugins <a id="plugins"></a>

Plugins can be added on `composer.json`. Use [WPackagist](https://wpackagist.org)

## :mailbox: Mailhog <a id="mail"></a>

1. Run ./bin/mailhog
2. Send an e-mail
3. Access http://localhost:8025

## :raising_hand_woman: Contributing <a id="contrib"></a>

Contribuitions are welcome. If you find any problem or have a suggestion, please [open an issue](https://github.com/verzola/dockerpress/issues/new)

## :memo: TODO <a id="todo"></a>
