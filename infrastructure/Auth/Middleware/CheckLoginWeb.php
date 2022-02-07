<?php

namespace Infrastructure\Auth\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Infrastructure\Libraries\HelperFunction;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Route;
use Closure;

class CheckLoginWeb
{
    public function __construct(
        Route $route,
        Application $app,
        Authenticate $authenticate,
        HelperFunction $helperFunction
    ) {
        $this->app            = $app;
        $this->route          = $route;
        $this->authenticate   = $authenticate;
        $this->helperFunction = $helperFunction;
    }

    public function handle($request, Closure $next)
    {
        if(\Auth::check()){
            return redirect('/');
        }
        return $next($request);
    }
}
