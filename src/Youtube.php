<?php

namespace Youtube;

use Illuminate\Support\Facades\Facade;

/**
 * @method static YoutubeSearch search()
 */
class Youtube extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return YoutubeRepository::class;
    }
}