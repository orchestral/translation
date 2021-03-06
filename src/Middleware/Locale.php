<?php

namespace Orchestra\Translation\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;

abstract class Locale
{
    /**
     * The application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Create a new middleware instance.
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->app->setLocale($this->getCurrentLocale($request));

        return $next($request);
    }

    /**
     * Get current locale.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    abstract protected function getCurrentLocale($request): string;
}
