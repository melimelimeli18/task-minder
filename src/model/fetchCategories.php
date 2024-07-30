<?php
require_once __DIR__ . '/../config/database.php';

header('Access-Control-Allow-Origin: *');// Allow methods POST and GET
header('Access-Control-Allow-Methods: POST, GET');// Allow headers Content-Type (required for POST requests)
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/JSON'); // Ensure the response is JSON

//API fetch data from database
$response = array();
if($conn){
    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);

    if($result){
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['category_title'] = $row ['category_title'];
            $response[$i]['color'] = $row ['color'];
            $response[$i]['group_amount'] = $row ['group_amount'];
            $response[$i]['task_amount'] = $row ['task_amount'];
            $response[$i]['created_at'] = $row ['created_at'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
    else{
        echo "Database Connection failed";
    }
}

$conn->close();
