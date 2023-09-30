<?php
    function inverse(int $a){
        if($a == 0){
            throw new Exception("Division by zero");
        }
        return 1/$a;
    }

    try{
        
        echo inverse(0);
    } catch(Exception $e){
        print_r($e -> getMessage());
        // echo "Nolga bo'lish mumkin emas!";
    }
    
?>