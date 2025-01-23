<?php 
session_start();
include '../admin/connection.php';

// Check if session is set for the client
if (isset($_SESSION['client'])) {
    $client_email = $_SESSION['email'];
} else {
    $client_email = "guest";
}

include '../header.php';
$my_title = "Plats"; 
?>
         <!-- navbar starts -->
       
           <!-- navbar ends -->
            <div class="header">
              <div class="header-text ">
                <h1 class="text-center fw-bold display-1 m-5 p-5 text-white ">
                  Tous les plats 
                </h1>
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
                    <button class="btn-add-to-cart add-to-cart" >Ajouter</button>
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
                          <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form> 
                       
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
                          <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                         <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                          <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form> 
                   
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                     <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                  <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                    </form>  
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
                  <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                    </form>
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
                 <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                  <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                    <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                  <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
                  </div>
              </div>
              </div>
              <div class="item">
                <div class="card  border-0  p-0 " >
                  <div class="menu1-item">
                    <img src="../src/jusorange.jpeg" class="card-img-categori " alt="image">
                  </div>
                  <div class="card-body">
                      <p class="card-text">prix</p>
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form> 
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
                      <form method="post">
                      <button class="btn-add-to-cart add-to-cart" type="submit">Ajouter</button>
                      </form>
                  </div>
              </div>
              </div>
              <!--  more items -->
          </div>
      </div>
     </div>   
<?php include '../footer.php'?>
       