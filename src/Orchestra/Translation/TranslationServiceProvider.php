<?php namespace Orchestra\Translation;

use Illuminate\Translation\TranslationServiceProvider as ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected function registerLoader()
    {
        $this->app->bindShared('translation.loader', function ($app) {
            return new FileLoader($app['files'], $app['path'].'/lang');
        });
    }
}
