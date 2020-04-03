<?php


namespace App\AbstractFactory;

use PHPUnit\Framework\TestCase;

class StartTest extends TestCase
{

    public function testCreateFactory()
    {
        
       $cacheFactory =  new CacheFactory();
       $this->assertTrue(true);     
       return $cacheFactory;
    }

    /**
    * @depends testCreateFactory
    */
    public function testFile($factoy)
    {
      $this->assertEquals($factoy->getFileCache(),new FileCache());     
    }


   /**
    * @depends testCreateFactory
    */
    public function testRedis($factoy)
    {
      $this->assertEquals($factoy->getRedisCache(),new RedisCache());     
    }



}