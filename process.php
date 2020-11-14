<?php
session_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['newfile'])) {
        if(newfile($_POST['PropertyType'], $_POST['Comments'], $_POST['Year'], $_POST['No'], $_POST['Floor'], $_POST['Price'], $_POST['phoneNumber'])) {

                // Check if file was uploaded without errors
                if(isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0){
                    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                    $filename = $_FILES["fileToUpload"]["name"];
                    $filetype = $_FILES["fileToUpload"]["type"];
                    $filesize = $_FILES["fileToUpload"]["size"];

                    // Verify file extension
                    $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

                    // Verify file size - 5MB maximum
                    $maxsize = 5 * 1024 * 1024;
                    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

                    // Verify MYME type of the file
                    if(in_array($filetype, $allowed)){
                        // Check whether file exists before uploading it
                        if(file_exists("upload/" . $filename)){
                            echo $filename . " is already exists.";
                        } else{
                            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "upload/" . $filename);
                            echo "Your file was uploaded successfully.";
                        }
                    } else{
                        echo "Error: There was a problem uploading your file. Please try again.";
                    }
                } else{
                    echo "Error: " . $_FILES["fileToUpload"]["error"];
                }
            }
            //header("location: /userpanel/newfile2.html");
            phpAlert("saved successfully !");
            //exit;
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
        $sql = "INSERT INTO file (  PropertyType, Comments, Year, No, Floor, Price, phoneNumber) VALUES (  :PropertyType, :Comments, :Year, :No, :Floor, :Price, :phoneNumber)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['PropertyType' => $PropertyType,
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
