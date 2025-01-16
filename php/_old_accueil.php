<?php 
$my_title = "Accueil"; 
include 'header.php'?>

     <div class="spinner-container">
      <div class="loader"></div>
     </div>
         <!-- navbar starts -->   
          <!-- navbar ends --> 
          <div id="carouselheader" class="carousel slide">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselheader" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselheader" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselheader" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item active header-c-items">
                  <img src="../src/bgn.jpg" class="d-block w-100 c-image" alt="...">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <h1 class="display-4">Bienvenue au District Restaurant</h1>
                      <form action="foodlist.php">
                          <div class="input-group justify-content-center search-input-group mt-3 ">
                              <input type="text" class="form-control input-resize rounded-left-top-bottom" placeholder="Recherché" name='user_value' id="search" value="<?php echo isset($_POST['query']) ? htmlspecialchars($_POST['query']) : ''; ?>">
                              <button type="submit" class="btn btn-secondary btn-sm rounded-right-top-bottom"><i class="bi bi-search"></i></button>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="carousel-item header-c-items">
                  <img src="../src/bgnn.jpg" class="d-block w-100 c-image" alt="...">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <h1 class="display-4">Bienvenue au District Restaurant</h1>
                      <form action="foodlist.php">
                          <div class="input-group justify-content-center search-input-group mt-3">
                              <input type="text" class="form-control input-resize" placeholder="Recherché" name='user_value' id="search" value="<?php echo isset($_POST['query']) ? htmlspecialchars($_POST['query']) : ''; ?>">
                              <button type="submit" class="btn btn-secondary btn-sm rounded-right-top-bottom"><i class="bi bi-search"></i></button>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="carousel-item header-c-items">
                  <img src="../src/bgnnn.jpg" class="d-block w-100 c-image" alt="...">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <h1 class="display-4">Bienvenue au District Restaurant</h1>
                      <form action="foodlist.php">
                          <div class="input-group search-input-group justify-content-center  mt-3">
                              <input type="text" class="form-control input-resize" placeholder="Recherché" name='user_value' id="search" value="<?php echo isset($_POST['query']) ? htmlspecialchars($_POST['query']) : ''; ?>">
                              <button type="submit" class="btn btn-secondary btn-sm rounded-right-top-bottom"><i class="bi bi-search"></i></button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselheader" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselheader" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
  </div>

        
<div class="bg pb-3 ">
    <!-- categorie cards starts start -->
            <div class="container p-4 ">
             <div class="row mt-5">
              <!-- card 1 -->
               <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card1 tacocard"  style="background-image: url('../src/delicious-traditional-tacos-arrangement.jpg');">
                  <div class="card-body" >
                    <a href="plats.html#taco" style="color: white;"><h5 class="card-title card-body-title" >Taco (Mexicain)</h5></a>
                  </div>
                </div>
               </div>
              
              <!-- card 2 -->
               
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card1 tacocard"  style="background-image: url('../src/f.jpg');">
                  <div class="card-body">
                    <a href="plats.html#fastfood" style="color: white;"><h5 class="card-title card-body-title" >Fastfood</h5></a>
                  </div>
                </div>
               </div>
              
              <!-- card 3 -->
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card1 tacocard"  style="background-image: url('../src/sea2.jpg');">
                  <div class="card-body">
                    <a href="plats.html#seafood" style="color: white;"><h5 class="card-title card-body-title" >Sea Food</h5></a>
                  </div>
                </div>
               </div>
              <!-- card 4 -->
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card1 tacocard"  style="background-image: url('../src/breakfast4.jpg');">
                  <div class="card-body">
                    <a href="plats.html#breakfast" style="color: white;"><h5 class="card-title card-body-title" >Petit-déjeuner</h5></a>
                  </div>
                </div>
               </div>
                 <!-- card 5 -->
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card1 tacocard"  style="background-image: url('../src/salad1.jpg');">
                  <div class="card-body">
                    <a href="plats.html#salade" style="color: white;"><h5 class="card-title card-body-title" >Salades</h5></a>
                  </div>
                </div>
               </div>
                <!-- card 5 -->
              <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="card card1 tacocard"  style="background-image: url('../src/boisson.jpg');">
                  <div class="card-body">
                    <a href="plats.html#boissons" style="color: white;"><h5 class="card-title card-body-title" >Boissons</h5></a>
                  </div>
                </div>
               </div>
             </div>
            </div>      
