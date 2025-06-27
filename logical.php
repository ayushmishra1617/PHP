<?php

$a=10;
$b=20;

if($a==10 && $b==20){//we can use here (and) in place of && 
    echo "When both condition are TRUE";
}



elseif($a==20 || $b==40){//we can use here (or) in place of ||
    echo "IF any one condition is True ";
}



elseif($a!=10){//any value except 10
    echo "Only particuler value not have to be true ";
}


elseif($a==10 xor $b==20){//only one condition have to be true not both true nor both false
    echo "Only one have to be true ";
}


else{
    echo "Un";
}

?>
