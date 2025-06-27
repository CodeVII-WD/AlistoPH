<?php

session_start();
include("db_connection.php");


  date_default_timezone_set('Asia/Manila'); 
  $date = date("l, F j, Y"); 

  $currentTime = date("H");
  $greeting = "";

  if($currentTime > 18){
    $greeting = "Good Evening";
  } elseif ($currentTime >= 12) {
    $greeting = "Good Afternoon";
  } else {
    $greeting = "Good Morning";
  }

  $disasters = [
    [
      "title" => "Typhoons",
      "image" => "img/Typhoon.png",
      "alt" => "Typhoon",
      "link" => "Cards/Typhoons/index.php"
    ],
    [
      "title" => "Earthquake",
      "image" => "img/Earthquake.png",
      "alt" => "Earthquake",
      "link" => "Cards/Earthquake/index.php"
    ],
    [
      "title" => "Volcanic Eruptions",
      "image" => "img/Volcano.png",
      "alt" => "Volcano",
      "link" => "Cards/Volcanic Eruptions/index.php"
    ],
    [
      "title" => "Floods & Landslides",
      "image" => "img/flood123.png",
      "alt" => "Floods & Landslides",
      "link" => "Cards/Floods & Landslides/index.php"
    ],
    
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("shared/head.php") ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
</head>
<style>
  .disaster-title {
    background-color:rgb(92, 2, 2); 
    color: white; 
    padding: 20px; 
    border-radius: 8px; 
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); 
    font-size: 3rem; 
    text-align: center; 
    margin-bottom: 30px; 
}
</style>
<body>

  <?php include("shared/nav.php"); ?>


  

  <section id="home" class="d-flex align-items-center justify-content-start text-start text-white"
           style="background: url('img/bg3.png') center center / cover no-repeat; height: 80vh; overflow-x: hidden; ">
    <div class="container ps-md-5">
      <h1 class="display-3 fw-bold">
        Natural Disaster &<br>Emergencies
      </h1>
      <p class="lead">
        Stay informed, prepared, and resilient in the face of nature's most powerful events.<br>
        Knowledge is your first line of defense against disaster.
      </p>
    </div>
  </section>

    <?php include("shared/carousel.php"); ?>

   <div class="container-fluid" style="background-color:rgb(86, 6, 6); height: 200px;">
  <div class="row h-100">
    <div class="col d-flex justify-content-center align-items-center">
      <div class="info-bar d-flex flex-column flex-md-row align-items-center gap-4 px-4 py-3 text-white rounded-3" 
           style="background-color:rgb(119, 21, 21); box-shadow: 0 8px 24px rgba(0,0,0,0.4); font-size: 1.1rem;">
        <span>📞 <strong>Emergency Hotline</strong></span>
        <span>🚨 <strong>National Emergency:</strong> 911</span>
        <span>🆘 <strong>Medical Assistance:</strong> 143 or 8527-000</span>
      </div>
    </div>
  </div>
</div>



    <div class="container my-5">
  <div class="row justify-content-center">
    <?php foreach ($disasters as $disaster): ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card shadow h-100 rounded-3 disaster-card">
          <img src="<?= $disaster['image'] ?>" class="card-img-top disaster-img" alt="<?= $disaster['alt'] ?>" />
          <div class="card-body text-center">
            <h5 class="card-title"><?= $disaster['title'] ?></h5>
            <a href="<?= $disaster['link'] ?>" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

  <div class="col-12 px-4 py-5" style="background-color: rgb(243, 232, 232);">
  <div class="text-center">
    <h3 class="fw-bold mb-4" style="color: #2b2b2b; font-size: 2rem;">About our Organization</h3>

    <h5 class="fw-bold mb-2" style="color: #791f2b; letter-spacing: 1px;">MISSION</h5>
    
    <p class="mx-auto" style="max-width: 800px; color: #444; font-size: 1.1rem; line-height: 1.8;">
      We are committed to providing essential information and resources that help communities prepare for,
      respond to, and recover from natural disasters and emergencies. Our mission is to build resilient
      communities through education, awareness, and proactive preparedness. By empowering individuals with
      the knowledge and tools they need, we strive to create a safer, more informed, and better-prepared society.
    </p>
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
<div class="container my-5">
        
        <div class="row mb-4">
            <div class="col">
                <h1 class="disaster-title text-center">Natural Disasters in the Philippines</h1>
                <p class="text-center">A summary of the major natural disasters: Typhoons, Floods, Earthquakes, and Volcanic Eruptions</p>
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6">
                <div class="disaster-section">
                    <h2 class="disaster-subtitle">Typhoons</h2>
                    <p>The Philippines is prone to typhoons, which are strong tropical storms that bring heavy rainfall, winds, and flooding. These storms are most common from June to November. Typhoons like Typhoon Haiyan (Yolanda) in 2013 have caused widespread devastation, especially in Eastern Visayas.</p>
                    <p>Impact: Destruction of homes, loss of lives, and disruption of daily activities.</p>
                    <p>Example Typhoons: Typhoon Yolanda (2013), Typhoon Ondoy (2009), Typhoon Agaton (2022).</p>
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="disaster-section">
                    <h2 class="disaster-subtitle">Floods</h2>
                    <p>Flooding is a common occurrence, especially in areas near rivers or coastal regions. It is often caused by heavy rains from typhoons or the southwest monsoon (Habagat). Flash floods can also occur due to deforestation and poor drainage systems.</p>
                    <p>Impact: Infrastructure damage, displacement of people, loss of agricultural lands, and disruption of transportation.</p>
                    <p>Example Flooding Events: Manila Floods (2009), Cagayan Valley Flooding (2020), Mindanao Floods (2022).</p>
                </div>
            </div>
        </div>

       
        <div class="row">
            <div class="col-md-6">
                <div class="disaster-section">
                    <h2 class="disaster-subtitle">Earthquakes</h2>
                    <p>The Philippines is located along the Pacific Ring of Fire, making it vulnerable to earthquakes. While most earthquakes are not destructive, there are occasional large ones that cause significant damage. The 2013 Bohol earthquake is one example of a destructive earthquake in the country.</p>
                    <p>Impact: Building collapse, landslides, injuries, and loss of lives.</p>
                    <p>Example Earthquakes: Bohol Earthquake (2013), Davao del Sur Earthquake (2019), Surigao Earthquake (2017).</p>
                </div>
            </div>


            <div class="col-md-6">
                <div class="disaster-section">
                    <h2 class="disaster-subtitle">Volcanic Eruptions</h2>
                    <p>Volcanic eruptions are another common natural disaster in the Philippines, as the country is home to many active volcanoes. The most famous is Mayon Volcano in Albay, known for its perfect cone shape. Eruptions can be catastrophic, leading to ashfall, lava flows, and pyroclastic flows.</p>
                    <p>Impact: Destruction of property, loss of life, disruption of air travel, and damage to agriculture.</p>
                    <p>Example Volcanic Eruptions: Mount Pinatubo (1991), Mayon Volcano Eruptions (2000, 2018), Taal Volcano Eruption (2020).</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="disaster-section">
                    <h2 class="disaster-subtitle">Conclusion</h2>
                    <p>Natural disasters in the Philippines have caused widespread devastation over the years, but they have also led to greater awareness, better preparedness, and stronger resilience among Filipinos. Various government and non-government agencies have worked together to improve disaster response and risk management in the country.</p>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-white text-center py-4 mt-5" style="background-color: #791f2b;">
        <p class="mb-0">© 2025 AlistoPH. Stay safe and informed.</p>
    </footer>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
