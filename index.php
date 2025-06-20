<?php
  date_default_timezone_set('Asia/Manila'); 
  $date = date("l, F j, Y"); 

  $isAdmin = true;

$currentTime = date("H");
$greeting = "";
$Name = "Group 7";

if($currentTime > 18){
  $greeting = "Good Evening";
} else if ($currentTime >= 12) {
  $greeting = "Good Afternoon";
} else {
  $greeting = "Good Morning";
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container-fluid glass-container shadow mb-5 py-2 rounded sticky-top">
  <div class="row align-items-center">
    <div class="col-md-4" style="color: rgb(99, 19, 19)">
      <h1
        style="
          margin-left: 20px;
          font-family: 'Montserrat', sans-serif;
          font-weight: 700;
        "
      >
        Alisto<span style="color: #0858d1">PH</span>
      </h1>
    </div>

    <div class="col-md-4 d-flex justify-content-center">
      <div class="h5 my-0 text-center text-dark">
        <?php echo $date; ?> 
        <?php
          if ($isAdmin) {
            echo $greeting . ' <span class="badge rounded-pill text-bg-primary">' . $Name . '</span>';
          }
        ?>  
      </div>
    </div>

    <div class="col-md-4 d-flex justify-content-end align-items-center">
      <nav>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Login</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <div id="carouselExampleCaptions" class="carousel slide shadow-lg">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/flood2.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/Flood1.png" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <img src="img/flood2.png" class="d-block w-100" alt="..." />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>

        <div class="col-md-6 text-center my-4 text-shadow">
          <h2 class="fw-bold display-5">
            Stay Aware. <br />
            Be Prepared.
          </h2>
          <p class="lead text-dark">
            We never know what happens next.<br />Safety starts with you.
          </p>
        </div>
      </div>
    </div>
    <div
      class="container-fluid"
      style="background-color: #180202; height: 200px"
    >
      <div class="row h-100"></div>
    </div>

    <div class="container my-5">
      <div class="row" id="disasterCardsContainer"></div>
    </div>

    <script>
      const disasters = [
        {
          title: "Typhoons",
          image: "img/Typhoon.png",
          alt: "Typhoon",
        },
        {
          title: "Earthquake",
          image: "img/Earthquake.png",
          alt: "Earthquake",
        },
        {
          title: "Volcanic Eruptions",
          image: "img/Volcano.png",
          alt: "Volcano",
        },
      ];

      const container = document.getElementById("disasterCardsContainer");

      disasters.forEach((disaster) => {
        container.innerHTML += `
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card shadow h-100 rounded-3">
          <img src="${disaster.image}" class="card-img-top" alt="${disaster.alt}" />
          <div class="card-body">
            <h5 class="card-title">${disaster.title}</h5>
            <a href="#" class="btn btn-primary">View</a>
          </div>
        </div>
      </div>
    `;
      });
    </script>

    <div class="col-12" style="background-color: brown">
      <ul>
        dito mga hotlines
        <br />
        hotlines
      </ul>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
