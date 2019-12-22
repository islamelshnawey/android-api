<?php

/**
 *
 */

require_once "include/DB_Functions.php";

$db = new DB_Functions();

// json response array
$response = array("error" => FALSE);

if (isset($_GET['category_id'])) {

    // receiving the post params
    $categoryId = $_POST['category_id'];

            $response["error"] = FALSE;
            $response["uid"] = "";
            $response["user"]["name"] = "";
            $response["user"]["email"] = "";
            $response["user"]["created_at"] = "";
            $response["user"]["updated_at"] = "";
            echo json_encode($response);

}

?>