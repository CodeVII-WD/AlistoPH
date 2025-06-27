<!doctype html>
<html lang="en">

<?php
$isAdmin = false;
?>

<head>
  <?php include("C:/xampp/htdocs/alistoph/shared/head.php"); ?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>

<body>
  <?php include("C:/xampp/htdocs/alistoph/shared/navForCards.php"); ?>

  <div class="container mt-5">
    <h1>Famous Earthquakes record</h1>

    <div class="con">
      <div class="row">
        <div class="col-6">
          <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/alistoph/db_connection.php');

          // Fetch data from the earthquakes table
          $sql = "SELECT location, magnitude, date FROM earthquakes ORDER BY date DESC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo '<table class="table table-bordered mt-4">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">Location</th>
                          <th scope="col">Magnitude</th>
                          <th scope="col">Date</th>
                        </tr>
                      </thead>
                      <tbody>';

              while ($row = $result->fetch_assoc()) {
                  echo '<tr>
                          <th scope="row">' . htmlspecialchars($row['location']) . '</th>
                          <td>' . htmlspecialchars($row['magnitude']) . '</td>
                          <td>' . htmlspecialchars($row['date']) . '</td>
                        </tr>';
              }

              echo '</tbody></table>';
          } else {
              echo "<p class='mt-4'>0 results found.</p>";
          }

          $conn->close();
          ?>
        </div>

        <div class="col my-4">
 
  <div class="card text-white text-center shadow-lg border-0" style="background: linear-gradient(135deg, #1f1f1f, #2c3e50); border-radius: 16px;">
    <div class="card-body">
      <h5 class="card-title mb-3" style="font-weight: 600;">Quote</h5>
      <p class="card-text" style="font-size: 1.1rem; font-style: italic;">
        “Earthquakes remind us that we live on a restless planet.”
      </p>
      <p class="text-end text-white-50 mb-0">— Anonymous</p>
    </div>
  </div>
</div>

        <div class="row row-cols-1 g-4">
          
  
  <div class="col">
    <div class="card h-100 text-white" style="background: #5d6d7e; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">🌐 Before an Earthquake</h5>
        <ul class="mb-0">
          <li>Secure heavy objects and furniture at home.</li>
          <li>Prepare an emergency bag with essentials.</li>
          <li>Plan and practice evacuation drills.</li>
        </ul>
      </div>
    </div>
  </div>

 
  <div class="col">
    <div class="card h-100 text-white" style="background: #1c2833; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">⚠️ During an Earthquake</h5>
        <ul class="mb-0">
          <li>Drop, Cover, and Hold on under sturdy furniture.</li>
          <li>Stay away from windows and tall objects.</li>
          <li>If outside, move to an open space away from buildings.</li>
        </ul>
      </div>
    </div>
  </div>

 
  <div class="col">
    <div class="card h-100 text-white" style="background: #2f3640; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">📡 After an Earthquake</h5>
        <ul class="mb-0">
          <li>Check for injuries and administer first aid if needed.</li>
          <li>Inspect your home for damage or gas leaks.</li>
          <li>Listen to emergency broadcasts for updates.</li>
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
