<?php

$z=10;
echo "Before the Statement <br>";
if($z==20){
    goto abc;
}
//If condition matched then this code is NOT executed 
$sname="Ayush";
echo "$sname <br>";
//If condition matched then DIRECTLY THIS CODE IS EXECUTED
abc:
echo "After the goto statement";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



for($a=0;$a<10;$a++){
    echo "$a <br>";
    if($a==5){
        goto outside;
    }
}
outside:
echo "This code is out of the loop";

?>
