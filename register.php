<?php

$is_success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__. "/database.php";

    $sql = "INSERT INTO user (name, email, password) VALUES (?,?,?)";

    $stmt = $mysqli->stmt_init();

    if ( ! $stmt->prepare($sql)){
        die("SQL error: ". $mysqli->error);
    }

    $stmt->bind_param("sss",
                        $_POST["name"],
                        $_POST["email"],
                        $_POST["password"]);

    if ($stmt->execute()){
        $is_success = true;
        echo 'Register Succesfully
        <a href="loginpage.html">Login</a>';
           
    }
    else{
        die($mssqli->error. " " . $mysqli->errno);
    }
}

?>