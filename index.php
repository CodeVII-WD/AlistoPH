<?php
  date_default_timezone_set('Asia/Manila'); 
  $date = date("l, F j, Y"); 

  $isAdmin = true;
  $Name = "Group 7";

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
      "image" => "img/floods&landslides.png",
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


  <div class="container mt-4">

    <?php include("shared/carousel.php"); ?>
    

      <div class="col-md-6 text-center my-4 text-shadow">
        <h2 class="fw-bold display-5">Stay <span style="color:rgb(81, 11, 11);">Aware</span>. Be Prepared.</h2>
        <p class="lead text-dark">We never know what happens next.<br />Safety starts with you.</p>
      </div>
    </div>
  </div>

   <div
      class="container-fluid"
      style="background-color: #180202; height: 200px"
    >
      <div class="row h-100"></div>
    </div>

  <div class="container my-5">
    <div class="row">
      <?php foreach ($disasters as $disaster): ?>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <div class="card shadow h-100 rounded-3">
            <img src="<?= $disaster['image'] ?>" class="card-img-top" alt="<?= $disaster['alt'] ?>" />
            <div class="card-body">
              <h5 class="card-title"><?= $disaster['title'] ?></h5>
              <a href="<?= $disaster['link'] ?>" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="col-12" style="background-color: #180202">
    <ul class="text-white p-3">
      <strong>Hotlines:</strong><br />
      dito mga hotlines<br />
      more info here...
    </ul>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
