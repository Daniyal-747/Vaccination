<?php

$conn = new mysqli("localhost", "root", "", "vaccination");

if(!$conn){
    echo "connection failed!";
}

?>