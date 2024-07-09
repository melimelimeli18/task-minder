<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// header('Content-Type: application/json');
require_once __DIR__ . './../config/database.php';

// include('./../config/database.php');
// require './../config/database.php';

// http://localhost/task-minder\src\model\addCategory.php

// if (isset($_POST['submit'])) {
//     // $category_title = $_POST['category-title'];
//     // $color = $_POST['color'];

//     $category_title = "makan";
//     $color = "pink";

//     // Prepare an SQL statement to insert the new category
//     // $sql = "INSERT INTO categories (category_title, color) VALUES (?, ?)";
//     $sql = "INSERT INTO categories (category_title, color) VALUES ('$category_title','$color')";
//     $stmt = $conn->prepare($sql);

//     // Bind parameters to the SQL statement
//     $stmt->bind_param("ss", $categoryTitle, $color);

//     // Execute the SQL statement
//     if ($stmt->execute()) {
//         echo "New category has been added successfully!";
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     // Close the statement and connection
//     $stmt->close();
//     $conn->close();
// }

// ------------------------------------------------------------------

// BISAA

if(isset($_POST["submit"])){
    $category_title = $_POST['category-title'];
    $color = $_POST['color'];
  
    $query = mysqli_query($conn,"INSERT INTO categories (category_title,color) VALUES('$category_title', '$color')");
    // $query = "INSERT INTO categories VALUES('$category_title')";
    // mysqli_query($conn,$query);
    if($query){
        // if working
        echo
        "<script> alert('Data Inserted Successfully'); </script>";
    }else{
        echo
        "<script> alert('ayo dicoba lagi'); </script>";
    }
}else{
    echo
    "<script> alert('ngga bisa ke submit'); </script>";
}
$conn->close();




//------------------------------------------------------------


// Get the raw POST data
// $input = file_get_contents('php://input');
// $data = json_decode($input, true);

// if (isset($data['categoryTitle']) && isset($data['color'])) {
//     // Retrieve and sanitize POST data
//     $categoryTitle = htmlspecialchars($data['categoryTitle']);
//     $color = htmlspecialchars($data['color']);

//     // Insert into database
//     // $sql = "INSERT INTO categories (category_title, color) VALUES ('$categoryTitle', '$color')";

//     $stmt = $conn->prepare("INSERT INTO categories (category_title, color) VALUES (?, ?)");
//     $stmt->bind_param("ss", $categoryTitle, $color);
//     $stmt->execute();
    

//     if ($conn->query($sql) === TRUE) {
//         echo json_encode(["success" => true, "message" => "New category added successfully"]);
//     } else {
//         echo json_encode(["success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error]);
//     }
// } else {
//     echo json_encode(["success" => false, "message" => "Error: Required POST data is missing"]);
// }

// $conn->close();

//--------------------------------------------------------------------

// Test data
// $user_id = 1;
// $categoryTitle = 'Test Category';
// $color = 'blue';

// $sql = "INSERT INTO categories (category_title, color) VALUES ('$categoryTitle', '$color')";

// if ($conn->query($sql) === TRUE) {
//     echo "New category added successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

//--------------------------------------------------------------------
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Process form data
//     if (isset($_POST['submit'])) {
//         // Proceed with handling form data
//         $category_title = $_POST['category-title'];
//         $color = $_POST['color'];

//         // Perform database operations
//         // Insert into database, etc.

//         // Example response
//         $response['success'] = true;
//         $response['message'] = "Data Inserted Successfully";
//         echo json_encode($response);
//     } else {
//         $response['success'] = false;
//         $response['message'] = "Error: Form submission not detected";
//         echo json_encode($response);
//     }
// } else {
//     $response['success'] = false;
//     $response['message'] = "Error: Invalid request method";
//     echo json_encode($response);
// }

// ----------------------------------------------------------------

// if (isset($_POST["submit"])) {
//     // Retrieve and sanitize data from form submission
//     $categoryTitle = htmlspecialchars($_POST['category-title']);
//     $color = htmlspecialchars($_POST['color']);
//     $user_id = 1; // Replace with actual user_id retrieval logic, e.g., from session or other source

//     // Check if user_id exists
//     $user_check_query = "SELECT id FROM users WHERE id = ?";
//     $stmt = $conn->prepare($user_check_query);
//     $stmt->bind_param("i", $user_id);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $user_exists = $result->num_rows > 0;
//     $stmt->close();

//     if ($user_exists) {
//         // Prepare the SQL statement with placeholders
//         $stmt = $conn->prepare("INSERT INTO categories (category_title, color, user_id) VALUES (?, ?, ?)");
//         // Bind the actual values to the placeholders
//         $stmt->bind_param("ssi", $categoryTitle, $color, $user_id);

//         // Execute the statement
//         if ($stmt->execute()) {
//             echo "New category added successfully";
//         } else {
//             echo "Error: " . $stmt->error;
//         }

//         // Close the statement
//         $stmt->close();
//     } else {
//         echo "<script>alert('Invalid user_id');</script>";
//     }
// } else {
//     echo "<script>alert('Form submission not detected');</script>";
// }


// ?>