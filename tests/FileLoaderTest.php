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

	/**
	 * Test Orchestra\Translation\FileLoader::loadNamespaced() method.
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
				->with("{$path}/en/packages/orchestra/foundation/install.php")->andReturn(true)
			->shouldReceive('getRequire')->once()
				->with("{$path}/en/packages/orchestra/foundation/install.php")->andReturn(array('install' => 'Install'))
			->shouldReceive('exists')->once()
				->with("{$path}/en/packages/orchestra/foundation/web.php")->andReturn(false)
			->shouldReceive('exists')->once()
				->with("/var/vendor/orchestra/foundation/src/lang/en/web.php")->andReturn(true)
			->shouldReceive('getRequire')->once()
				->with("/var/vendor/orchestra/foundation/src/lang/en/web.php")->andReturn(array('web' => 'Web'));

		$this->assertEquals(array('install' => 'Install'), $stub->load('en', 'install', 'orchestra/foundation'));
		$this->assertEquals(array('web' => 'Web'), $stub->load('en', 'web', 'orchestra/foundation'));
	}
}
