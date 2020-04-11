<?php

namespace Lejin\UnlimitedClassified;

use Illuminate\Support\ServiceProvider;

class UnlimitedClassifiedServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('unlimited_classified', function () {
            return new UnlimitedClassified();
        });
    }
}
