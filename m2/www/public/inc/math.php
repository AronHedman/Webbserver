<?php
function sum($t1, $t2){
        $sum = $t1 + $t2;
        return $sum;
    }
    
    function multiply($t1, $t2){
        $prod = $t1 * $t2;
        return $prod;
    }

    function sub($t1, $t2){
        $sub = $t1 - $t2;
        return $sub;
    }

    function div($t1, $t2){
        if($t2 == 0){
            return "Kan inte dela med noll";
        } else {
            $div = $t1 / $t2;
            return $div;
        }
    }
?>