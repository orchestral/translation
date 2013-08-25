<?php namespace Orchestra\Translation;

use Illuminate\Translation\TranslationServiceProvider as ServiceProvider;

class TranslationServiceProvider extends ServiceProvider {

	/**
	 * Register the translation line loader.
	 *
	 * @return void
	 */
	protected function registerLoader()
	{
		$this->app['translation.loader'] = $this->app->share(function($app)
		{
			return new FileLoader($app['files'], $app['path'].'/lang');
		});
	}
}
