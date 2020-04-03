<?php

namespace App\AbstractFactory;


class FileCache implements CacheAbstractFactoryInterface
{
    public function put($key,$str)
    {
        return "file cache write string ".$str;
    }

    public function get($key)
    {
        return "file cache get key ".$key;
    }

}