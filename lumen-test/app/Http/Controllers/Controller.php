<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Log;
use Redis;
use Cache;

class Controller extends BaseController
{
    //
    public function redis()
    {
        return Redis::get('key');
    }

    public function cache()
    {
        Log::info('haha');
        return Cache::get('key');
    }
}
