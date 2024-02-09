<?php
include 'includes/conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $jobTitle = mysqli_real_escape_string($conn, $_POST['jobTitle']);
    $shortDescription = mysqli_real_escape_string($conn, $_POST['shortDescription']);
    $longDescription = mysqli_real_escape_string($conn, $_POST['longDescription']);
    $category = mysqli_real_escape_string($conn, $_POST['workType']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $startTime = mysqli_real_escape_string($conn, $_POST['startTime']);
    $userId = $_SESSION['userid']; 
    $successUjumbe;

    $sql = "INSERT INTO jobs (job_title, short_description, long_description, category, price, start_time, user_id)
            VALUES ('$jobTitle', '$shortDescription', '$longDescription', '$category', $price, '$startTime', $userId)";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        $successUjumbe = "New record created";
        header("location: user.php?uju=$successUjumbe");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();
}
?>