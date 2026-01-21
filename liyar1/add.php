<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
            font-family: Arial;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Add Student</h2>

<form action="insert.php" method="post">
    Name:
    <input type="text" name="name" required>

    CGPA:
    <input type="text" name="cgpa" required>

    <button type="submit">Submit</button>
</form>

<div style="text-align:center;">
    <a href="index.php">⬅ Back</a>
</div>

</body>
</html>
