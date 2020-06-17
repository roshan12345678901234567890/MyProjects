<?php

require ('helper.php');

$error = array();
$message = '';

$userName = validate_input_text($_POST['userName']);
if (empty($userName)){
    $error[] = "You forgot to enter your first Name";
}

$moblie = validate_input_text($_POST['moblie']);
if (empty($moblie)){
    $error[] = "You forgot to enter your Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);
if (empty($confirm_pwd)){
    $error[] = "You forgot to enter your Confirm Password";
}

$files = $_FILES['profileUpload'];
$profileImage = upload_profile('./assets/profile/', $files);

if(empty($error) && $password == $confirm_pwd){

    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('mysqli_connect.php');

    $sql = "select * from user where email='$email'";
    $result =  mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0){
        $message= "Email id is already registered";
    }
    else {

    $query = "INSERT INTO user ( userName, mobile, email, profileImage, password, registerDate )";
    $query .= "VALUES( ?, ?, ?, ?, ?, NOW())";

    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q, $query);

    mysqli_stmt_bind_param($q, 'sssss', $userName, $moblie, $email, $profileImage , $hashed_pass);

    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

        session_start();

        $_SESSION['userID'] = mysqli_insert_id($con);
        $_SESSION['sID'] = session_id();

        header('location: index.php');
        exit();
    }
    else{
        print "Error while registration...!".$con->error;
    }
    }
}else{
    echo 'not validate';
}


















