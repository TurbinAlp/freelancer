<?php
include 'includes/conn.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // Prepare and bind the SQL statement
  $stmt = $conn->prepare("INSERT INTO users (fullname, username, email, phonenumber, location, password) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssss", $fullname, $username, $email, $phonenumber, $location, $password);

  // Set parameters and execute
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $location = $_POST['location'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password before storing

  if ($stmt->execute()) {
      echo "New record created successfully <a href='login.php'>Sign In</a>";
  } else {
      echo "Error: " . $stmt->error;
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
    }
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
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark px-5">
    <a class="navbar-brand" href="index.html">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lofin.php">Sign In</a>
            </li>
        </ul>
    </div>
</nav>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 form-container">
        <h2 class="text-center mb-4">Sign Up</h2>
        <form id="signup-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
            <div id="username-error" class="text-danger"></div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="phonenumber">Phone Number</label>
            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" required>
          </div>
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </form>
      </div>
    </div>
  </div>

  <script src="plugins/jquery-3.7.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script>
    // Form validation using jQuery
    $(document).ready(function() {
      $('#signup-form').submit(function(e) {
        e.preventDefault();
        var fullname = $('#fullname').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var phonenumber = $('#phonenumber').val();
        var location = $('#location').val();
        var password = $('#password').val();
        
        if (fullname.trim() === '' || username.trim() === '' || email.trim() === '' || phonenumber.trim() === '' || location.trim() === '' || password.trim() === '') {
          alert('Please fill in all fields');
          e.preventDefault();
        } else if (!isValidEmail(email)) {
          alert('Please enter a valid email address');
          e.preventDefault();
        } else if (!isValidPhoneNumber(phonenumber)) {
          alert('Please enter a valid phone number');
          e.preventDefault();
        }

        $.ajax({
        url: 'check_username_exist.php', 
        type: 'post',
        data: {username: username},
        success: function(response) {
          if (response == 'taken') {
            $('#username-error').text('Username is already taken');
          } else {
            $('#signup-form').unbind('submit').submit();
            $('#username-error').text('');
          }
        }
        });

      });
      // username availability on the database using AJAX
      // $('#username').focusout(function() {
      // var username = $(this).val();
      //alert('usaaaa')
      

      // Function to validate email
      function isValidEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
      }

      // Function to validate phone number
      function isValidPhoneNumber(phonenumber) {
        var re = /^\d{10}$/;
        return re.test(phonenumber);
      }
    });
  </script>
</body>
</html>
