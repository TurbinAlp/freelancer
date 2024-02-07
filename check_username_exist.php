<?php

    include 'includes/conn.php';

    // Check if username exists
    $username = $_POST['username'];
    $sql = "SELECT * FROM users WHERE username = '" . $conn->real_escape_string($username) . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'taken';
    } else {
        echo 'available';
    }
    $conn->close();
?>