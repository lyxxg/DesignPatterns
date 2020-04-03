<?php

namespace App\AbstractFactory;


class RedisCache implements CacheAbstractFactoryInterface
{
    public function put($key,$str)
    {
        return "redis cache write string ".$str;
    }

    public function get($key)
    {
        return "redis cache get key ".$key;
    }

}