<?php namespace Orchestra\Translation;

class FileLoader extends \Illuminate\Translation\FileLoader {

	/**
	 * Load a namespaced translation group.
	 *
	 * @param  string  $locale
	 * @param  string  $group
	 * @param  string  $namespace
	 * @return array
	 */
	protected function loadNamespaced($locale, $group, $namespace)
	{
		if ($this->files->exists($full = "{$this->path}/{$locale}/packages/{$namespace}/{$group}.php"))
		{
			return $this->files->getRequire($full);
		}

		return parent::loadNamespaced($locale, $group, $namespace);
	}
}
