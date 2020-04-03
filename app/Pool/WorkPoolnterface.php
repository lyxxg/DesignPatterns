<?php

namespace App\Pool;


interface WorkPoolnterface
{


    public function maxPoolNum();
    
    public function get();

    public function dispose();

    public function add();

}