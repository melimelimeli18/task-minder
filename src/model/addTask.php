<?php
require_once __DIR__ . '../config/database.php';

if(isset($_POST['submit']))
{    
     $taskTitle = $_POST['task-title'];
     $taskDescription = $_POST['task-description'];
     $dueDate = $_POST['due-date'];
    //  urgent level
     $sql = "INSERT INTO tasks (name,email,mobile)
     VALUES ('$taskTitle','$taskDescription','$dueDate')";
     if (mysqli_query($conn, $sql)) {
        echo "New task has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}