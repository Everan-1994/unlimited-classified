<?php

namespace Lejin\UnlimitedClassified\Facades;

use Illuminate\Support\Facades\Facade;

class UnlimitedClassified extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'unlimited_classified';
    }
}
