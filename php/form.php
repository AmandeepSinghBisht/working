<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form linked with php admin</title>
</head>
<body>
    <h1>Blood Donation camp</h1>
    <h2>Registeration form</h2>
    <form action="connection.php" method="POST">
        Username: <input type="text" name="name" id="name" required><br><br>
        Email: <input type="email" name="email" id="email" required><br><br>
        Phone: <input type="text" name="phone" id="phone" required><br><br>
        Blood-group: <input type="text" name="bgroup" id="bgroup" required><br><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>