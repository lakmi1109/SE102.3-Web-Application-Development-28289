<?php
$host = 'your_database_host';
$username = 'your_database_username';
$password = 'your_database_password';
$database = 'university';
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $student_id = $_POST["student_id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO students (id, name, email, password) VALUES ('$student_id', '$name', '$email', '$password')";

    if (mysqli_query($connection, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
