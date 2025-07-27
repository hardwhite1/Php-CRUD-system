<?php
    include '../config.php';

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "UPDATE users SET Name='$name', Email='$email', Age=$age WHERE id=$id";
        if($conn->query($sql))
        {
            echo "Record updated successfuly";
            header("Location: ../views/read.php");
        }
        else
        {
            echo "Error: " . $conn->error;
        }
    }
    else
    {
        echo"Invalid request.";
    }


?>