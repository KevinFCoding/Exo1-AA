<?php


    function Fibonachi($n){

        $a = 0;
        $b = 1;
        $c = 5;

        for ($i = 2; $i <= $n; $i++){

            if($i == 0) {
                //echo 0 . PHP_EOL;
            }
            if($i == 1){
                //echo 1 . PHP_EOL;
            }
            $c = $a + $b;
            $a = $b;
            $b = $c;



        }
        echo $c."\n\n";


    }

    Fibonachi(10);
Fibonachi(100);
Fibonachi(1000);
Fibonachi(10000);
