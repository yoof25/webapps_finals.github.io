<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

$connection = mysqli_connect($host, $username, $password, $dbname);


if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}


$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM login_info WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $sucess = "YESSSS!!!!!!!TAMA YUNG EMAIL AT PASS PARE";
        echo $sucess;
    } else {
        $error = "MALI YUNG PASSWORD PARE HACKER KA, NOH?";
        echo $error;
    }
}

mysqli_close($connection);
?>
