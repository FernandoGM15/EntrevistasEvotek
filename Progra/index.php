<?php
//los numero tienen que ser  0 1 1 2 3 5 8 13 21 ...

$input= 7;
$var0=0;
$var1=0;
$var2=1;
$resultado=0;

if($input==0){
    $resultado = 0;
    echo "NO DA <br>";  
}else if($input==1){
        echo "0";
}else if($input == 2){
        echo "$var1 <br>" . "$var2 <br>";
}else{
        echo "$var1 <br>" . "$var2 <br>";
        for($i=0; $i<$input - 2; $i++){ 
             $resultado= $var1 + $var2;
            $var1 = $var2;
            $var2 = $resultado; 
            echo "$resultado <br>";
        }
}
?>