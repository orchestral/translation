Orchestra Platform Translation Component
==============

Translation Component extends the functionality of `Illuminate\Translation` to add support for cascading filesystem replacement for Laravel packages.

[![Build Status](https://travis-ci.org/orchestral/translation.svg?branch=3.7)](https://travis-ci.org/orchestral/translation)
[![Latest Stable Version](https://poser.pugx.org/orchestra/translation/version)](https://packagist.org/packages/orchestra/translation)
[![Total Downloads](https://poser.pugx.org/orchestra/translation/downloads)](https://packagist.org/packages/orchestra/translation)
[![Latest Unstable Version](https://poser.pugx.org/orchestra/translation/v/unstable)](//packagist.org/packages/orchestra/translation)
[![License](https://poser.pugx.org/orchestra/translation/license)](https://packagist.org/packages/orchestra/translation)
[![Coverage Status](https://coveralls.io/repos/github/orchestral/translation/badge.svg?branch=3.7)](https://coveralls.io/github/orchestral/translation?branch=3.7)

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

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "orchestra/translation": "^3.5"
    }
}
```

### Quick Installation

Above installation can also be simplify by using the following command:

    composer require "orchestra/translation=^3.5"

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
