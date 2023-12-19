<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>


<?php if (isset($_SESSION["user_id"])):?>

    <p> Your are logged in.</p>

    <p><a href="logout.php">Log out</a></p>


<?php else: ?>

    <p><a href="login.html">Log in</a> or <a href="register.html">Register</a></p>

<?php endif; ?> 
</body>
</html>