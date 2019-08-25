<?php

namespace Orchestra\Translation\Tests\Unit;

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
}
