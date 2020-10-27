<?php
session_start();

include 'config.php';
echo "this page \n";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "yes \n";
    if (isset($_POST['username']) and isset($_POST['password'])) {
    echo "1 \n";
        if (!empty($_POST['username']) and !empty($_POST['password'])) {
        echo "2 \n";
            //if (isset($_POST['register'])) {
                echo "yes register \n";
                if (register($_POST['username'], $_POST['password'])) {
                    echo "register complet \n";
                    header("location: register.php?s=1");
                    exit;
                } else {
                    echo "register not complet \n";
                    header("location: register.php?s=0");
                    exit;
                }
           // } elseif (isset($_POST['login'])) {
           //     if (login($_POST['username'], $_POST['password'])) {
           //         header("location: login.php?s=1");
           //         exit;
           //     } else {
           //         header("location: login.php?s=0");
           //         exit;
           //     }
           //}
        }
    }
}else{
   echo "get method";
}

function isUserExists($username)
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username]);
    return $stmt->rowCount();
}

function register($username, $password)
{
    global $pdo;
    if (isUserExists($username)) {
        return false;
    }
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ':username' => $username, ':password' => $password]);
    return $stmt->rowCount();
}

function login($username, $password)
{
    global $pdo;
    if (!isUserExists($username)) {
        return false;
    }
    $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username, ':password' => $password]);
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    $_SESSION['login'] = $result->id;
    return true;
}