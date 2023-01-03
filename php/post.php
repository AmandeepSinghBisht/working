<?php
    if (isset($_POST["name"]) || isset($_POST["age"])) {
    if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
        die("Invalid name. Name should be alphabet");
    }
    echo "hi " . $_POST['name'] . "<br>";
    echo "your age is " . $_POST['age'];
    exit();
}
?>
<html>

<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age"><br>
        <input type="submit">
</body>

</html>