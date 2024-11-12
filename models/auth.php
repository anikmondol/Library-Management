<?php

// function to login

function login($conn, $param)
{

    extract($param);

    ## validation start

    if (empty($email)) {
        $result = array("error" => "Email is required");
        return $result;
    } else if (empty($password)) {
        $result = array("error" => "Password is required");
        return $result;
    }

    ## validation end


    $sql = "select * from users where email = '$email'";
    $res = $conn->query($sql);

    if ($res->num_rows > 0) {
        $user = mysqli_fetch_assoc($res);

        $hash = $user["password"];

        if (password_verify($password, $hash)) {
            $result = array("status" => true, "user" => $user);
        } else {
            $result = array("status" => false);
        }
    } else {
        $result = array("status" => false);
    }

    return $result;
}



// function to forgot password

function forgotPassword($conn, $param)
{

    extract($param);

    ## validation start
    if (empty($email)) {
        $result = array("error" => "Email is required");
        return $result;
    }
    ## validation end


    $sql = "select * from users where email = '$email'";
    $res = $conn->query($sql);


    //    send reset password email
    if ($res->num_rows > 0) {
        $user = mysqli_fetch_assoc($res);
        $user_id = $user["id"];
        $datetime = date("Y-m-d H:i:s");


        // generate otp
        $otp = rand(1111, 9999);
        $message = "Please use this OTP <b>$otp</b> to reset your password";


        // send reset password email

        $to = $email;
        $subject = "Forget password Request";
        $headers = "From: webmaster@lms.com" . "\r\n";


        $res = mail($to, $subject, $message, $headers);

        if ($res) {
            $sql = "INSERT INTO `forgot_password`(`user_id`, `reset_code`, `created_at`) VALUES ('$user_id',' $otp','$datetime')";
            $conn->query($sql);
            $result = array("status" => true);
        } else {
            $result = array("status" => false);
        }
        

       
    } else {
        $result = array("status" => false);
    }

    return $result;
}
