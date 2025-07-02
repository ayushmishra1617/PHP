<?php

$userdetail=[
    "name"=>"Ayush",
    "age"=>21,
    "city"=>"prayagraj",
    "state"=>"UP",
    "email"=>"ayush@gmail.com"
];

    // echo $userdetail["name"];
    // echo "<br>";
    // echo $userdetail["age"];
    // echo "<br>";
    // echo $userdetail["city"];
    // echo "<br>";

    foreach($userdetail as $key => $data){
        echo $key ." is ". $data;
        echo "<br>";
    }

?>
