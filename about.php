<?php
$isAdmin = true;
?>
<head>
  <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    .team-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 1rem;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); 
    }

    .team-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2); 
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

    .container.my-5:hover {
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); 
      perspective: 1500px; 
      transition: all 0.7s ease;

    }

        .container.my-5 {
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(166, 166, 166, 0.5);
      perspective: 1500px; 
      transition: all 0.7s ease;

    }
    
        .row {
      perspective: 1000px; 
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

<div class="container-fluid shadow position-sticky top-0 z-1 bg-body">
  <div class="container py-3 d-flex align-items-center">
    <div class="h5 m-0" style="font-family: 'Montserrat', sans-serif;">
      <strong style="color: rgb(99, 19, 19);">Alisto<span style="color: #0858d1;">PH</span></strong>
    </div>

    <div class="text-center me-auto ms-5">
      <div class="h5 text-dark my-0">
        <?= $date ?>
                <?php if ($isAdmin) { ?>
                <span class="badge rounded-pill text-bg-primary">Admin</span>
              <?php } ?>
      </div>
    </div>

    <div class="d-flex ms-auto align-items-center gap-2">
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="admin.php">Home</a>
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
  <h2 class="fw-bold text-center mb-5"></h2>
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
    <a href="admin.php" class="btn btn-outline-dark d-inline-flex align-items-center">
      <i class="b"></i>Back
    </a>
  </div>
</div>
<div class="container my-5">
  <div class="row justify-content-center text-center">
    <div class="col-md-8">
      <h2 class="fw-bold text-dark mb-4">About Our Team</h2>
      <p class="lead text-muted mb-4">
      We are a group of passionate students with a strong interest in learning about technology. Each of us brings different skills and perspectives, but we share a common passion for expanding our knowledge and exploring new ideas.
      <p class="text-muted mb-4">
      Our team is built on the principles of collaboration and growth. While we are at the beginning of our journeys, we are eager to tackle challenges, learn from one another, and apply what we’ve learned to real-world problems. Our goal is to build projects that not only showcase our developing abilities but also help us gain hands-on experience in the tech field.      </p>

      <p class="text-muted">
      As students, we are constantly seeking opportunities to learn and improve. We believe that by working together, we can achieve more and develop skills that will help us grow both personally and professionally. We’re committed to learning, sharing knowledge, and making progress as we dive deeper into the world of technology.      </p>
      
      <div class="mt-5">
        
      </div>
    </div>
  </div>
</div>


</body>
