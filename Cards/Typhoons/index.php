<!doctype html>
<html lang="en">

<?php
$isAdmin = false;
?>

<head>
  <?php include("C:/xampp/htdocs/DisasterProj/shared/head.php"); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include("C:/xampp/htdocs/DisasterProj/shared/nav.php"); ?>

  <div class="container mt-5">
    <h1>This is for Typhoon</h1>

    <div class="con">
      <div class="row">
        <div class="col-6">
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/DisasterProj/db_connection.php');


          // Fetch data from the typhoons table
          $sql = "SELECT name, affected_area, disaster_level FROM typhoon";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo '<table class="table table-bordered mt-4">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Affected Area</th>
                          <th scope="col">Disaster Level</th>
                        </tr>
                      </thead>
                      <tbody>';

              while ($row = $result->fetch_assoc()) {
                  echo '<tr>
                          <th scope="row">' . htmlspecialchars($row['name']) . '</th>
                          <td>' . htmlspecialchars($row['affected_area']) . '</td>
                          <td>' . htmlspecialchars($row['disaster_level']) . '</td>
                        </tr>';
              }

              echo '</tbody></table>';
          } else {
              echo "<p class='mt-4'>0 results found.</p>";
          }

          $conn->close();
          ?>
        </div>
        <div class="col">
          
          <p>Design here...</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>
