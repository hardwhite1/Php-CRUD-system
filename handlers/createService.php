<?php
include '../config.php';

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users(name, email, age) VALUES('$name', '$email', '$age')";

    if($conn->query($sql))
    {
        echo "User successfuly added";
        header("Location: ../views/read.php");
        exit;
    }
    else
    {
        echo "Error: " . $conn->error;
    }
}


?>