<?php

if ($_SERVER["HTTP_HOST"] == "localhost") {
    define("BASE_URL", "http://localhost/Library-Management/");
    define("DIR_URL", $_SERVER["DOCUMENT_ROOT"] . "/Library-Management/");
} else {
    define("BASE_URL", "https://Library-Management.com");
    define("DIR_URL", $_SERVER["DOCUMENT_ROOT"]);
}



?>