<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Accueil</title>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awePrix/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMzEmz5nHS3caZJ53qxR7Iq9D8lUP8dI4wYhoJ" crossorigin="anonymous">
        <!-- <script src="https://kit.fontawePrix.com/0218ac809d.js" crossorigin="anonymous"></script> -->
        <script src="https://kit.fontawePrix.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      </head>
    <body class="parallax">
     <div class="spinner-container">
      <div class="loader"></div>
     </div>
         <!-- navbar starts -->
         <header>
   
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
                  <div class="input-group justify-content-center mt-3">
                    <input type="text" class="form-control input-resize" placeholder="Recherché" id="search">
                  </div>
                </div>
              </div>
              <div class="carousel-item header-c-items">
                <img src="../src/bgnn.jpg" class="d-block w-100 c-image" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <h1 class="display-4">Bienvenue au District Restaurant</h1>
                  <div class="input-group justify-content-center mt-3">
                    <input type="text" class="form-control input-resize" placeholder="Recherché" id="search">
                  </div>
                </div>
              </div>
              <div class="carousel-item header-c-items">
                <img src="../src/bgnnn.jpg" class="d-block w-100 c-image" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <h1 class="display-4">Bienvenue au District Restaurant</h1>
                  <div class="input-group justify-content-center mt-3">
                    <input type="text" class="form-control input-resize" placeholder="Recherché" id="search">
                  </div>
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
        </header>

      <!-- The Search  Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Results</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <ul id="myUL" class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/burger.jpg" class="me-3 rounded float-start" alt="Burger" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Burger</a>
                            <p class="mb-0">Chicken burger with lettuce, tomato, and cheese.</p>
                        </div>
                      </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/pizza.jpg" class="me-3 rounded float-start" alt="Pizza" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Pizza</a>
                            <p class="mb-0">Delicious pizza with various toppings.</p>
                        </div>
                      </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/mexican-tacos-with-beef-tomato-sauce-salsa.jpg" class="me-3 rounded float-start" alt="Tacos" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Tacos</a>
                            <p class="mb-0">Tasty tacos with beef, cheese, and salsa.</p>
                        </div>
                      </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/traditional-mexican-tacos-with-meat-vegetables-isolated-white-background.jpg" class="me-3 rounded float-start" alt="Tacos" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Tacos</a>
                            <p class="mb-0">Spicy tacos with chicken, guacamole, and jalapeños.</p>
                        </div>
                      </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/sea1.webp" class="me-3 rounded float-start" alt="Poissons" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Poissons</a>
                            <p class="mb-0">Grilled fish with lemon and herbs.</p>
                        </div>
                      </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/sea3.jpg" class="me-3 rounded float-start" alt="Poissons" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Poissons</a>
                            <p class="mb-0">Fried fish with tartar sauce.</p>
                        </div>
                      </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="../src/salad1.jpg" class="me-3 rounded float-start" alt="Salades" style="width: 80px; height: 80px; object-fit: cover;">
                        <div>
                            <a href="#" class="h5 d-block">Salades</a>
                            <p class="mb-0">Fresh garden salad with vinaigrette.</p>
                        </div>
                      </li>
                </ul>
            </div>
    
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
    
            </div>
        </div>
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
              <a href="plats.html"><button class="btn btn-lg btn-danger">Explorer le menu</button> </a>
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
            <form id="contactForm">
              <!-- Name input -->
              <div class="mb-3">
                <!-- <label class="form-label" for="name">Nom et Prénom</label> -->
                <input class="form-control" id="name" type="text" placeholder="Nom et Prénom" required>
              </div>
              <!-- telephone input -->
              <div class="mb-3 d-flex">
                <!-- <label class="form-label" for="téléphone">Téléphone</label> -->
                <input class="form-control mx-1 " id="téléphone" type="number" placeholder="+33 xxxxxxxx" required>
              
              <!-- Email address input -->
                <input class="form-control mx-1 " id="emailAddress" type="email" placeholder="example@example.com" required>
              </div>
          
              <!-- Message input -->
              <div class="mb-3">
                <!-- <label class="form-label" for="message">Message</label> -->
                <textarea class="form-control" id="message"  placeholder="Message" style="height: 10rem;" required></textarea>
              </div>
          
              <!-- Form submit button -->
              <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-warning btn-lg px-5 text-white " type="submit">Envoyer un message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

            <!-- footer  -->

            <?php include 'footer.php'?>
            
      </body>
</html>



