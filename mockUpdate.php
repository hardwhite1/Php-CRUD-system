
<?php
    include 'config.php';
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    $user = $result->fetch_assoc();

    //create post block
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        $sql = "UPDATE users SET Name='$name', Email='$email', Age=$age WHERE id=$id";
        if($conn->query($sql))
        {
            echo "User details updated";
            header("Location: read.php");
            exit;
        }
        else
        {
            echo"Error: " . $conn->error;
        }
    }
?>
<form method="POST">
    Name:<input type="text" name="name" value="<?=$user['name'] ?>"><br>
    Email:<input type="email" name="email" value="<?=$user['email']?>">
    Age:<input type="number" name="age" value="<?=$user['age']?>">
    <button type="submit">Update</button>
</form>