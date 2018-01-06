<?php

namespace Orchestra\Translation\Middleware;

class BrowserLocale extends Locale
{
    /**
     * Get current locale.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return string
     */
    protected function getCurrentLocale($request): string
    {
        return $request->getPreferredLanguage();
    }
}
