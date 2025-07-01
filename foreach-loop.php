<?php

$users=["anil","ayush","bruce","tony"];

foreach($users as $x){
    if($x=="bruce"){
        continue;
    }
    echo "<h3>".$x."</h3>";

    //  if($users=="bruce"){
    //      break;
    // }
}

?>
