<?php
    function add(...$a){
        $sum = 0;
       foreach($a as $n){
           $sum = $sum + $n;
       }
       return $sum;

    }
    add(1,2,3,4);
    

?>