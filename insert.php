<?php

include'config.php';

if($_SERVER['REQUEST_METHOD']==='POST')
{
    $full_name=$_POST["full_name"];
    $name=$_POST["name"];
    $password=$_POST["password"];
    $e_mail=$_POST["e_mail"];

    $sql = "INSERT INTO login (full_name, name, password, e_mail) VALUES ('$full_name', '$name', '$password', '$e_mail')";

    if ($conn->query($sql) === TRUE) {
        echo "User added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


}
header("Location: main.html");
exit();

?>


