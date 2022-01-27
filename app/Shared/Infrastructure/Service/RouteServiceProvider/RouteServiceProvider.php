<?php

namespace App\Shared\Infrastructure\Service\RouteServiceProvider;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            require app_path('Registry/Routes.php');
        });
    }
}
