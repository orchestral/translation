<?php

namespace Orchestra\Translation;

use Illuminate\Translation\FileLoader as BaseFileLoader;

class FileLoader extends BaseFileLoader
{
    /**
     * {@inheritdoc}
     */
    protected function loadNamespaceOverrides(array $lines, $locale, $group, $namespace)
    {
        $files = [
            "{$this->path}/packages/{$namespace}/{$locale}/{$group}.php",
            "{$this->path}/vendor/{$locale}/{$namespace}/{$group}.php",
        ];

        foreach ($files as $file) {
            $lines = $this->mergeEnvironments($lines, $file);
        }

        return $lines;
    }

    /**
     * Merge the items in the given file into the items.
     *
     * @param  array  $lines
     * @param  string  $file
     *
     * @return array
     */
    public function mergeEnvironments(array $lines, string $file): array
    {
        if ($this->files->exists($file)) {
            $lines = \array_replace_recursive($lines, $this->files->getRequire($file));
        }

        return $lines;
    }
}
