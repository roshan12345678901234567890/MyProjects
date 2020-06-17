<?php
include 'mysqli_connect.php';

$error = array();
$message = '';

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

if(empty($error)){

    $stmt = $con->prepare("SELECT id, userName, mobile, email, password, profileImage FROM user WHERE email=?") or die($con->error);
    $stmt->bind_param('s', $email);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        if(password_verify($password, $row['password'])){

            $_SESSION['sID'] = session_id();
            $_SESSION['userID'] = $row['id'];

            header("location: index.php");
            exit();
        }
    }else{
        $message = "You are not a member please register!";
    }

}else{
    $message = "Please Fill out email and password to login!";
}
