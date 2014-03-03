<?php namespace Orchestra\Translation;

class FileLoader extends \Illuminate\Translation\FileLoader
{
    /**
     * {@inheritdoc}
     */
    protected function loadNamespaceOverrides(array $lines, $locale, $group, $namespace)
    {
        $files = array(
            "{$this->path}/packages/{$namespace}/{$locale}/{$group}.php",
            "{$this->path}/packages/{$locale}/{$namespace}/{$group}.php",
        );

        foreach ($files as $file) {
            $lines = $this->mergeEnvironments($lines, $file);
        }

        return $lines;
    }

    /**
     * Merge the items in the given file into the items.
     *
     * @param  array   $lines
     * @param  string  $file
     * @return array
     */
    public function mergeEnvironments(array $lines, $file)
    {
        if ($this->files->exists($file)) {
            $lines = array_replace_recursive($lines, $this->files->getRequire($file));
        }

        return $lines;
    }
}
