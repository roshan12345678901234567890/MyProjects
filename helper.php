<?php

function validate_input_text($textValue){
    if (!empty($textValue)){
        $trim_text = trim($textValue);
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitize_str;
    }
    return '';
}

function validate_input_email($emailValue){
    if (!empty($emailValue)){
        $trim_text = trim($emailValue);
        $sanitize_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    return '';
}

function upload_profile($path, $file){
    $targetDir = $path;
    $default = "beard.png";

    $filename = basename($file['name']);
    $targetFilePath = $targetDir . $filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    If(!empty($filename)){
        $allowType = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if(in_array($fileType, $allowType)){
            if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                return $targetFilePath;
            }
        }
    }

    return $path . $default;
}


function get_user_info($con, $userID){
    $stmt = $con->prepare("SELECT userName, mobile, email, profileImage FROM user WHERE id=?") or die($con->error);
    $stmt->bind_param('i', $userID);

    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);
    return empty($row) ? false : $row;
    
}














