<?php

session_start();
include("db_connection.php");

// Redirect to login page pag hindi nag logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];



  date_default_timezone_set('Asia/Manila'); 
  $date = date("l, F j, Y"); 

  $currentTime = date("H");
  $greeting = "";

  if($currentTime > 18){
    $greeting = "Good Evening";
  } elseif ($currentTime >= 12) {
    $greeting = "Good Afternoon";
  } else {
    $greeting = "Good Morning";
  }

  $disasters = [
    [
      "title" => "Typhoons",
      "image" => "img/Typhoon.png",
      "alt" => "Typhoon",
      "link" => "Cards/Typhoons/index.php"
    ],
    [
      "title" => "Earthquake",
      "image" => "img/Earthquake.png",
      "alt" => "Earthquake",
      "link" => "Cards/Earthquake/index.php"
    ],
    [
      "title" => "Volcanic Eruptions",
      "image" => "img/Volcano.png",
      "alt" => "Volcano",
      "link" => "Cards/Volcanic Eruptions/index.php"
    ],
    [
      "title" => "Floods & Landslides",
      "image" => "img/flood123.png",
      "alt" => "Floods & Landslides",
      "link" => "Cards/Floods & Landslides/index.php"
    ],
    
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>
<body>

  <?php include("shared/nav.php"); ?>


  

  <section id="home" class="d-flex align-items-center justify-content-start text-start text-white"
           style="background: url('img/bg3.png') center center / cover no-repeat; height: 80vh; overflow-x: hidden; ">
    <div class="container ps-md-5">
      <h1 class="display-3 fw-bold">
        Natural Disaster &<br>Emergencies
      </h1>
      <p class="lead">
        Stay informed, prepared, and resilient in the face of nature's most powerful events.<br>
        Knowledge is your first line of defense against disaster.
      </p>
    </div>
  </section>

    <?php include("shared/carousel.php"); ?>

   <div class="container-fluid" style="background-color:rgb(86, 6, 6); height: 200px;">
  <div class="row h-100">
    <div class="col d-flex justify-content-center align-items-center">
      <div class="info-bar d-flex flex-column flex-md-row align-items-center gap-4 px-4 py-3 text-white rounded-3" 
           style="background-color:rgb(119, 21, 21); box-shadow: 0 8px 24px rgba(0,0,0,0.4); font-size: 1.1rem;">
        <span>📞 <strong>Emergency Hotline</strong></span>
        <span>🚨 <strong>National Emergency:</strong> 911</span>
        <span>🆘 <strong>Medical Assistance:</strong> 143 or 8527-000</span>
      </div>
    </div>
  </div>
</div>



    <div class="container my-5">
  <div class="row justify-content-center">
    <?php foreach ($disasters as $disaster): ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card shadow h-100 rounded-3 disaster-card">
          <img src="<?= $disaster['image'] ?>" class="card-img-top disaster-img" alt="<?= $disaster['alt'] ?>" />
          <div class="card-body text-center">
            <h5 class="card-title"><?= $disaster['title'] ?></h5>
            <a href="<?= $disaster['link'] ?>" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

  <div class="col-12 px-4 py-5" style="background-color: #f9f6f6;">
  <div class="text-center">
    <h3 class="fw-bold mb-4" style="color: #2b2b2b; font-size: 2rem;">About our Organization</h3>

    <h5 class="fw-bold mb-2" style="color: #791f2b; letter-spacing: 1px;">MISSION</h5>
    
    <p class="mx-auto" style="max-width: 800px; color: #444; font-size: 1.1rem; line-height: 1.8;">
      We are committed to providing essential information and resources that help communities prepare for,
      respond to, and recover from natural disasters and emergencies. Our mission is to build resilient
      communities through education, awareness, and proactive preparedness. By empowering individuals with
      the knowledge and tools they need, we strive to create a safer, more informed, and better-prepared society.
    </p>
  </div>
</div>


    <footer class="text-white text-center py-4 mt-5" style="background-color: #791f2b;">
        <p class="mb-0">© 2025 AlistoPH. Stay safe and informed.</p>
    </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
