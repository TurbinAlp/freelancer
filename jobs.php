<?php
    include 'includes/conn.php';
    $username;

    if(isset($_SESSION['username'])) $username = $_SESSION['username']; 
    $categoryIDFromGetMethod = isset($_GET['categoryid']) ? $_GET['categoryid'] : null;
    
    $sql = "SELECT * FROM jobs WHERE category = $categoryIDFromGetMethod";

    $result = $conn->query($sql);
        
       // $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
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
    </style>
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">Logo</a>
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
                <li class="nav-item fs-5 pe-5">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                ';
            }
            ?>
            </ul>
        </div>
    </nav>
    </header>

    <!-- Content -->
    <div class="container mt-5">
        <h2 class="mb-4">Project Table</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Project</th>
                    <th>Bids</th>
                    <th>Start</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0):
                        while($row = $result->fetch_assoc()):                        
                ?>
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-3">
                                <img src="your_image_url" alt="Project Image" class="img-fluid">
                            </div>
                            <div class="col-9">
                                <a href="job.php?jobid=<?php echo $row["job_id"]; ?>"><h5><?php echo $row["job_title"]; ?></h5></a>
                                <p><?php echo $row["short_description"]; ?></p>
                            </div>
                        </div>
                    </td>
                    <td>Sample Bids</td>
                    <td><?php echo $row["start_time"]; ?></td>
                    <td>Tshs <?php echo $row["price"]; ?></td>
                </tr>
                <?php endwhile; endif;?>    
            </tbody>
        </table>
    </div>



    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
