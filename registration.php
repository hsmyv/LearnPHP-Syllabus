<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");

    if (mysqli_num_rows($dublicate) > 0) {
        echo "<script> alert ('Username or Eamil Has Already Taken'); </script>";
    } else {
        $query = "INSERT INTO user Values ('', '$name', '$username','$email', '$password')";
        mysqli_query($conn, $query);
        echo
        "<script> alert ('Registered'); </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Qeydiyyat Forması</title>
</head>

<body>
    <h2>Qeydiyyat Forması</h2>
    <form action="registration.php" method="post">
        <label for="ad">Adınız:</label>
        <input type="text" id="name" name="name"><br>

        <label for="soyad">Soyadınız:</label>
        <input type="text" id="username" name="username"><br>

        <label for="email">E-poçt Ünvanınız:</label>
        <input type="email" id="email" name="email"><br>

        <label for="sifre">Şifrəniz:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Qeydiyyat">
    </form>
</body>

</html>