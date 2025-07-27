<?php
include 'config.php';
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
if($conn->query($sql))
{
    header("Location: read.php");
}
else
{
    echo"Error: " . $conn->error;
}

?>