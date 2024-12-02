<?php 
include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Contact</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="../CSS/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMzEmz5nHS3caZJ53qxR7Iq9D8lUP8dI4wYhoJ" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      
    </head>
  <body class="parallax">
      <!-- navbar starts -->
  
     
           <!-- navbar ends -->
            <!-- header starts -->
            <div class="header">
              <!-- <img src="../../src/images_the_district/bg2.jpeg" alt="Background Image"> -->
              <div class="header-text mt-5">
                <h1 class="text-center fw-bold display-1 m-5 p-5 text-white">
                    Contactez<span class="text-warning">-nous</span> 
              </h1>
              </div>
            </div>
           
            
         <div class="container ">
          <div class="row mb-4 d-flex justify-content-between ">
              <div class="col-lg-6 col-md-12  ">
                  <div class="card contact-card" style="border: none;">
                      <div class="card-body d-flex align-items-center">
                          <i class="bi bi-geo-alt-fill contact-icon-style" ></i>
                          <div>
                              <h4 class="contact-card-title mb-0 fs-5">Adresse</h4>
                              <p class="card-text">535022 le addrese ici </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12 ">
                  <div class="card contact-card" style="border: none;">
                      <div class="card-body d-flex align-items-center">
                          <i class="bi bi-telephone-fill contact-icon-style" ></i>
                          <div>
                              <h4 class="card-title mb-0 fs-5">Appelez-nous</h4>
                              <p class="card-text">+33 589 55488 55</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-4">
              <div class="col-lg-6 col-md-12">
                  <div class="card contact-card" style="border: none;">
                      <div class="card-body d-flex align-items-center">
                          <i class="icon bi bi-envelope contact-icon-style" ></i>
                          <div>
                              <h4 class="card-title mb-0 fs-5">Envoyez-nous un email</h4>
                              <p class="card-text">info@example.com</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-12">
                  <div class="card contact-card" style="border: none;">
                      <div class="card-body d-flex align-items-center">
                          <i class="bi bi-clock-fill contact-icon-style" ></i>
                          <div>
                              <h4 class="card-title mb-0 fs-5">Horaires d'ouverture</h4>
                              <p class="card-text">Lun-Sem: 11h - 23h; Dimanche: Férme</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container my-4 pb-3">
        <div class="row ">
          <div class="col-lg-12 col-md-6 contact-form-style py-3">
          <?php include 'contactform.php'?>
          </div>
        </div>
      </div>
          <!-- footer start -->
        <?php include 'footer.php'?>
      </body>
</html>



