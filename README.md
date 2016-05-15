Orchestra Platform Translation Component
==============

[![Join the chat at https://gitter.im/orchestral/platform/components](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/orchestral/platform/components?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

Translation Component extends the functionality of `Illuminate\Translation` to add support for cascading filesystem replacement for Laravel packages.

[![Latest Stable Version](https://img.shields.io/github/release/orchestral/translation.svg?style=flat-square)](https://packagist.org/packages/orchestra/translation)
[![Total Downloads](https://img.shields.io/packagist/dt/orchestra/translation.svg?style=flat-square)](https://packagist.org/packages/orchestra/translation)
[![MIT License](https://img.shields.io/packagist/l/orchestra/translation.svg?style=flat-square)](https://packagist.org/packages/orchestra/translation)
[![Build Status](https://img.shields.io/travis/orchestral/translation/3.3.svg?style=flat-square)](https://travis-ci.org/orchestral/translation)
[![Coverage Status](https://img.shields.io/coveralls/orchestral/translation/3.3.svg?style=flat-square)](https://coveralls.io/r/orchestral/translation?branch=3.3)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/orchestral/translation/3.3.svg?style=flat-square)](https://scrutinizer-ci.com/g/orchestral/translation/)

## Table of Content

* [Version Compatibility](#version-compatibility)
* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Change Log](http://orchestraplatform.com/docs/latest/components/translation/changes#v3-3)

## Version Compatibility

Laravel    | Translation
:----------|:----------
 4.0.x     | 2.0.x
 4.1.x     | 2.1.x
 4.2.x     | 2.2.x
 5.0.x     | 3.0.x
 5.1.x     | 3.1.x
 5.2.x     | 3.2.x
 5.3.x     | 3.3.x@dev

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require": {
		"orchestra/translation": "~3.0"
	}
}
```

### Quick Installation

Above installation can also be simplify by using the following command:

    composer require "orchestra/translation=~3.0"

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

## Resources

* [Documentation](http://orchestraplatform.com/docs/latest/components/translation)
