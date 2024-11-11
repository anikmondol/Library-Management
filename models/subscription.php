<?php


// function to create loan

function create($conn, $param)
{

    extract($param);

    ## Validation start
    if (empty($title)) {
        $result = array("error" => "Title is required");
        return $result;
    } else if (empty($duration)) {
        $result = array("error" => "Duration is required");
        return $result;
    } else if (empty($amount)) {
        $result = array("error" => "Amount is required");
        return $result;
    }
    ## Validation end

    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `subscription_plans`(`title`, `amount`, `duration`, `created_at`) VALUES ('$title','$amount','$duration','$datetime')";

    $result["success"] = $conn->query($sql);
    return $result;
}


// function to update student

function update($conn, $param)
{

    extract($param);

    ## Validation start
    if (empty($title)) {
        $result = array("error" => "Title is required");
        return $result;
    } else if (empty($duration)) {
        $result = array("error" => "Duration is required");
        return $result;
    } else if (empty($amount)) {
        $result = array("error" => "Amount is required");
        return $result;
    }
    ## Validation end

    $datetime = date("Y-m-d H:i:s");



    $sql = "UPDATE `subscription_plans` SET `title`='$title',`amount`='$amount',`duration`='$duration',`updated_at`='$datetime' WHERE id = $id";


    $result["success"] = $conn->query($sql);
    return $result;
}

// function to delete the student
function delete($conn, $id)
{
    $sql = "DELETE FROM `subscription_plans` WHERE id = $id";
    $result = $conn->query($sql);
    return $result;
}

// function to update the student status
function updateStatus($conn, $id, $status)
{
    $sql = "UPDATE `subscription_plans` SET `status`='$status' WHERE id = $id";
    $result = $conn->query($sql);
    return $result;
}


// function to get the loans
function getPlans($conn)
{
    $sql = "SELECT * FROM `subscription_plans`";
    $result = $conn->query($sql);
    return $result;
}

// function to get the plan details
function getPlanById($conn, $id)
{
    $sql = "SELECT * FROM `subscription_plans` WHERE id = $id";
    $result = $conn->query($sql);
    return $result;
}

// function to get students

function getStudents($conn)
{
    $sql = "select id, name from students";
    $result = $conn->query($sql);
    return $result;
}

// function to get books

function getBooks($conn)
{
    $sql = "select id, title from books";
    $result = $conn->query($sql);
    return $result;
}



// function to check email no
function isEmailUnique($conn, $email, $id = NULL)
{
    $sql = "select id from students where email = '$email'";
    if ($id) {
        $sql .= " and id != $id";
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        return true;
    else return false;
}


// function to check phone no
function isPhoneUnique($conn, $phone_no, $id = NULL)
{
    $sql = "select id from students where phone_no = '$phone_no'";
    if ($id) {
        $sql .= " and id != $id";
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        return true;
    else return false;
}


// function to check valid phone no
function isPhoneValid($phone_no)
{
    if (is_numeric($phone_no) && strlen($phone_no) == 11) {
        return false;
    } else {
        return true;
    }
}
