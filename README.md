# Helheim Website

[![Travis](https://img.shields.io/travis/Herman1994/Website.svg?style=flat-square)](https://travis-ci.org/Herman1994/Website)

## Install

Use Composer and npm to install PHP and JS dependencies. Then copy your details to the `.env` file, using `.env.example` as a template.

```
composer install
npm install
```

#### Generate an App Key

Generate a unique key for Laravel's cipher.

```
php artisan key:generate
```

#### Generate an API Key

Generate a secret key for our API. The output of this command is the only time the key is shown in plain text (but it can be regenerated at any point).

```
php artisan api:generate
```

#### Create required DB tables

```
php artisan migrate 
```

## Usage

We use gulp for our dev build process. It starts browserify on localhost:3000.

```
gulp watch
```
