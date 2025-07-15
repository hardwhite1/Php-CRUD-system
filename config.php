<?php

$conn = new mysqli("localhost", "root", "root", "crud_demo");

//check whether connection was successful or not
if($conn -> connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connection successful";
}

?>