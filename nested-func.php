<?php

function parent(){
    echo "parent function is called";

    function child(){
        echo "<br> child function is called";
    }
}

parent();//parent function must be called first
child();//it can be called always inside parent

?>
