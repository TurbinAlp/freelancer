<?php
include 'includes/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Retrieve user from database
  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();
  
  if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      
      // Verify password
      if (password_verify($password, $row['password'])) {
          // Set session variables
          $_SESSION['username'] = $username;
          $_SESSION['userid'] = $row['userid']; 

          header("Location: user.php");
          exit();
      } else {
          $error = "Invalid password";
      }
  } else {
      $error = "Invalid username";
  }

  // Close statement
  $stmt->close();
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .header {
      background-color: #117864;
      color: #fff;
      padding: 10px 0;
    }
    .footer {
      background-color: #117864;
      color: #fff;
      padding: 10px 0;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
    }

  
  </style>
</head>
<body>
  <div class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.html">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 form-container">
        <h2 class="text-center mb-4">Login</h2>
        <?php if (isset($error)) { ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
          </div>
        <?php } ?>
        <form id="login-form"  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
      </div>
    </div>
  </div>

  <div class="footer text-center">
    <div class="container">
      &copy; 2024 Your Company. All rights reserved.
    </div>
  </div>

  <!-- Bootstrap JS and jQuery (optional, for form validation) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Form validation using jQuery
    $(document).ready(function() {
      $('#login-form').submit(function(e) {
        var username = $('#username').val();
        var password = $('#password').val();

        // Simple validation
        if (username.trim() === '' || password.trim() === '') {
          alert('Please fill in all fields');
          e.preventDefault();
        }
      });
    });
  </script>
</body>
</html>
