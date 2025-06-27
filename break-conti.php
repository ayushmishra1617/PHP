<?php

$a=5;
for($b=0;$b<=10;$b++){
    echo "$b <br>";
    if($b==5){
        break;
    }
}

echo "<br>";

for($b=1;$b<=10;$b++){
    if($b==3||$b==7){
        continue;
    }
    echo "$b <br>";
}



?>
