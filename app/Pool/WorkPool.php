<?php

namespace App\Pool;




abstract class WorkPool implements WorkPoolnterface
{

    protected $pools = [];
    public function maxPoolNum()
    {
        return 1000;
    }
    
    
    public function get()
    {
       return array_pop($this->pools);
    }

    public function dispose($work)
    {
        return $this->add($work);        
    }

    public function add($work)
    {
        $this->pools[spl_object_hash($work)] = $work;
    }
    
}