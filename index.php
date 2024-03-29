<?php
    include_once 'includes/conn.php';
    
    $sqlCat5 = "SELECT * FROM categories WHERE numberOfJobs >= 5 LIMIT 4";

    $resultCat5 = $conn->query($sqlCat5);
                         

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wlcome to FreeLancer: Your Mind Get You Worth IT!!</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff;
        }

        /* Custom styles */
        .navbar {
            background-color: #117864;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
        }

        .section {
            margin: 20px 0;
        }

        .card {
            margin-bottom: 20px;
        }

        .footer {
            background-color: #117864;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .kwanini {
            background-color: #f1fdf7 !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark px-5">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Sign In</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Popular Services Section -->
<div class="fluid-container section px-5">
    <h2>POPULAR SERVICES</h2>
    <div class="row">
        <?php
            if ($resultCat5->num_rows > 0):
                while($row = $resultCat5->fetch_assoc()):   
        ?>
        <div class="col-md-6 col-lg-3">
            <a href="jobs.php?categoryid=<?php echo $row['categoryid']; ?>">
                <div class="card">
                    <div class="card-body">
                        <img src="<?php echo $row['imageRUL']; ?>" class="img-fluid card-img-top" alt="<?php echo $row['categoryname']; ?>">
                        <h5 class="card-title"><?php echo $row['categoryname']; ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; endif;?>
    </div>
</div>

<!-- "The best part? EVERYTHING" Section -->
<div class="fluid-container section kwanini px-5 py-5">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-6">
            <h2>The best part? EVERYTHING</h2>
            <!-- Row 1 -->
            <div class="row">
                <div class="col">
                    <h5>Stick to your budget</h5>
                    <p>Find the right service for every price point. No hourly rates, just project-based pricing.</p>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="row">
                <div class="col">
                    <h5>Get quality work done quickly</h5>
                    <p>Hand your project over to a talented freelancer in minutes, get long-lasting results.</p>
                </div>
            </div>
            <!-- Row 3 -->
            <div class="row">
                <div class="col">
                    <h5>Pay when you're happy</h5>
                    <p>Upfront quotes mean no surprises. Payments only get released when you approve.</p>
                </div>
            </div>
            <!-- Row 4 -->
            <div class="row">
                <div class="col">
                    <h5>Count on 24/7 support</h5>
                    <p>Our round-the-clock support team is available to help anytime, anywhere.</p>
                </div>
            </div>
        </div>
        <!-- Column 2 -->
        <div class="col-md-6">
            <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="Image">
        </div>
    </div>
</div>

<!-- "You need it, we've got it" Section -->
<div class="fluid-container section px-5">
    <h2>You need it, we've got it</h2>
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="imgs/Graphics & Design.png" class="img-fluid" alt="AI Artist Image">
                    <h5 class="card-title">Graphics & Design</h5>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="imgs/Digital Marketing.png" class="img-fluid" alt="AI Artist Image">
                    <h5 class="card-title">Digital Marketing</h5>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="imgs/Writing & Translation.jpg" class="img-fluid" alt="AI Artist Image">
                    <h5 class="card-title">Writing & Translation</h5>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="imgs/Video & Animation.png" class="img-fluid" alt="AI Artist Image">
                    <h5 class="card-title">Video & Animation</h5>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="imgs/Music & Audio.jpg" class="img-fluid" alt="AI Artist Image">
                    <h5 class="card-title">Music & Audio</h5>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="imgs/business.jpeg" class="img-fluid" alt="AI Artist Image">
                    <h5 class="card-title">Business</h5>
                    <!-- Add more details if needed -->
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- Footer -->
<footer class="footer">
    <p>&copy; 2024 Your Company</p>
</footer>

<!-- Bootstrap JS and Popper.js -->
<script src="plugins/jquery-3.7.1.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script>
    var b;
    function v (b){
        this.b = b;
        console.log(b);
    }
</script>
</html>