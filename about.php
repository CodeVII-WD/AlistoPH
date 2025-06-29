<?php
session_start();
include("db_connection.php");

if (isset($_GET['logout'])) {
    session_unset();    
    session_destroy();    
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$isAdmin = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="img/logo1.png">
  <style>

    body {
      background-color:rgba(185, 185, 185, 0.74);
  }


   .team-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 1rem;
      background-color: rgb(255, 255, 255); 
      color: rgb(0, 0, 0);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); 
  }

    .team-card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
  }


    .team-img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
      border: 4px solid #fff;
      box-shadow: 0 0 0 2px rgb(106, 117, 139);
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

    .glass-navbar {
       background: rgba(255, 255, 255, 0.15);
       backdrop-filter: blur(10px);
       border-bottom: 1px solid rgba(255, 255, 255, 0.2);
       box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
}

    .container.mt-3:hover {
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); 
      perspective: 1500px; 
      transition: all 0.7s ease;
    }

    .container.mt-3 {
      background-color: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(166, 166, 166, 0.5);
      perspective: 1500px; 
      transition: all 0.7s ease;
    }
  </style>
</head>

<body>
<?php
date_default_timezone_set('Asia/Manila');
$date = date("l, F j, Y");
?>

<div class="container-fluid shadow position-sticky top-0 z-1 glass-navbar">
  <div class="container py-3 d-flex align-items-center">
    <div class="h5 m-0" style="font-family: 'Montserrat', sans-serif;">
      <strong style="color: rgb(99, 19, 19);">Alisto<span style="color: #0858d1;">PH</span></strong>
    </div>

    <div class="text-center me-auto ms-5">
    <div class="h5 text-dark my-0">
    <?= $date ?>
    <?php if (isset($_SESSION['fname'])): ?>
        <span class="badge rounded-pill text-bg-primary">
            <?= htmlspecialchars($_SESSION['fname']) ?>
        </span>
    <?php endif; ?>
</div>

    </div>

    <div class="d-flex ms-auto align-items-center gap-2">
      <div class="me-2">
        <a class="text-decoration-none text-dark" href="admin.php">Home</a>
      </div>
      
      <div class="me-2">
      <a href="login.php?logout=true" class="text-decoration-none text-dark btn btn-outline-dark"
      onclick="return confirmLogout()">Logout</a>      </div>
    </div>
  </div>
</div>

<div class="container my-5">
  <h2 class="fw-bold text-center mb-5">Code VII Team</h2>
  <div class="row justify-content-center g-4">
  <?php
  $query = "SELECT userID, full_name, profile_pic FROM users";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['userID'];
      $fullname = htmlspecialchars($row['full_name']);
      $imageProfile = htmlspecialchars($row['profile_pic']);

      $imageSrc = "img/" . $imageProfile;
  ?>
    <div class="col-xl-2 col-md-4 col-sm-6 text-center">
      <a href="team_details.php?id=<?= $id ?>" class="text-decoration-none">
      <div class="team-card p-4 h-100">
      <img src="<?= $imageSrc ?>" 
               class="team-img" 
               alt="<?= $fullname ?>" 
               onerror="this.onerror=null; this.src='users/default.png';">
          <div class="team-name"><?= $fullname ?></div>
        </div>
      </a>
    </div>
  <?php
    }
  } else {
    echo "<p class='text-center'>No team members found.</p>";
  }
  ?>
</div>

  <div class="text-center back-btn">
    <a href="admin.php" class="btn btn-outline-dark d-inline-flex align-items-center">
      <i class="bi"></i>Back
    </a>
  </div>

</div>
<div class="container mt-3">
    <h3 class="text-center fw-bold mb-3">About Our Team</h3>
    <p class="text-center fs-5">
      Code VII is a passionate team of IT enthusiasts dedicated to crafting smart and reliable digital solutions. 
      With skills ranging from web development and database management to cybersecurity and UI/UX design, 
      we collaborate to turn ideas into impact. Whether we're building systems, solving real-world problems, 
      or pushing boundaries with technology — we're all in, together.
    </p>
    <p class="text-center text-muted mb-0">“Code hard. Think smart. Build together.”</p>
  </div>
</div>

<footer class="text-white text-center py-4 mt-5" style="background-color: #791f2b;">
        <p class="mb-0">© 2025 AlistoPH. Stay safe and informed.</p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<script>
  function confirmLogout() {
    return confirm("Are you sure you want to log out?");
  }
</script>
</body>
</html>
