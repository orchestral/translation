<?php

namespace Orchestra\Translation\Tests\Feature;

use Illuminate\Translation\TranslationServiceProvider as BaseServiceProvider;
use Orchestra\Testbench\TestCase as Testbench;
use Orchestra\Translation\TranslationServiceProvider as OverrideServiceProvider;

abstract class TestCase extends Testbench
{
    /**
     * Override application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function overrideApplicationProviders($app)
    {
        return [
            BaseServiceProvider::class => OverrideServiceProvider::class,
        ];
    }
}
