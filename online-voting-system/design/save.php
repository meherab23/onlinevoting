<?php

$name = $_POST["name"];

$email = $_POST["email"];

$mobile = $_POST["mobile"];

$question = $_POST["question"];

$conn = mysqli_connect("localhost", "root", "", "online-voting-system") or die("connection failed");

$sql = "INSERT INTO contactus (Name, Email, Mobile, Question) VALUES ('$name','$email','$mobile','$question' )";

$result = mysqli_query($conn, $sql) or die("Query Failed!");

header("location: http://localhost/online-voting-system/design/contactus.php");

mysqli_close($conn);

?>