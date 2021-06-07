<?php

namespace App\Traits;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait InteractsWithRoute
{
    public string $currentRouteName;

    public function isRoute($route): bool
    {
        return Str::is($route, $this->currentRouteName);
    }

    public function mountInteractsWithRoute()
    {
        $this->currentRouteName = Route::currentRouteName()?? '';
    }
}
