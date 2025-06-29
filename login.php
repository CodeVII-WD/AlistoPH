<?php
include("db_connection.php");

session_start();
if (isset($_GET['logout'])) {
  session_start();
  session_destroy();
  header("Location: login.php");
  exit();
}


if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['fname'] = $row['fname'];

    $loginquery = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $loginresult = mysqli_query($conn, $loginquery);

    if ($loginresult && mysqli_num_rows($loginresult) > 0) {
        $row = mysqli_fetch_assoc($loginresult);

        $_SESSION['userID'] = $row['userID'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['fname'] = $row['fname'];
        
        header("Location: admin.php");
        exit();
    } else {
      echo "<div class='text-center text-danger mt-3' style='font-weight:bold; font-size:25px; padding:10px;'>NO SUCH USER</div>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
   <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" href="img/logo1.png">

    <style>
    body {
      background: url('img/bg.gif') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.15); 
      backdrop-filter: blur(5px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.4);
    }

    .form-control {
       background-color: rgba(0, 0, 0, 0.2);
       border: 1px solid rgba(255, 255, 255, 0.25);
       color: #fff;
       backdrop-filter: blur(3px);
       box-shadow: none;
    }

    .form-control::placeholder {
      color: rgba(188, 184, 184, 0.7);
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, 0.3);
      color: #fff;
      border-color: rgba(255, 255, 255, 0.5);
      box-shadow: none;
    }

    .btn-primary {
      background-color: rgba(13, 110, 253, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: #fff;
      backdrop-filter: blur(3px);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background-color: rgba(13, 110, 253, 0.85); 
      border-color: rgba(0, 0, 0, 0.5);
      color: #fff;
    }


    </style>
</head>

<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card p-5 rounded-5 position-relative" style="width: 35rem;">
  <a href="login.php?logout=true" class="btn-close position-absolute top-0 end-0 m-3" aria-label="Close"></a>

  <div class="h4 text-center mb-4 fw-bold" style="color:rgb(207, 207, 207);">Admin Login</div>
    <!-- Login Form -->
    <form method="post">
        <div class="my-4">
            <label for="username">Username</label>
            <input id="username" class="form-control" type="text" name="username" required>
        </div>

        <div class="my-4">
            <label for="password">Password</label>
            <input id="password" class="form-control" type="password" name="password" required>
        </div>

        <div class="mt-5 text-center">
            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>
