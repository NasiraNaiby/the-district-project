<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plats</title>
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
         <!-- navbar starts -->
         <nav class="container navbar navbar-expand-lg navbar-light rounded-5 sticky-top" id="CustomNavbar">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../src/logo_transparent.png" id="logo" alt="Logo" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item ms-5">
                  <a class="nav-link" href="accueil.html">Accueil</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="catégorie.html">Catégorie</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="#" style="text-decoration: underline;">Plats</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
              <div class="d-flex ms-auto align-items-center me-4">
                <div class="cart-icon-container position-relative">
                  <a href="#" data-bs-toggle="offcanvas" data-bs-target="#demo" class="cart-icon">
                    <i class="bi bi-cart" style="font-size: 2rem; color: #ffc107;"></i>
                  </a>
                  <span id="cart-count" class="badge bg-danger position-absolute top-0 start-100 js-cart-quantity" style="left: 34% !important;">0</span>
                </div>
              </div>
            </div>
          </div>
        </nav>
           <!-- navbar ends -->
        
           <!-- header titlle  -->
            
            <div class="container">
              <div class="row  p-5 justify-content-center align-items-center text-white">
                  <h1 class="fw-bold display-3 text-center">Tous Les Plats</h1>
                </div>
            </div>
            <div class="offcanvas offcanvas-end test" id="demo">
              <div class="offcanvas-header">
                <h1 class="offcanvas-title">Votre orders</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
              </div>
              <div class="offcanvas-body">
                <div class="cart-item ">
                  <div class="d-flex justify-content-between">
                      <div>
                          <h4 class="mt-2 mb-2">Breakfast</h4>
                          <img src="../src/delicious-traditional-tacos-arrangement.jpg" class="order-image" alt="order photo">
                          <div class="cart-controls mt-2 d-flex">
                              <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-dash"></i></button>
                              <span class="mx-2">2</span>
                              <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-plus"></i></button>
                              <button class="btn btn-outline-danger btn-sm ms-3"><i class="bi bi-trash"></i></button>
                          </div>
                      </div>
                      <div class="text-end">
                          <h5>$10.50 each</h5>
                      </div>
                  </div>
              </div>
              <div class="cart-item ">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="mt-2 mb-2">Breakfast</h4>
                        <img src="../src/delicious-traditional-tacos-arrangement.jpg" class="order-image" alt="order photo">
                        <div class="cart-controls mt-2 d-flex">
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-dash"></i></button>
                            <span class="mx-2">2</span>
                            <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-plus"></i></button>
                            <button class="btn btn-outline-danger btn-sm ms-3"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                    <div class="text-end">
                        <h5>$10.50 each</h5>
                    </div>
                </div>
            </div>
            <div class="mt-4">
              <h5>Total: $21.00</h5>
            <button class="btn btn-warning mt-3 mb-3" onclick="ordersubmit()">Commander</button>
            </div>
          </div>
        </div>
          
            <!-- start of platA -->
     <div class="bg pb-3">
             <div class="container p-1" id="taco">
                <div class="row mt-5">
                     <h1 class=" fw-bold">
                        Taco <span class="text-warning">(Mexicain)</span> 
                     </h1>
                </div>
             </div> 
              <!-- card 1 --> 
            <div class="container mb-5 pb-3 ">
              <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-12">
                  <div class="card border-0 p-0"  >
                    <div class="menu1-item">
                      <img src="../src/traditional-mexican-tacos-with-meat-vegetables-isolated-white-background.jpg" class="card-img-categori " alt="image">
                    </div>
                  <div class="card-body" >
                      <span> Mexican taco</span><p class="card-text">10</p>
                      <button class="btn-add-to-cart add-to-cart " >Ajouter</button>
                    </div>
                  </div>
                </div>
               <!-- card 2 --> 
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card border-0 p-0"  >
                  <div class="menu1-item">
                    <img src="../src/mexican-tacos-with-beef-tomato-sauce-salsa.jpg" class="card-img-categori " alt="image">
                  </div>
                <div class="card-body" >
                    <span> Mexican taco</span><p class="card-text">10</p>
                    <button class="btn-add-to-cart add-to-cart " >Ajouter</button>
                  </div>
                </div>
                </div>
             </div>
          </div>
              <!-- start of platB -->
               <div class="container  p-1" id="fastfood">
                <div class="row">
                     <h1 class=" fw-bold">
                      Fast<span class="text-warning">Food</span> 
                     </h1>
                </div>
            </div>
            <div class="container position-relative mb-5 pb-3  ">
              <div class="owl-carousel owl-theme carousel-one">
                  <div class="item">
                    <div class="card  border-0 p-0" >
                      <div class="menu1-item">
                        <img src="../src/f.jpg" class="card-img-categori " alt="image">
                      </div>
                      <div class="card-body" >
                          <p class="card-text">Prix</p>
                          <button class="btn-add-to-cart add-to-cart "    >Ajouter</button> 
                       
                      </div>
                  </div>
                  </div>
                  <div class="item">
                    <div class="card  border-0 p-0" >
                      <div class="menu1-item">
                        <img src="../src/buffalo-chicken.webp" class="card-img-categori " alt="image">
                      </div>
                      <div class="card-body" >
                          <p class="card-text">Prix</p> 
                          <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
                      </div>
                  </div>
                  </div>
                  <div class="item">
                    <div class="card  border-0 p-0" >
                      <div class="menu1-item">
                        <img src="../src/pizza.jpg" class="card-img-categori " alt="imagee">
                      </div>
                      <div class="card-body" >
                         <p class="card-text">Prix</p> 
                         <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
                      </div>
                  </div>
                  </div>
                  <div class="item">
                    <div class="card  border-0 p-0 " >
                     <div class="menu1-item">
                        <img src="../src/pizza-salmon.png" class="card-img-categori " alt="image">
                      </div>
                      <div class="card-body" >
                          <p class="card-text">Prix</p> 
                          <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
                      </div>
                  </div>
                  </div>
                  <!-- Repeat for more items -->
              </div>
          </div>
           
          <!-- start of platC -->
          <div class="container  p-1" id="seafood">
            <div class="row">
                 <h1 class=" fw-bold">
                  Sea <span class="text-warning">Food</span> 
                 </h1>
            </div>
         </div>
         <div class="container position-relative mb-5 pb-3  ">
          <div class="owl-carousel owl-theme carousel-one">
              <div class="item">
                <div class="card  border-0 p-0" >
                  <div class="menu1-item">
                    <img src="../src/sea1.webp" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">Prix</p>
                      <button class="btn-add-to-cart add-to-cart "  >Ajouter</button> 
                   
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0 p-0" >
                  <div class="menu1-item">
                    <img src="../src/sea2.jpg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">Prix</p> 
                      <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0 p-0" >
                  <div class="menu1-item">
                    <img src="../src/sea3.jpg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                     <p class="card-text">Prix</p> 
                     <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0 p-0 " >
                  <div class="menu1-item">
                    <img src="../src/sea4.jpg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">Prix</p> 
                      <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
                  </div>
              </div>
              </div>
              <!-- Repeat for more items -->
          </div>
      </div>
      
       <!-- start of platC -->
       <div class="container  p-1" id="breakfast">
        <div class="row">
             <h1 class=" fw-bold">
              Petit-<span class="text-warning">déjeuner</span> 
             </h1>
        </div>
     </div>
     <div class="container position-relative mb-5 pb-3  ">
      <div class="owl-carousel owl-theme carousel-one">
          <div class="item">
            <div class="card  border-0 p-0" >
              <div class="menu1-item">
                <img src="../src/breakfast1.jpg" class="card-img-categori " alt="image">
              </div>
              <div class="card-body" >
                  <p class="card-text">Prix</p>
                  <button class="btn-add-to-cart add-to-cart ">Ajouter</button>  
              </div>
          </div>
          </div>
          <div class="item">
            <div class="card  border-0 p-0" >
              <div class="menu1-item">
                <img src="../src/breakfast2.jpg" class="card-img-categori " alt="image">
              </div>
              <div class="card-body" >
                  <p class="card-text">Prix</p> 
                  <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
              </div>
          </div>
          </div>
          <div class="item">
            <div class="card  border-0 p-0" >
              <div class="menu1-item">
                <img src="../src/breakfast3.jpg" class="card-img-categori " alt="image">
              </div>
              <div class="card-body" >
                 <p class="card-text">Prix</p> 
                 <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
              </div>
          </div>
          </div>
          <div class="item">
            <div class="card  border-0 p-0 " >
              <div class="menu1-item">
                <img src="../src/breakfast4.jpg" class="card-img-categori " alt="image">
              </div>
              <div class="card-body" >
                  <p class="card-text">Prix</p> 
                  <button class="btn-add-to-cart add-to-cart "  >Ajouter</button>
              </div>
          </div>
          </div>
          <!-- Repeat for more items -->
      </div>
  </div>
         <!-- start of salads -->
            <div class="container p-1" id="salade">
              <div class="row">
                  <h1 class=" fw-bold">
                      Nos <span class="text-warning">Salades</span> 
                  </h1>
              </div>
          </div> 
          <div class="container mb-5 pb-3 ">
            <div class="row ">
              <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card border-0 p-0"  >
                  <div class="menu1-item">
                    <img src="../src/salad2.jpg" class="card-img-categori " alt="image">
                  </div>
                <div class="card-body" >
                    <span> Mexican taco</span><p class="card-text">10</p>
                    <button class="btn-add-to-cart add-to-cart " >Ajouter</button>
                  </div>
                </div>
              </div>
             <!-- card 2 --> 
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card  border-0 p-0"  >
                <div class="menu1-item">
                  <img src="../src/salad1.jpg" class="card-img-categori " alt="image">
                </div>
              <div class="card-body" >
                  <span> Mexican taco</span><p class="card-text">10</p>
                  <button class="btn-add-to-cart add-to-cart " >Ajouter</button>
                </div>
              </div>
              </div>
           </div>
        </div>
          <!-- start of Boissons --> 
          <div class="container p-1" >
            <div class="row">
                 <h1 class=" fw-bold " id="boissons">
                    Boissons<i class="bi bi-cup-straw" style="font-size: 3rem; color: #ffc107;"></i>  
                 </h1>
            </div>
         </div>
         <div class="container  position-relative mb-5 ">
          <div class="owl-carousel owl-theme carousel-two">
              <div class="item">
                <div class="card  border-0  p-0 " >
                  <div class="menu1-item">
                    <img src="../src/eee.jpeg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">prix</p> 
                      <button class="btn-add-to-cart add-to-cart " >Ajouter</button>
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0  p-0 " >
                  <div class="menu1-item">
                    <img src="../src/eeeee.jpeg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">prix</p> 
                      <button class="btn-add-to-cart add-to-cart ">Ajouter</button>
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0  p-0 " >
                  <div class="menu1-item">
                    <img src="../src/ener.jpeg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">prix</p> 
                      <button class="btn-add-to-cart add-to-cart ">Ajouter</button>
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0  p-0 " >
                  <div class="menu1-item">
                    <img src="../src/jusorange.jpeg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">prix</p>
                      <button class="btn-add-to-cart add-to-cart ">Ajouter</button> 
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0  p-0 " >
                  <div class="menu1-item">
                    <img src="../src/eau.jpg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body" >
                      <p class="card-text">prix</p> 
                      <button class="btn-add-to-cart add-to-cart ">Ajouter</button>
                  </div>
              </div>
              </div>
              <!--  more items -->
          </div>
      </div>
     </div>   
            
            <!-- footer start -->
            <footer class="footer text-white text-center text-lg-start " >
              <div class="container p-4">
                <div class="row justify-content-center">
                  <div class="col-12 d-flex justify-content-center">
                    <a href="#" class="mx-4">
                      <i class="bi bi-facebook" style="font-size: 2rem; color: #3b5998;"></i>
                    </a>
                    <a href="#" class="mx-4">
                      <i class="bi bi-twitter" style="font-size: 2rem; color: #00acee;"></i>
                    </a>
                    <a href="#" class="mx-4">
                      <i class="bi bi-instagram" style="font-size: 2rem; color: #C13584;"></i>
                    </a>
                    <a href="#" class="mx-4">
                      <i class="bi bi-linkedin" style="font-size: 2rem; color: #0e76a8;"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <p class="text-center text-white">© 2024 District Restaurant</p>
              </div>
            </footer>
        
            <script>
              const cart1 = [];
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="../JS/javascript.js"></script>  
        
</body>
</html>