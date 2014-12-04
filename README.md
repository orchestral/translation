Orchestra Platform Translation Component
==============

`Orchestra\Translation` extends the functionality of Illuminate\Translation to add support for cascading filesystem replacement for Laravel 4 packages.

[![Latest Stable Version](https://img.shields.io/github/release/orchestral/translation.svg?style=flat)](https://packagist.org/packages/orchestra/translation)
[![Total Downloads](https://img.shields.io/packagist/dt/orchestra/translation.svg?style=flat)](https://packagist.org/packages/orchestra/translation)
[![MIT License](https://img.shields.io/packagist/l/orchestra/translation.svg?style=flat)](https://packagist.org/packages/orchestra/translation)
[![Build Status](https://img.shields.io/travis/orchestral/translation/master.svg?style=flat)](https://travis-ci.org/orchestral/translation)
[![Coverage Status](https://img.shields.io/coveralls/orchestral/translation/master.svg?style=flat)](https://coveralls.io/r/orchestral/translation?branch=master)
[![Scrutinizer Quality Score](https://img.shields.io/scrutinizer/g/orchestral/translation/master.svg?style=flat)](https://scrutinizer-ci.com/g/orchestral/translation/)

## Quick Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require": {
		"orchestra/translation": "3.0.*"
	}
}
```

Next replace `Illuminate\Translation\TranslationServiceProvider` with the following service provider in `app/config/app.php`.

```php
'providers' => array(

	// ...

	'Orchestra\Translation\TranslationServiceProvider',
),
```

## Resources

* [Documentation](http://orchestraplatform.com/docs/latest/components/translation)
* [Change Log](http://orchestraplatform.com/docs/latest/components/translation/changes#v3-0)
