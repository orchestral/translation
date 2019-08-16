<?php

namespace Orchestra\Translation;

use Illuminate\Contracts\Container\Container;
use Illuminate\Translation\TranslationServiceProvider as ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected function registerLoader()
    {
        $this->app->singleton('translation.loader', static function (Container $app) {
            return new FileLoader($app->make('files'), $app['path.lang']);
        });
    }
}
