<?php


namespace App\AbstractFactory;



interface CacheAbstractFactoryInterface
{
   
    public function put($key,$str);


    public function get($str);

}
