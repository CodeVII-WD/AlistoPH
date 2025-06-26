<!doctype html>
<html lang="en">
 
<?php
$isAdmin = false;
?>
 
<head>
  <?php include("C:/xampp/htdocs/Alistoph/shared/head.php"); ?>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>
 
<body>
  <?php include("C:/xampp/htdocs/Alistoph/shared/nav.php"); ?>
 
  <div class="container mt-5">
    <h1 class="mb-4">Famous Floods in the Philippines</h1>
 
    <div class="con">
      <div class="row">
        <div class="col-12 col-lg-6">
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/Alistoph/db_connection.php');
 
         
         
// Fetch data from famous_floods table
$sql = "SELECT flood_name, location, water_level, year FROM floods ORDER BY year DESC";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    echo '<table class="table table-bordered mt-3">
            <thead class="table-primary">
              <tr>
                <th scope="col">Flood Name</th>
                <th scope="col">Location</th>
                <th scope="col">Water Level (m)</th>
                <th scope="col">Year</th>
              </tr>
            </thead>
            <tbody>';
 
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <th scope="row">' . htmlspecialchars($row['flood_name']) . '</th>
                <td>' . htmlspecialchars($row['location']) . '</td>
                <td>' . htmlspecialchars($row['water_level']) . '</td>
                <td>' . htmlspecialchars($row['year']) . '</td>
              </tr>';
    }
    echo '</tbody></table>';
} else {
    echo "<p class='mt-4'>No flood data found.</p>";
}
 
          $conn->close();
          ?>
        </div>
        <div class="col">
          <div class="p-3 border rounded bg-light">
            <h5>Did you know?</h5>
            <p>The Philippines is frequently affected by typhoons that cause widespread flooding. In 2009, Typhoon Ondoy brought one of the worst floods in Metro Manila’s history, submerging homes and roads.</p>
            <p>Flooding is worsened by urban congestion, clogged waterways, and climate change.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>
 
</html>