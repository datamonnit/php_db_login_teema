<?php
session_start();

if (!isset($_POST['username']) ||
    !isset($_POST['password'])) {
        die("You did not come from login page!");
    }

if (empty($_POST['username']) ||
    empty($_POST['password'])) {
        die("You left fields empty");
    }

include_once "db_connect.php";

try {
    
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE 
        username = :username
        AND
        user_password = PASSWORD(:pwd);");
   
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':pwd', $_POST['password']);
    
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    if ($stmt->fetchColumn() > 0) {
        echo "Käyttäjä löytyi!";
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE
            username = :username
            AND
            user_password = PASSWORD(:pwd);");
            
        $stmt->bindParam(':username', $_POST['username']);
        $stmt->bindParam(':pwd', $_POST['password']);
            
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $rows = $stmt->fetchAll();
        
        if (count($rows) == 1) {
            $_SESSION['username'] = $rows[0]['username'];
            header('Location: index.php');
        } 

    } else {
        echo "Käyttäjää ei löytynyt!";
    }



    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }