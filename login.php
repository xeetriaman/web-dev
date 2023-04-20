<?php
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "alex@gmail.com" && $password == "password123") {
        header("Location: home.php");
    } else {
        $message = "Your credintials do not match.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <form method="post" action="login.php">
        <label>Email:</label>
        <input type="text" name="email" />

        <label>Password:</label>
        <input type="text" name="password" />

        <button type="submit">Submit</button>
    </form>
    <p>
        <?php if (isset($message)) {
            echo $message;
        }
        ?>
</body>

</html>