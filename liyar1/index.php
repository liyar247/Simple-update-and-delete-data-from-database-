<?php
include 'db.php';

$sql = "SELECT * FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 50px auto;
            font-family: Arial;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>CGPA</th>
        <th>Action</th>
    </tr>

    <?php foreach ($students as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= number_format($row['cgpa'], 2); ?></td>
        <td>
            <a href="view.php?id=<?= $row['id']; ?>">View</a> |
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id']; ?>"
               onclick="return confirm('Are you sure?');">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br>
<div style="text-align:center;">
    <a href="add.php">
        <button style="padding:10px 20px;">➕ Add New Student</button>
    </a>
</div>


</body>
</html>
