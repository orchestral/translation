<?php namespace Orchestra\Translation;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Translation\TranslationServiceProvider as ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected function registerLoader()
    {
        $this->app->singleton('translation.loader', function (Application $app) {
            return new FileLoader($app->make('files'), $app['path.lang']);
        });
    }
}
