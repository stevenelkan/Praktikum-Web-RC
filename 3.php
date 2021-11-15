<?php
    function prima($j){
        for($a=2;$a<$j;$a++){
           if($j%$a==0){
                return 0;
            }
        }
       return 1;
    }
    
    echo "Yang termasuk bilangan prima dari 1 sampai 50 adalah : <br> <br>";

    for($i=2;$i<=50;$i++){
        $a=prima($i);
        if($a==1){
            if($i==47){
                echo "{$i}";
            }
            else{
                echo "{$i},";
            }     
        }
    }
    
 ?>