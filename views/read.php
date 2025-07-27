<?php include '../config.php';  ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f8f8f8;
        margin: 40px;
    }
    h2 {
        color: #333;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    th, td {
        padding: 12px 18px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background: #f0f0f0;
        color: #444;
    }
    h2 {
        background: #f0f0f0;
        color: #444;
    }
    tr:nth-child(even) {
        background: #f9f9f9;
    }
    a {
        color: #007bff;
        text-decoration: none;
        margin: 0 4px;
    }
    
    a:hover {
        text-decoration: underline;
    }
</style>

<table border="1">
<h2> User List</h2>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Actions</th>
</tr>
<?php
$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc())
{
    echo"
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['age']}</td>
            <td>
                <a href='../views/update.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>

    ";
}
?>
</table>
<p>Click <a href="../views/create.php">here</a>to create new users!</p>