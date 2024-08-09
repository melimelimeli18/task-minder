<?php
require_once __DIR__ . './../config/database.php';

// Allow from any origin
header('Access-Control-Allow-Origin: *');// Allow methods POST and GET
header('Access-Control-Allow-Methods: POST, GET');// Allow headers Content-Type (required for POST requests)
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json'); // Ensure the response is JSON

$response = ['success' => false, 'message' => 'Unknown error'];

if(isset($_POST["submit"])){
    header('Location: http://localhost:5173/MyCategory');
    $category_title = $_POST['category-title'];
  
    $query = mysqli_query($conn,"INSERT INTO categories (category_title) VALUES('$category_title')");

    // If category succesfully been add.
    if($query){
        $response['success'] = true;
        $response['message'] = 'Data inserted successfully';
    }else{
        echo
        $response['message'] = 'Error inserting data: ' . mysqli_error($conn);
    }
}else{
    echo
    $response['message'] = 'Required POST data is missing';
}

echo json_encode($response);
$conn->close();
