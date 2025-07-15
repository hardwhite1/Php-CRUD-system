<?php
include 'config.php';

$id = $_GET['id'];

// Fetch user data to fill the form
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safely fetch form data after submit
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // SQL UPDATE query with correct syntax
    $sql = "UPDATE users SET Name='$name', Email='$email', Age=$age WHERE id=$id";

    if ($conn->query($sql)) {
        echo "Updated!";
        header("Location: read.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!-- Form to edit the user -->
<form method="POST">
  Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
  Email: <input type="email" name="email" value="<?= $user['email'] ?>"><br>
  Age: <input type="number" name="age" value="<?= $user['age'] ?>" required><br>
  <button type="submit">Update</button>
</form>
