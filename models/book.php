<?php


// function to store book

function storeBook($conn, $param)
{

    extract($param);

    ## validation start

    if (empty($title)) {
        $result = array("error" => "Title is required");
        return $result;
    } else if (empty($isbn)) {
        $result = array("error" => "ISBN is required");
        return $result;
    } else if (isIsbnUnique($conn, $isbn)) {
        $result = array("error" => "ISBN is already registered");
        return $result;
    } else if (empty($author)) {
        $result = array("error" => "Author is required");
        return $result;
    } else if (empty($publication_year)) {
        $result = array("error" => "Publication Year is required");
        return $result;
    } else if (empty($category_id)) {
        $result = array("error" => "Category is required");
        return $result;
    }

    ## validation end

    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `books`(`title`, `author`, `publication_year`, `isbn`, `category_id`, `created_at`) VALUES ('$title','$author','$publication_year','$isbn', $category_id ,'$datetime')";

    $result["success"] = $conn->query($sql);
    return $result;
}



// function to get categories

function getCategories($conn)
{
    $sql = "select id, name from categories";
    $result = $conn->query($sql);
    return $result;
}


// Function to check isbn no
function isIsbnUnique($conn, $isbn, $id = NULL)
{
    $sql = "select id from books where isbn = '$isbn'";
    if ($id) {
        $sql .= " and id != $id";
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        return true;
    else return false;
}
