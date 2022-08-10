<?php 
$test = 8;
$a = $test;
    for ($i=0; $i < $test; $i++) { 
        $a = $a - 2;
        $c = $a * 2;
        if ($c == $test) {
            echo $a;
        }
    }
?>