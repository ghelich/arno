<?php
session_start();

include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if(isset($_POST['newfile'])) {
            if(newfile($_POST['PropertyType'], $_POST['Comments'], $_POST['Year'], $_POST['No'], $_POST['Floor'], $_POST['Price'], $_POST['phoneNumber'])) {
          //    header("location: /userpanel/newfile2.html");
              phpAlert("saved successfully !");
          //    exit;
            }else{
                phpAlert(" not save !");
            }
           }
    if (isset($_POST['username']) and isset($_POST['password'])) {
        if (!empty($_POST['username']) and !empty($_POST['password'])) {
            if (isset($_POST['register'])) {
                if (register($_POST['username'], $_POST['password'])) {
                    header("location: userpanel");
                    exit;
                } else {
                    header("location: register.php?s=0");
                    exit;
                }
            } else if (isset($_POST['login'])) {
                if (login($_POST['username'], $_POST['password'])) {
                    header("location: userpanel");
                    exit;
                } else {
                    header("location: login.php?s=0");
                    exit;
                }
           } 
        }
    }
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

function newfile( $PropertyType, $Comments, $Year, $No, $Floor, $Price, $phoneNumber)
{
    global $pdo;
    try {
        $sql = "INSERT INTO file ( id ,userId , PropertyType, Comments, Year, No, Floor, Price, phoneNumber) VALUES ( :id ,:userId, :PropertyType, :Comments, :Year, :No, :Floor, :Price, :phoneNumber)";

        $stmt = $pdo->prepare($sql);
       // return $stmt->columnCount();
               // $stmt->execute([':PropertyType' => $PropertyType, ':Comments' => $Comments,':Year' => $Year,':No' => $No,':Floor' => $Floor,':Price' => $Price,':phoneNumber' => $phoneNumber]);
        $stmt->execute(['id' => 11 ,
            'userId' => 22,
            'PropertyType' => $PropertyType,
            'Comments' => $Comments,
            'Year' => $Year,
            'No' => $No,
            'Floor' => $Floor,
            'Price' => $Price,
            'phoneNumber' => $phoneNumber]);
        return $stmt->rowCount();
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        return false;
    }
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
function phpAlert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
