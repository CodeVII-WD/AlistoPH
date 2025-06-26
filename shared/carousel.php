
<style>
  .carousel-indicators {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-bottom: 1rem;
  }

  .carousel-indicators button {
    width: 50px;
    height: 4px;
    background-color: #ccc;
    border: none;
    border-radius: 2px;
    transition: background-color 0.3s ease;
    cursor: pointer;
  }

  .carousel-indicators button.active {
    background-color: #791f2b;
  }
</style>


<div class="container my-5">
  <div class="row align-items-center">

    <div class="col-md-6 mb-4 mb-md-0">
      <div id="carouselExampleIndicators" class="carousel slide shadow" data-bs-ride="carousel">
       
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <!-- Carousel slides pics -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/Alistoph.png" alt="First slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/Flood1.png" alt="Second slide" />
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/flood2.png" alt="Third slide" />
          </div>
        </div>

      
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    
    <div class="col-md-6 text-center text-shadow">
      <h2 class="fw-bold display-5">Stay <span style="color:rgb(81, 11, 11);">Aware</span>. Be Prepared.</h2>
      <p class="lead text-dark">We never know what happens next.<br />Safety starts with you.</p>
    </div>

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
