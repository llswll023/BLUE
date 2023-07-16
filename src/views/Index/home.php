<?php require_once APPROOT . '/src/views/include/header.php'; ?>
    <h1 class="p-3 mb-2 bg-info-subtle text-emphasis-inf text-center fw-bold">Main Page</h1>
    <div id="carouselExampleCaptions" class="carousel slide">
     <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     </div>
     <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.cau.ac.kr/cau/img/about/ui1_c.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5></h5>
         <p class="fst-italic text-secondary">We are CAUtion Webhell BLUE team.</p>
        </div>
      </div>
     <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
     </div>
     <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
     </div>
    </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br><br><br>
    <p class="fst-italic text-center">This is homepage</p>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>