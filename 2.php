<?php  
    
    $data = array("larine","aduh","qifuat","toda","anevi","samid","kifuat","sepuluh","delapan","sembilan");    
    echo "Data sebelum diurutkan : ";
    for($i=0; $i<10; $i++){
        if($i==9){
            echo " $data[$i]<br><br>";
        }
        else{
            echo " $data[$i] ,";
        }        
    }

    sort($data);
    
    echo("Data setelah diurutkan : ");
    for($i=0; $i<10; $i++){
        if($i==9){
            echo " $data[$i] ";
        }
        else{
            echo " $data[$i] ,";
        }        
    }
    
?>