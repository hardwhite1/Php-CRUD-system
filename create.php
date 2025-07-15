<?php include 'config.php';  ?>

<form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Age: <input type="number" name="age" required><br>
    <button type="submit">Save</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users(name, email, age) VALUES('$name', '$email', '$age')";

    if($conn->query($sql))
    {
        echo "User successfuly added";
    }
    else
    {
        echo "Error:" . $conn->error;
    }

}
?>