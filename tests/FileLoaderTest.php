<?php namespace Orchestra\Translation\Tests;

use Mockery as m;
use Orchestra\Translation\FileLoader;

class FileLoaderTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Teardown the test environment.
	 */
	public function tearDown()
	{
		m::close();
	}

	/**
	 * Test Orchestra\Translation\FileLoader.
	 *
	 * @test
	 */
	public function testFileLoaderInstance()
	{
		$files = m::mock('Illuminate\Filesystem\Filesystem');
		$stub  = new FileLoader($files, '/var/app/langs');

		$this->assertInstanceOf('Illuminate\Translation\FileLoader', $stub);
		$this->assertInstanceOf('Illuminate\Translation\LoaderInterface', $stub);
	}
}
