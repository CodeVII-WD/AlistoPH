<head>
  <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .team-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 1rem;
    }

    .team-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .team-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
      border: 4px solid #fff;
      box-shadow: 0 0 0 2px #dee2e6;
    }

    .team-name {
      font-weight: 600;
      font-size: 1.1rem;
    }

    .back-btn {
      margin-top: 3rem;
    }
  </style>
</head>

<body>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

date_default_timezone_set('Asia/Manila');
$date = date("l, F j, Y");
?>

<div class="container-fluid shadow position-sticky top-0 z-1 bg-body" >
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
        <a class="text-decoration-none text-dark" href="index.php">Home</a>
      </div>
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="about.php">About</a>
      </div>
      <div class="me-2">
        <a class="text-decoration-none text-dark btn btn-outline-dark" href="login.php">Logout</a>
      </div>
    </div>

  </div>
</div>


<div class="container my-5">
  <h2 class="fw-bold text-center mb-5">Meet Our Team</h2>
  <div class="row justify-content-center g-4">

    <!-- Member 1 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <a href="team_details.php?id=1" class="text-decoration-none">
        <div class="bg-white shadow-sm p-4 team-card h-100">
          <img src="img/jay.png" class="team-img" alt="Member 1">
          <div class="team-name">Jay Fernandez</div>
        </div>
      </a>
    </div>

    <!-- Member 2 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <a href="team_details.php?id=2" class="text-decoration-none">
        <div class="bg-white shadow-sm p-4 team-card h-100">
          <img src="img/Brin.jpg" class="team-img" alt="Member 2">
          <div class="team-name">Patricia Brin</div>
        </div>
      </a>
    </div>

    <!-- Member 3 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <a href="team_details.php?id=3" class="text-decoration-none">
        <div class="bg-white shadow-sm p-4 team-card h-100">
          <img src="https://via.placeholder.com/150" class="team-img" alt="Member 3">
          <div class="team-name">Jodiel Mhae Mores</div>
        </div>
      </a>
    </div>

    <!-- Member 4 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <a href="team_details.php?id=4" class="text-decoration-none">
        <div class="bg-white shadow-sm p-4 team-card h-100">
          <img src="img/jim.png" class="team-img" alt="Member 4">
          <div class="team-name">Jimuel Villanueva</div>
        </div>
      </a>
    </div>

    <!-- Member 5 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <a href="team_details.php?id=5" class="text-decoration-none">
        <div class="bg-white shadow-sm p-4 team-card h-100">
          <img src="https://via.placeholder.com/150" class="team-img" alt="Member 5">
          <div class="team-name">Jan Krister Larino</div>    
        </div>
      </a>
    </div>

  </div>

  <div class="text-center back-btn">
    <a href="javascript:history.back()" class="btn btn-outline-dark d-inline-flex align-items-center">
      <i class="b"></i>Back
    </a>
  </div>
</div>

</body>
