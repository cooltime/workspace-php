<?php

namespace Cooltime\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Cache;
use Redis;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        Log::info('Hello World.', ['id' => 'aa']);
    }

    public function test1()
    {
        $server = \Cooltime\Models\ServerInfo::findOrFail(5995);
        event(new \Cooltime\Events\Test($server));
    }

    public function cache()
    {
        return Cache::get('key');
    }

    public function redis()
    {
        var_dump(Redis::jhhh);
        return Redis::lrange('list', 0, -1);
    }
}
