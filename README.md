Orchestra Platform Translation Component
==============

`Orchestra\Translation` extends the functionality of Illuminate\Translation to add support for cascading filesystem replacement for Laravel 4 packages.

[![Latest Stable Version](https://poser.pugx.org/orchestra/translation/v/stable.png)](https://packagist.org/packages/orchestra/translation) 
[![Total Downloads](https://poser.pugx.org/orchestra/translation/downloads.png)](https://packagist.org/packages/orchestra/translation) 
[![Build Status](https://travis-ci.org/orchestral/translation.png?branch=master)](https://travis-ci.org/orchestral/translation) 
[![Coverage Status](https://coveralls.io/repos/orchestral/translation/badge.png?branch=master)](https://coveralls.io/r/orchestral/translation?branch=master) 
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/orchestral/translation/badges/quality-score.png?s=13ca3b97411ac834d518071f3f75f358f7c8fd22)](https://scrutinizer-ci.com/g/orchestral/translation/) 

## Quick Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
	"require": {
		"orchestra/translation": "2.2.*"
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
* [Change Log](http://orchestraplatform.com/docs/latest/components/translation/changes#v2-2)
