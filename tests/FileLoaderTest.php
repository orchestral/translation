<?php namespace Orchestra\Translation\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Orchestra\Translation\FileLoader;

class FileLoaderTest extends TestCase
{
    /**
     * Teardown the test environment.
     */
    public function tearDown()
    {
        m::close();
    }

    /**
     * Test Illuminate\Translation\FileLoader.
     *
     * @test
     */
    public function testFileLoaderInstance()
    {
        $files = m::mock('Illuminate\Filesystem\Filesystem');
        $stub  = new FileLoader($files, '/var/app/langs');

        $this->assertInstanceOf('Illuminate\Translation\FileLoader', $stub);
        $this->assertInstanceOf('Illuminate\Contracts\Translation\Loader', $stub);
    }

    /**
     * Test Illuminate\Translation\FileLoader::loadNamespaced() method.
     *
     * @test
     */
    public function testLoadNamespacedMethod()
    {
        $path  = '/var/app/lang';
        $files = m::mock('Illuminate\Filesystem\Filesystem');
        $stub  = new FileLoader($files, $path);

        $stub->addNamespace('orchestra/foundation', '/var/vendor/orchestra/foundation/src/lang');

        $files->shouldReceive('exists')->once()
                ->with("/var/vendor/orchestra/foundation/src/lang/en/title.php")->andReturn(true)
            ->shouldReceive('getRequire')->once()
                ->with("/var/vendor/orchestra/foundation/src/lang/en/title.php")->andReturn(['home' => 'Home', 'install' => 'Install'])
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
