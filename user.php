<?php
    include 'includes/conn.php';

    $username = $_SESSION['username'];

    if(isset($username)){
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome User</title>
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

        .profile-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .profile-details {
            display: flex;
            align-items: center;
        }

        .profile-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .profile-info {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            display: flex;
            margin: 20px;
        }

        .user-details {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .create-job {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .details-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .details-label {
            font-weight: bold;
        }

        .details-value {
            flex: 1;
            margin-left: 8px;
            color: #6c757d;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Logo</a>
    <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
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
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <div class="profile-container">
        <div class="profile-details">
            <img src="https://via.placeholder.com/40" alt="Profile" class="profile-image">
            <div class="profile-info">
                <div class="font-weight-bold"><?php echo $row['fullname']; ?></div>
                <div>@<?php echo $row['username']; ?></div>
            </div>
        </div>
        <div>
            <a href="logout.php"><button class="btn btn-primary">Logout</button></a>
        </div>
    </div>

    <div class="main-content mt-4">
        <div class="user-details">
            <h4>User Details</h4>
            <img src="https://via.placeholder.com/100" alt="User Icon" class="img-fluid mb-3 rounded-circle">
            
            <div class="details-row">
                <div class="details-label">Location:</div>
                <div class="details-value"><?php echo $row['location']; ?></div>
            </div>

            <div class="details-row">
                <div class="details-label">Expertise:</div>
                <div class="details-value text-align-left">Graphic Design</div>
            </div>

            <div class="details-row">
                <div class="details-label">Email:</div>
                <div class="details-value"><?php echo $row['email']; ?></div>
            </div>

            <div class="details-row">
                <div class="details-label">Description:</div>
                <div class="details-value">A passionate graphic designer with a focus on creating stunning visuals.</div>
            </div>

            <div class="details-row">
                <div class="details-label">Orders:</div>
                <div class="details-value">10</div>
            </div>
        </div>

        <div class="create-job">
            <img src="https://via.placeholder.com/50" alt="Create Job Icon" class="img-fluid mb-3">
            <p class="mb-3">Ready to earn on your own terms?</p>
            <button class="btn btn-success">Create Job</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min
</body>
</html>
<?php } else header("location: index.html"); ?>