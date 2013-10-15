<?php namespace Orchestra\Translation;

class FileLoader extends \Illuminate\Translation\FileLoader {

	/**
	 * {@inheritdoc}
	 */
	protected function loadNamespaced($locale, $group, $namespace)
	{
		$items = parent::loadNamespaced($locale, $group, $namespace);
		$file  = "{$this->path}/{$locale}/packages/{$namespace}/{$group}.php";

		if ($this->files->exists($file))
		{
			$items = $this->mergeEnvironment($items, $file);
		}

		return $items;
	}

	/**
	 * Merge the items in the given file into the items.
	 *
	 * @param  array   $items
	 * @param  string  $file
	 * @return array
	 */
	protected function mergeEnvironment(array $items, $file)
	{
		return array_replace_recursive($items, $this->files->getRequire($file));
	}
}
