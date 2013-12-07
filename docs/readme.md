---
title: Translation Component
---

`Orchestra\Translation` is a small improvement over `illuminate/translation` where you can now have `app/lang/en/packages/acme/foobar` without having to touch package source code.

> This has been deprecated in Laravel 4.1 since the functionality has been included in laravel/framework.

* [Installation](#installation)
* [Configuration](#configuration)

## Installation {#installation}

To install through composer, simply put the following in your `composer.json` file:

	{
		"require": {
			"orchestra/translation": "2.1.*@dev"
		}
	}

## Configuration {#configuration}

Next add the service provider in `app/config/app.php`.

	'providers' => array(

		// ...
		# Remove 'Illuminate\Translation\TranslationServiceProvider'
		# and add 'Orchestra\Translation\TranslationServiceProvider'

		'Orchestra\Translation\TranslationServiceProvider',
	),

> `Orchestra\Translation\TranslationServiceProvider` should replace `Illuminate\Translation\TranslationServiceProvider`.
