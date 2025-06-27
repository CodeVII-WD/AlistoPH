<?php
include("db_connection.php");

session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loginquery = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $loginresult = mysqli_query($conn, $loginquery);

    if ($loginresult && mysqli_num_rows($loginresult) > 0) {
        $row = mysqli_fetch_assoc($loginresult);

        $_SESSION['userID'] = $row['userID'];
        $_SESSION['username'] = $row['username'];
        
        header("Location: admin.php");
        exit();
    } else {
        echo "<div class='text-center text-danger mt-3'>NO SUCH USER</div>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
   <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card p-5 rounded-5 position-relative" style="width: 35rem;">
  <a href="login.php?logout=true" class="btn-close position-absolute top-0 end-0 m-3" aria-label="Close"></a>

    <div class="h4 text-center mb-4">Admin Login</div>

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
