<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('Asia/Manila');
$date = date("l, F j, Y");
?>

<style>
  .glass-navbar {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(5px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
}
</style>

<div class="container-fluid shadow position-sticky top-0 z-1 glass-navbar">
  <div class="container py-3 d-flex align-items-center">
    

    <div class="h5 m-0" style="font-family: 'Montserrat', sans-serif;">
      <strong style="color: rgb(99, 19, 19);">Alisto<span style="color: #0858d1;">PH</span></strong>
    </div>

    <div class="text-center me-auto ms-5">
      <div class="h5 text-dark my-0">
        <?= $date ?>
        
      </div>
    </div>

    <!-- Navbar links -->
    <div class="d-flex ms-auto align-items-center gap-2">
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="javascript:history.back()">Home</a>
      </div>
      
    </div>

  </div>
</div>
