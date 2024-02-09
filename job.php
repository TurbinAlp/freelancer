<?php
include_once 'includes/conn.php';
if(isset($_SESSION['username']))
{
 $username = $_SESSION['username'];
}
    $jobIDfromGet = isset($_GET['jobid']) ? $_GET['jobid'] : 0;
    $sql = "SELECT * FROM jobs WHERE job_id = $jobIDfromGet";
    
    $result = $conn->query($sql);

    $row = ($result->num_rows > 0) ? $result->fetch_assoc(): null; 
    $userIDFromJobTable = isset($row['user_id']) ? $row['user_id'] : 0;
    $sqlForUser = "SELECT * FROM users WHERE userid = $userIDFromJobTable "; 

    $resultUser = $conn->query($sqlForUser);
    $rowForUser = ($resultUser->num_rows > 0) ? $resultUser->fetch_assoc(): 0; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($row)) echo $row['job_title']; else echo 'No Job Available'; ?></title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #117864;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }
        .main-color {
            background-color: #116874;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">Logo</a>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
        <?PHP
            if(isset($username)){
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="inbox.php">Message</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="https://via.placeholder.com/30" alt="Profile" class="rounded-circle">
                    </a>
                </li>
                ';
            }
            else
            {
                echo '
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
                ';
            }
            ?>
            </ul>
    </div>
</nav>
    <div class="container mt-5">
    <?php 
    if(isset($row)): 
        echo '
            <div class="row">
                <div class="col-md-12">
                    <div class="main-color">
                        <div class="row">
                            <div class="col-md-8">
                                <h2>'.$row['job_title'].'</h2>
                            </div>
                            <div class="col-md-4 text-right">
                                <!-- First row, second column: Bids and Start Time -->
                                <p>Bids: 5</p>
                                <p>'.$row['start_time'].'</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-color">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Job Description</h4>
                                <p>'.$row['long_description'].'</p>
                            </div>
                            <div class="col-md-4">
                                <!-- Second row, second column: Offer Details -->
                                <h4>Offer Details</h4>
                                <p>Name: '.$rowForUser['fullname'].' @'.$rowForUser['username'].'</p>
                                <p>Email: '.$rowForUser['email'].'</p>
                                <p>Phone: '.$rowForUser['phonenumber'].'</p>
                                <a href="inbox.php?userNameFromGet='.$rowForUser['username'].'"><button type="button" class="btn btn-success">Contact Me</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        else:
            echo '
            <div class="main-color">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">No Job Available</h2>
                    </div>
                </div>
            </div>
            ';
        endif;
        //  else echo 'No Job Available'; 
        ?>
    </div>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
