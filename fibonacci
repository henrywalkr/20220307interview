<?php
function fibonacci($position){
    if ($position<2 && $position >=0){
        return $position;
    }else{
        if(is_numeric($position) && $position >=0){
            return fibonacci($position-1) + fibonacci($position -2);
        }else{
            return 'Not support!';
        }
        
    }
}

 echo fibonacci(0)."\n"; // 0
 echo fibonacci(1)."\n"; // 1
 echo fibonacci(2)."\n"; // 1
 echo fibonacci(3)."\n"; // 2
 echo fibonacci(4)."\n"; // 3 
 
 echo fibonacci(-1);
