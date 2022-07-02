<?php

    trait db{
        public function sd()
        {
            echo "test";
        }
    }
    
    class bd
    {
        use db;
    }
    
$m = new bd();

$m->sd();




?>