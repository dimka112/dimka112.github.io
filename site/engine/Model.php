<?php

namespace engine;

use engine\DB; 

abstract class Model {
    
    public function getDB(){
        return DB::getInstance();
    }
}