<?php

function xyz(){
    echo "<h2>My Details</h2>";
}

function abc(){

    xyz();//function inside function
    echo "My name is khan";
    echo "<br>";
    echo "My age is 22";
    echo "<br>";
    echo "My mail is mishra@gmail.com";
    echo "<br>";
    echo "<hr>";
}

abc();

?>
