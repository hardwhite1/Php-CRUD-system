<?php
include '../config.php';
$id = $_GET['id'] ?? null;
$user = null;

if($id)
{
    $result = $conn->query("SELECT * FROM users WHERE id = $id");

    $user = $result->fetch_assoc();
}

?>
<!-- Form to edit the user -->
<form action="../handlers/updateService.php" method="POST">
<input type="hidden" name="id" value="<?= $user['id'] ?>">
  Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br>
  Email: <input type="email" name="email" value="<?= $user['email'] ?>"><br>
  Age: <input type="number" name="age" value="<?= $user['age'] ?>" required><br>
  <button type="submit">Update</button>
</form>
