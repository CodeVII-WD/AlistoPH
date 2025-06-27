<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('Asia/Manila');
$date = date("l, F j, Y");
?>

<div class="container-fluid shadow position-sticky top-0 z-1" style="background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(10px);">
  <div class="container py-3 d-flex align-items-center">
    <div class="h5 m-0" style="font-family: 'Montserrat', sans-serif;">
      <strong style="color: rgb(99, 19, 19);">Alisto<span style="color: #0858d1;">PH</span></strong>
    </div>

    <div class="text-center me-auto ms-5">
      <div class="h5 text-dark my-0">
        <?= $date ?>
      </div>
    </div>

    <div class="d-flex ms-auto align-items-center gap-2">
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="index.php">Home</a>
      </div>
      <div class="me-2">
        <a class="text-decoration-none text-dark btn btn-outline-dark" href="login.php">Login</a>
      </div>
    </div>
  </div>
</div>

<style>
  .container-fluid {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
  }

  .container-fluid .h5 {
    color: rgb(99, 19, 19);
  }

  .text-dark {
    color: #333 !important;
  }

  .btn-outline-dark {
    border-color: #333;
    color: #333;
  }

  .btn-outline-dark:hover {
    background-color: #333;
    color: #fff;
  }

  .text-dark {
    color: #333;
  }

  .text-dark:hover {
    color: #0858d1;
  }
</style>
