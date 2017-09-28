docker-php-nginx-mysql-memcached
====

## Overview

Docker Compose for PHP, nginx, PHP-FPM, MySQL, memcached development environment.

## Description(Japanse)

[【超簡単】Docker を使って1クリックでモダンな PHP 開発環境ができるようにする（PHP, MySQL, PHP-FPM, nginx, memcached）](http://koni.hateblo.jp/entry/2017/01/28/150522)

## Install

Install Docker for Mac.

[Docker for Mac](https://docs.docker.com/docker-for-mac/)

Clone this repository.

```bash
$ git clone git@github.com:koni/docker-php-nginx-mysql-memcached.git
```

## Usage

Up:

```bash
$ cd docker-php-nginx-mysql-memcached/docker
$ docker-compose up
```

Stop:

```bash
$ docker-compose stop
```

## Switch PHP Version 5.6

You can switch PHP version 5.6.

If you want to use PHP 5.6, write below on `docker-compose.yml`.

```diff
<    build: ./php-fpm71
>    build: ./php-fpm56
```

## License

This software is released under the MIT License, see [LICENSE](https://github.com/koni/docker-php-nginx-mysql-memcached/blob/master/LICENSE).

## Author

[koni](https://github.com/koni)

