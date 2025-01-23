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
$my_title = "Catégorie"; 
?>
      <!-- navbar starts -->
           <!-- navbar ends -->
            <!-- header starts -->
            <div class="header">
              <!-- <img src="../src/bg2.jpeg" alt="Background Image"> -->
              <div class="header-text">
                <h1 class="text-center fw-bold display-1 mt-5 p-5 text-white">
                  Vos <span class="text-warning">Choix</span> 
              </h1>
              </div>
            </div>
           
           
  <div class="bg pb-3" >
       <!-- adding categorie cards -->
       <div class="container">
        <div class="row  mt-5 pt-5 pb-3 align-items-center" >
            <h1 class="fw-bold display-6 ">Categories description</h1>
        </div>
      </div>
<!-- <div class="container"> -->
 <div class="container  menu-container">
 <div class="nav-bg-bar">
            <ul class="nav nav-tabs d-flex justify-content-between">
                <li class="nav-item custom-items">
                    <a class="nav-link active" href="#taco" data-bs-toggle="tab">Tacos</a>
                </li>
                <li class="nav-item custom-items">
                    <a class="nav-link custom-liks" href="#burger" data-bs-toggle="tab">Burgers</a>
                </li>
                <li class="nav-item custom-items">
                    <a class="nav-link custom-liks" href="#pizza" data-bs-toggle="tab">Pizza</a>
                </li>
                <li class="nav-item custom-items">
                    <a class="nav-link custom-liks" href="#pd" data-bs-toggle="tab">Petit-déjeuner</a>
                </li>
                <li class="nav-item custom-items">
                    <a class="nav-link custom-liks" href="#sea" data-bs-toggle="tab">Sea foods</a>
                </li>
                <li class="nav-item custom-items">
                    <a class="nav-link custom-liks" href="#salad" data-bs-toggle="tab">Salads</a>
                </li>
                <li class="nav-item custom-items">
                    <a class="nav-link custom-liks" href="#boisson" data-bs-toggle="tab">Boissons</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
        <div class="container mb-5 mt-5 pb-3 tab-pane fade show active " id="taco">
        <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/delicious-traditional-tacos-arrangement.jpg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Taco Mexicain</h4>  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/traditional-mexican-tacos-with-meat-vegetables-isolated-white-background.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Taco Traditional</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>
        <!-- burger tab -->
        <div class="container mb-5 mt-5 pb-3 tab-pane fade" id="burger">
        <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/f.jpg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Cheese burger</h4>  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/buffalo-chicken.webp" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Chicken Burger</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
    
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card  border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/felafel.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Falafel Burger</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>

     <!-- tab pizza -->

     <div class="container mb-5 mt-5 pb-3 tab-pane fade" id="pizza">
      <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/pizza.jpg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Pizza</h4>  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/menu-pizza.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Greek Pizza</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/pizza-salmon.png" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Italian Pizza</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card  border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/pizza.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Chicken Pizza</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card  border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/breakfast2.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Pizza Fromage</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>
            <!-- tab petit déjeuner -->
     <div class="container mb-5 mt-5 pb-3 tab-pane fade" id="pd">
      <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/breakfast4.jpg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Notre petit-déjeuner spécial</h4>  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/breakfast2.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Pancakes</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/breakfast3.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Eggs</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/breakfast1.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Toasts et cofé</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>

     <!-- tab sea food -->

     <div class="container mb-5 mt-5 pb-3 tab-pane fade" id="sea">
      <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/sea2.jpg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Oyesters</h4>  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/sea3.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Shrimps</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/sea4.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Salmon</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card  border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/mussels.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Mussels</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>

     <!-- tab salad -->
     <div class="container mb-5 mt-5 pb-3 tab-pane fade" id="salad">
      <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/salad2.jpg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Egg salad</h4>  
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/salad1.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Caesar salad</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/saladshirazi.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Salad sherazi</h4>  
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique harum nostrum tempora eos non velit illum voluptatem officia, sit cupiditate cumque mollitia fugit quis praesentium repudiandae consectetur soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>

     <!-- tab Boissons -->
     <div class="container mb-5 mt-5 pb-3 tab-pane fade" id="boisson">
      <div class="row ">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/eee.jpeg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Energy Drinks</h4>  
              <p class="card-text">Lorem  Autem?</p>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card  border-0 p-0" >
            <div class="menu1-item">
            <img src="../src/eeeee.jpeg" class="card-img-categori " alt="image">
          </div>
            <div class="card-body" >
              <h4>Energy Drinks</h4>  
              <p class="card-text">Lorem ipsum dolor </p>
            </div>
        </div>
        </div>
       <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/cola.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Coca Cola</h4>  
            <p class="card-text">Lorem ipsum  soluta laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/jusorange.jpeg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Orange Jus</h4>  
            <p class="card-text">Lorem  laborum! Autem?</p>

          </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card  border-0 p-0" >
          <div class="menu1-item">
            <img src="../src/eau.jpg" class="card-img-categori " alt="image">
          </div>
          <div class="card-body" >
            <h4>Water</h4>  
            <p class="card-text">Lorem ipsum! Autem?</p>

          </div>
      </div>
      </div>
      </div>
     </div>
   
     </div>
    </div>
</div>         <!-- footer start -->
<?php include '../footer.php'?>
     


