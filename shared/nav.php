<div class="container-fluid shadow position-sticky top-0 z-1 bg-body">
  <div class="container py-3 d-flex flex-row justify-content-between align-items-center">
    
 <div class="h5 m-0" style="font-family: 'Montserrat', sans-serif;">
     <strong style="color: rgb(99, 19, 19);">Alisto<span style="color: #0858d1;">PH</span></strong>
</div>

 
    <div class="text-center me-auto ms-5">
      <div class="h6 text-dark my-0">
        <?php
  echo isset($date) ? $date : '';
  if (isset($isAdmin) && $isAdmin) {
    echo "<br>" . (isset($greeting) ? $greeting : 'Hello') . " <span class='badge rounded-pill text-bg-primary'>" . (isset($Name) ? $Name : 'Guest') . "</span>";
  }
  ?>
      </div>
    </div>

    <!-- Navbar ito -->
    <div class="d-flex flex-row">
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="C:/xampp/htdocs/index.php">Home</a>
      </div>
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="#">About</a>
      </div>
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="#">Login</a>
      </div>
    </div>
    
  </div>
</div>
