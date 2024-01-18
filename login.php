<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM login WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful!";
        header("Location: website/Dashboard.html");
    } else {
        echo "Invalid username or password.";
    }
}


$conn->close();
?>