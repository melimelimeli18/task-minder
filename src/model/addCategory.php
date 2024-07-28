<?php

require_once __DIR__ . './../config/database.php';

// Allow from any origin
header('Access-Control-Allow-Origin: *');// Allow methods POST and GET
header('Access-Control-Allow-Methods: POST, GET');// Allow headers Content-Type (required for POST requests)
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json'); // Ensure the response is JSON

$response = ['success' => false, 'message' => 'Unknown error'];


if(isset($_POST["submit"])){
    $category_title = $_POST['category-title'];
    $color = $_POST['color'];
  
    $query = mysqli_query($conn,"INSERT INTO categories (category_title,color) VALUES('$category_title', '$color')");
    // $query = "INSERT INTO categories VALUES('$category_title')";
    // mysqli_query($conn,$query);
    if($query){
        // if working
        // echo
        // "<script> alert('Data Inserted Successfully'); </script>";
        $response['success'] = true;
        $response['message'] = 'Data inserted successfully';
    }else{
        echo
        // "<script> alert('ayo dicoba lagi'); </script>";
        $response['message'] = 'Error inserting data: ' . mysqli_error($conn);

    }
}else{
    echo
    // "<script> alert('ngga bisa ke submit'); </script>";
    $response['message'] = 'Required POST data is missing';
}
$conn->close();
