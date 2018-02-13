<?php

namespace Orchestra\Translation\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Orchestra\Translation\FileLoader;

class FileLoaderTest extends TestCase
{
    /**
     * Teardown the test environment.
     */
    protected function tearDown(): void
    {
        m::close();
    }

    /** @test */
    public function it_has_the_proper_signatures()
    {
        $files = m::mock('Illuminate\Filesystem\Filesystem');
        $stub = new FileLoader($files, '/var/app/langs');

        $this->assertInstanceOf('Illuminate\Translation\FileLoader', $stub);
        $this->assertInstanceOf('Illuminate\Contracts\Translation\Loader', $stub);
    }

    /** @test */
    public function it_can_load_namespaced_translations()
    {
        $path = '/var/app/lang';
        $files = m::mock('Illuminate\Filesystem\Filesystem');
        $stub = new FileLoader($files, $path);

        $stub->addNamespace('orchestra/foundation', '/var/vendor/orchestra/foundation/src/lang');

        $files->shouldReceive('exists')->once()
                ->with('/var/vendor/orchestra/foundation/src/lang/en/title.php')->andReturn(true)
            ->shouldReceive('getRequire')->once()
                ->with('/var/vendor/orchestra/foundation/src/lang/en/title.php')->andReturn(['home' => 'Home', 'install' => 'Install'])
            ->shouldReceive('exists')->once()
                ->with("{$path}/vendor/en/orchestra/foundation/title.php")->andReturn(true)
            ->shouldReceive('getRequire')->once()
                ->with("{$path}/vendor/en/orchestra/foundation/title.php")->andReturn(['install' => 'Installation'])
            ->shouldReceive('exists')->once()
                ->with("{$path}/packages/orchestra/foundation/en/title.php")->andReturn(true)
            ->shouldReceive('getRequire')->once()
                ->with("{$path}/packages/orchestra/foundation/en/title.php")->andReturn(['home' => 'Home Page', 'install' => 'Installed']);

        $this->assertEquals(
            ['home' => 'Home Page', 'install' => 'Installation'],
            $stub->load('en', 'title', 'orchestra/foundation')
        );
    }
}
