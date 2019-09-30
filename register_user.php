<?php

if (!isset($_POST['username']) ||
    !isset($_POST['email']) ||
    !isset($_POST['password1']) ||
    !isset($_POST['password2'])) {
        die("You did not come from register form!");
    }

// TODO: Check if input fields empty

// TODO: Check if passwords are different

include_once "db_connect.php";

try {
    
    // $sql = 
        // "INSERT INTO users (username, email, user_password)
        // VALUES ('{$_POST['username']}', '{$_POST['email']}', PASSWORD('{$_POST['password1']}'));";
    
    $stmt = $conn->prepare("INSERT INTO users (username, email, user_password) 
                            VALUES (:username, :email, PASSWORD(:pwd));");
   
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':pwd', $_POST['password1']);
    
    $stmt->execute();
    echo "New record created successfully";

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;