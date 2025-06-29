<!doctype html>
<html lang="en">

<?php
$isAdmin = false;
?>

<head>
  <?php include("C:/xampp/htdocs/Alistoph/shared/head.php"); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="../../img/logo1.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include("C:/xampp/htdocs/Alistoph/shared/navForCards.php"); ?>

  <div class="container mt-5">
    <h1>Typhoon records</h1>

    <div class="con">
      <div class="row">
        <div class="col-6">
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/Alistoph/db_connection.php');


          
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
  <div class="card border-0 rounded shadow-lg my-4">
    <div class="card-body bg-dark text-white">
      <h5 class="card-title">Did you know?</h5>
      <p class="card-text">The Philippines is frequently affected by typhoons that cause widespread flooding. In 2009, Typhoon Ondoy brought one of the worst floods in Metro Manila’s history, submerging homes and roads.</p>
      <p class="card-text">Flooding is worsened by urban congestion, clogged waterways, and climate change.</p>
    </div>
  </div>
</div>

        <div class="row row-cols-1 g-4">
  <!-- "Before" -->
  <div class="col">
    <div class="card h-100 text-white" style="background: #4e73df; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">🌀 Before a Typhoon</h5>
        <ul class="mb-0">
          <li>Prepare emergency supplies.</li>
          <li>Secure windows and loose outdoor items.</li>
          <li>Know your evacuation routes.</li>
        </ul>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card h-100 text-white" style="background: #1cc88a; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">🌧️ During a Typhoon</h5>
        <ul class="mb-0">
          <li>Stay indoors and away from windows.</li>
          <li>Monitor official news updates.</li>
          <li>Avoid using electrical appliances.</li>
        </ul>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card h-100 text-white" style="background: #f6c23e; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">☀️ After a Typhoon</h5>
        <ul class="mb-0">
          <li>Check for hazards before going outside.</li>
          <li>Help clean up debris safely.</li>
          <li>Follow government instructions.</li>
        </ul>
      </div>
    </div>
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
