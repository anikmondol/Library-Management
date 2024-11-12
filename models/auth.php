<?php

// login

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
