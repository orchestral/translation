Orchestra Platform Translation Component
==============

Translation Component extends the functionality of `Illuminate\Translation` to add support for cascading filesystem replacement for Laravel packages.

[![Build Status](https://travis-ci.org/orchestral/translation.svg?branch=master)](https://travis-ci.org/orchestral/translation)
[![Latest Stable Version](https://poser.pugx.org/orchestra/translation/version)](https://packagist.org/packages/orchestra/translation)
[![Total Downloads](https://poser.pugx.org/orchestra/translation/downloads)](https://packagist.org/packages/orchestra/translation)
[![Latest Unstable Version](https://poser.pugx.org/orchestra/translation/v/unstable)](//packagist.org/packages/orchestra/translation)
[![License](https://poser.pugx.org/orchestra/translation/license)](https://packagist.org/packages/orchestra/translation)
[![Coverage Status](https://coveralls.io/repos/github/orchestral/translation/badge.svg?branch=master)](https://coveralls.io/github/orchestral/translation?branch=master)

## Table of Content

* [Version Compatibility](#version-compatibility)
* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Changelog](https://github.com/orchestral/translation/releases)

## Version Compatibility

Laravel    | Translation
:----------|:----------
 5.5.x     | 3.5.x
 5.6.x     | 3.6.x
 5.7.x     | 3.7.x
 5.8.x     | 3.8.x
 6.x       | 4.x
 7.x       | 5.x
 8.x       | 6.x

## Installation

To install through composer, run the following command from terminal:

    composer require "orchestra/translation"

## Configuration

Next replace `Illuminate\Translation\TranslationServiceProvider` with the following service provider in `config/app.php`.

```php
'providers' => [

    // ...

    Orchestra\Translation\TranslationServiceProvider::class,

],
```

## Usage

Translation Component make it easier to have redistribute packages language files, instead of relying on `resources/lang/en/package/name/title.php` you can now publish it under `resources/lang/vendor/name/en/title.php` making it easier to create repository (and publish it under [Github](https://github.com)) for a single packages or extension to handle multiple languages.
