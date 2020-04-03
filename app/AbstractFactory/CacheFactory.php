<?php

namespace App\AbstractFactory;


class CacheFactory
{

    protected $file;
    public function getFileCache()
    {
        if( $this->file != null)
        return $this->file;

        return $this->file = new FileCache();
    }


    protected $redis;
    public function getRedisCache()
    {
        if( $this->redis != null)
        return $this->redis;

        return $this->redis = new RedisCache();         
    }


    


}