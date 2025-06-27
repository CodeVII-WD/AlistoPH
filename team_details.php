<?php
include("db_connection.php"); 

session_start();

if (!isset($_GET['id'])) {
    header("Location: about.php");
    exit();
}

$team_id = $_GET['id'];

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
  <title>Team Member Details</title>
  <?php include("shared/head.php"); ?>
  <style>
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
    <h2 class="text-center fw-bold mb-4">Team Member Details</h2>

    <div class="text-center">
      <img src="https://via.placeholder.com/200" class="team-detail-img mb-3" alt="Team Member">
      <div class="team-detail-name"><?php echo $team_member['full_name']; ?></div>
      <div class="team-detail-info">
        <p><strong>Role:</strong> <?php echo $team_member['role']; ?></p>
        <p><?php echo $team_member['bio']; ?></p>

      </div>
    </div>

    <div class="text-center mt-4">
      <a href="about.php" class="btn btn-outline-dark">Back to Team</a>
    </div>
  </div>
</body>
</html>
