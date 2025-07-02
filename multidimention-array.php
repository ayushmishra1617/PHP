<?php

$user=[
    [1,"Ayush","ayush@gmail.com"],
    [2,"Aman","aman@gmail.com"],
    [3,"Vaibhav","xyzgmail.com"]
];

// echo "<pre>";
// print_r($user);//to print the array 
// echo "<pre>";

for($i=0;$i<=count($user);$i++){
    for($j=0;$j<count($user[$i]);$j++){
        echo $user[$i][$j];
        echo "<br>";
    }
}


?>
