<?php
session_start();
include("db_connection.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$team_id = intval($_GET['id']); 

$sql = "SELECT * FROM users WHERE userID = $team_id LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $team_member = mysqli_fetch_assoc($result);
} else {
    header("Location: about.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
<link rel="icon" href="img/logo1.png">

  <title>Team Member Details</title>
  <?php include("shared/head.php"); ?>
  <style>

    body {
      background-color:rgba(210, 210, 210, 0.75);
    }

    .team-detail-img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 50%;
    }
    .team-detail-name {
      font-weight: 600;
      font-size: 1.5rem;
    }
    .team-detail-info {
      font-size: 1.1rem;
    }

    .card {
      background-color: rgb(255, 255, 255); 
      border-radius: 1rem;
      box-shadow: 5 10px 15px rgba(0, 0, 0, 0.3); 
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
        <a class="text-decoration-none text-dark" href="admin.php">Home</a>
      </div>
      
      <div class="me-2">
      <a href="login.php?logout=true" class="text-decoration-none text-dark btn btn-outline-dark"
      onclick="return confirmLogout()">Logout</a>      </div>
    </div>

  </div>
</div>

  <div class="container my-5">
    <div class="card mx-auto shadow" style="max-width: 500px;">
  <div class="card-body text-center">
  <h2 class="text-center fw-bold mb-4">Team Member Details</h2>
    <img src="<?= $team_member['image_path'] ?>" class="team-detail-img mb-3" alt="<?= $team_member['full_name'] ?>">
    <div class="team-detail-name mb-2"><?php echo $team_member['full_name']; ?></div>
    <div class="team-detail-info">
      <p><strong>Role:</strong> <?php echo $team_member['role']; ?></p>
      <p><i><?php echo $team_member['bio']; ?></i></p>
      </div>
  </div>
</div>


    <div class="text-center mt-4">
      <a href="about.php" class="btn btn-outline-dark">Back to Team</a>
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
