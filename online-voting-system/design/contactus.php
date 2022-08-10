<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){

$name = $_POST['name'];
$emails = $_POST['email'];
$subjects = $_POST['subject'];
$message = $_POST['message'];

$a="\n";
$to_email = "projectonlinevotingsystem@gmail.com";
$subject =$subjects;
$body = $name.$a.$subject.$a.$emails.$a.$message;
$headers = "From: projectonlinevotingsystem@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
   echo "<h2 style='color: white'>Thank you for contacting us. I will get back to you as soon as possible!</h2>";
} else {
    echo "Email sending failed...";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <p>Feel free to contact us and we will get back to you ass sson as we can.</p>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <div>
            <input type="text" name="name" id="name"></input>
</div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"></input>
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject"></input>
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <div>
            <button type="submit" > Send </button>
</div>
        </form>
    </div>
</body>
</html>

