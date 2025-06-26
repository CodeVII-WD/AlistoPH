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

<?php include("shared/nav.php"); ?>

<div class="container my-5">
  <h2 class="fw-bold text-center mb-5">Meet Our Team</h2>
  <div class="row justify-content-center g-4">

    <!-- Member 1 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <div class="bg-white shadow-sm p-4 team-card h-100">
        <img src="https://via.placeholder.com/150" class="team-img" alt="Member 1">
        <div class="team-name">Jay fernandez</div>
      </div>
    </div>

    <!-- Member 2 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <div class="bg-white shadow-sm p-4 team-card h-100">
        <img src="https://via.placeholder.com/150" class="team-img" alt="Member 2">
        <div class="team-name">Patricia Brin</div>
      </div>
    </div>

    <!-- Member 3 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <div class="bg-white shadow-sm p-4 team-card h-100">
        <img src="https://via.placeholder.com/150" class="team-img" alt="Member 3">
        <div class="team-name">Jodiel Mhae Mores</div>
      </div>
    </div>

    <!-- Member 4 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <div class="bg-white shadow-sm p-4 team-card h-100">
        <img src="https://via.placeholder.com/150" class="team-img" alt="Member 4">
        <div class="team-name">Jimuel villanueva</div>
      </div>
    </div>

    <!-- Member 5 -->
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <div class="bg-white shadow-sm p-4 team-card h-100">
        <img src="https://via.placeholder.com/150" class="team-img" alt="Member 5">
        <div class="team-name">Jan Krister Larino</div>    
      </div>
    </div>

  </div>

  <div class="text-center back-btn">
    <a href="javascript:history.back()" class="btn btn-outline-dark d-inline-flex align-items-center">
      <i class="bi bi-arrow-left me-2"></i> Back
    </a>
  </div>
</div>

</body>
