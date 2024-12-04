<?php 
$my_title = "Contact"; 
include 'header.php'?>

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



