<?php

$conn=mysqli_connect("localhost","root","","test");
if(!$conn){
    die("database is not connected");
    
}
else{
    echo "connected";
}

?>