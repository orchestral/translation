<?php

namespace Orchestra\Translation\Tests\Feature;

use Illuminate\Support\Facades\Lang;

class FileLoaderTest extends TestCase
{
     /** @test */
    public function it_can_load_namespaced_translations()
    {
        $loader = Lang::getLoader();

        $loader->addNamespace('orchestra/foundation', __DIR__.'/lang');

        $this->assertEquals(
            ['home' => 'Home', 'install' => 'Installation'],
            $loader->load('en', 'title', 'orchestra/foundation')
        );
    }
}