<!-- adding categorie cards -->
       <div class="container">
        <div class="row  mt-3  align-items-center" >
          <div class="col">
            <h1 class="fw-bold display-6 ">Categories description</h1>
          </div>
        </div>
      </div>

      <hr>
    <div class="container mb-5 pb-3 ">
      <div class="row ">
       <!-- card 1 -->
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
           <div class=" menu1-item">
            <img src="../src/delicious-traditional-tacos-arrangement.jpg"  class="card-img-top " alt="image">
           </div>
            <div class="card-body" >
              <h4>Food name</h4>  
              <p class="card-text">Lorem ipsuit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       
       <!-- card 2 -->

       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card  border-0 p-0" >
          <div class=" menu1-item">
            <img src="../src/f.jpg"  class="card-img-top " alt="image">
           </div>
          <div class="card-body" >
            <h4>Food name</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consecoluptatem off repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>

           <!-- card 3 -->
           <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card border-0 p-0" >
              <div class=" menu1-item">
                <img src="../src/breakfast3.jpg"  class="card-img-top " alt="image">
               </div>
              <div class="card-body" >
                <h4>Food name</h4>  
                <p class="card-text">Lorem ipsum dolor sit amet consec ta laborum! Autem?</p>
              </div>
          </div>
          </div>
     
      </div>
     </div>

  <div class="parallax">
    <div class="container d-flex justify-content-center align-items-center"> 
      <div class="col-lg-6 col-sm-12"> 
          <div class="menu1 rounded-3 shadow-lg text-center text-white"> 
              <h1 class="fs-2 fw-bold m-4">Trouvez Votre Plat Préféré<br>Aujourd'hui !</h1> 
              <a href="plats.php"><button class="btn btn-lg btn-danger">Explorer le menu</button> </a>
          </div> 
        </div> 
      </div>
  </div>
     <div class="container p-1 mt-5" >
      <div class="row">
           <h1 class=" fw-bold">
            Nos plats
           </h1>
      </div>
   </div> 

     <hr>
     <div class="container-fluid position-relative mb-5 pb-3  ">
      <div class="owl-carousel owl-theme carousel-three">
          <div class="item">
            <div class="card menu1-item border-0 p-0 " >
              <img src="../src/f.jpg" class="accueilslideshow" style="height: 200px;" class="card-img-top " alt="image">
              <div class="card-body" >
                    </div>
                </div>
                </div>
                <div class="item">
                <div class="card menu1-item border-0 p-0" >
                  <img src="../src/pizza.jpg" class="accueilslideshow" style="height: 200px;" class="card-img-top " alt="image">
                  <div class="card-body" >
                  </div>
                </div>
                </div>
                <div class="item">
                  <div class="card menu1-item border-0 p-0" >
                    <img src="../src/f.jpg" class="accueilslideshow" style="height: 200px;" class="card-img-top " alt="image">
                    <div class="card-body" >
                    </div>
                </div>
                </div>   
                <div class="item">
                  <div class="card menu1-item border-0 p-0" >
                  <img src="../src/sea3.jpg" class="accueilslideshow" style="height: 200px;" class="card-img-top " alt="image">
                  <div class="card-body" >
                  </div>
                </div>
                </div>
                <div class="item">
                  <div class="card menu1-item border-0 p-0" >
                    <img src="../src/mexican-tacos-with-beef-tomato-sauce-salsa.jpg" class="accueilslideshow" style="height: 200px;" class="card-img-top " alt="image">
                    <div class="card-body" >
                    </div>
                </div>
                </div>
                <div class="item">
                  <div class="card menu1-item border-0 p-0" >
                    <img src="../src/breakfast4.jpg" class="accueilslideshow" style="height: 200px;" class="card-img-top " alt="image">
                    <div class="card-body" >
                    </div>
                </div>
                </div>
                <!-- Repeat for more items -->
          </div>
      </div>


          
       <hr>
       <div class="container p-1" >
        <div class="row">
            <h1 class=" fw-bold">
              Vos avis
            </h1>
            </div>
        </div> 

         <div class="container">
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
      <div class="container my-4">
        <div class="row ">
          <div class="col-lg-12 col-md-6 contact-form-style py-3">
          <?php include 'contactform.php'?>
          </div>
        </div>
      </div>
    </div>

            <!-- footer  -->
        <?php include 'footer.php'?>



