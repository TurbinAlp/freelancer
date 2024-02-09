
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seller Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

        .container {
            margin-top: 30px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .seller-info {
            margin-top: 20px;
        }

        .job-details {
            margin-top: 30px;
        }

        .billing-details {
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Your Logo</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Message</a>
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

<div class="container">
    <div class="row">
        <!-- First Column -->
        <div class="col-md-6">
            <!-- Title -->
            <div class="row">
                <div class="col">
                    <h2>Graphic Design Services</h2>
                </div>
            </div>
            <!-- Rating -->
            <div class="row">
                <div class="col">
                    <p>Rating: 4.8</p>
                </div>
            </div>
            <!-- Seller Information -->
            <div class="row seller-info">
                <div class="col-3">
                    <img src="https://via.placeholder.com/100" alt="Profile" class="profile-image">
                </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col">
                            <h4>John Doe</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Location: City, Country</p>
                            <p>Completed Orders: 100</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Short Job Description -->
            <div class="row job-details">
                <div class="col">
                    <p>Short description of the job goes here...</p>
                </div>
            </div>
            <!-- Complete Job Description -->
            <div class="row job-details">
                <div class="col">
                    <p>Complete description of the job goes here...</p>
                </div>
            </div>
            <!-- Expertise -->
            <div class="row">
                <div class="col">
                    <p>Expert in: Graphic Design, Logo Design, Branding</p>
                </div>
            </div>
        </div>

        <!-- Second Column -->
        <div class="col-md-6">
            <!-- Billing Details -->
            <div class="row billing-details">
                <div class="col">
                    <h4>BASIC</h4>
                </div>
            </div>
            <div class="row billing-details">
                <div class="col">
                    <p>Price: $50</p>
                </div>
            </div>
            <div class="row billing-details">
                <div class="col">
                    <p>Time to Accomplish: 2 days</p>
                </div>
            </div>
            <!-- Proceed to Cart Button -->
            <div class="row billing-details">
                <div class="col">
                    <button class="btn btn-primary">Proceed to Cart</button>
                </div>
            </div>
            <!-- Contact Seller Button -->
            <div class="row billing-details">
                <div class="col">
                    <button class="btn btn-success">Contact Seller</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>