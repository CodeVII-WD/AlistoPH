<!doctype html>
<html lang="en">
 
<?php
$isAdmin = true;
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
   <h1 class="mb-4">Famous Volcanic Eruptions in the Philippines</h1>
 
   <div class="con">
     <div class="row">
       <div class="col-12 col-lg-6">
         <?php
         include($_SERVER['DOCUMENT_ROOT'] . '/Alistoph/db_connection.php');
 
         // Fetch data from volcanic_eruptions table
         $sql = "SELECT volcano_name, location, vei, eruption_year FROM volcanic_eruptions ORDER BY eruption_year DESC";
         $result = $conn->query($sql);
 
         if ($result->num_rows > 0) {
             echo '<table class="table table-bordered mt-3">
                     <thead class="table-danger">
                       <tr>
                         <th scope="col">Volcano</th>
                         <th scope="col">Location</th>
                         <th scope="col">VEI</th>
                         <th scope="col">Year</th>
                       </tr>
                     </thead>
                     <tbody>';
 
             while ($row = $result->fetch_assoc()) {
                 echo '<tr>
                         <th scope="row">' . htmlspecialchars($row['volcano_name']) . '</th>
                         <td>' . htmlspecialchars($row['location']) . '</td>
                         <td>' . htmlspecialchars($row['vei']) . '</td>
                         <td>' . htmlspecialchars($row['eruption_year']) . '</td>
                       </tr>';
             }
 
             echo '</tbody></table>';
         } else {
             echo "<p class='mt-4'>No eruption data found.</p>";
         }
 
         $conn->close();
         ?>
       </div>
       <div class="col">
         <div class="p-3 border rounded bg-light">
           <h5>Did you know?</h5>
           <p>The Philippines is part of the Pacific Ring of Fire and has over 20 active volcanoes. Among the most destructive was the 1991 Mount Pinatubo eruption, one of the largest eruptions of the 20th century.</p>
           
         </div>
       </div>
       <div class="row row-cols-1 g-4">
  
  <div class="col">
    <div class="card h-100 text-white" style="background: #d35400; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">🌋 Before a Volcanic Eruption</h5>
        <ul class="mb-0">
          <li>Know evacuation routes and shelters.</li>
          <li>Prepare emergency kit with essentials.</li>
          <li>Stay informed through official channels.</li>
        </ul>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card h-100 text-white" style="background: #2c3e50; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">🔥 During a Volcanic Eruption</h5>
        <ul class="mb-0">
          <li>Seek shelter immediately in a safe area.</li>
          <li>Stay indoors, keep windows closed.</li>
          <li>Wear a mask to avoid inhaling ash.</li>
        </ul>
      </div>
    </div>
  </div>

  
  <div class="col">
    <div class="card h-100 text-white" style="background: #34495e; border-radius: 12px;">
      <div class="card-body">
        <h5 class="card-title">🌥️ After a Volcanic Eruption</h5>
        <ul class="mb-0">
          <li>Wait for official "all-clear" before returning home.</li>
          <li>Check for structural damage or ash buildup.</li>
          <li>Clean ash from roofs and other surfaces.</li>
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