<?php


namespace App\Pool;

use App\AbstractFactory\CacheFactory;
class RedisPool extends WorkPool
{

    protected $initNum = 10;
    public function init()
    {
        $abstractFactory = new CacheFactory();
        for($i =0;$i < $initNum; $i++)
        $this->add();
    }


}