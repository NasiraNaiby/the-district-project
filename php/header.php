<!DOCTYPE html>
<html lang="en" >
    <head>
      <title><?php echo $my_title; ?></title>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="../CSS/style.css">

<!--  /home/nasira/Documents/the-district-project/CSS/style.css  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awePrix/6.0.0-beta3/css/all.min.css" >
        <script src="https://kit.fontawePrix.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      </head>
    <body class="parallax">
<div class="sticky-top myheader">
<div class="container-fluid headerbar bg-dark p-0 sticky-top">
  <div class="container d-flex justify-content-between align-items-center py-1">
    <div>
      <a href="#" class="mx-2" style="text-decoration: none;">
        <i class="bi bi-facebook" style="font-size: 15px; color: #3b5998; padding: 0%;"></i>
      </a>
      <a href="#" class="mx-2" style="text-decoration: none;">
        <i class="bi bi-twitter" style="font-size: 15px; color: #00acee; padding: 0%;"></i>
      </a>
      <a href="#" class="mx-2" style="text-decoration: none;">
        <i class="bi bi-instagram" style="font-size: 15px; color: #C13584; padding: 0%;"></i>
      </a>
      <a href="#" class="mx-2" style="text-decoration: none;">
        <i class="bi bi-linkedin" style="font-size: 15px; color: #0e76a8; padding: 0%;"></i>
      </a>
    </div>
    <div class="position-relative d-flex align-items-center">
      <a href="#" data-bs-toggle="offcanvas" data-bs-target="#demo"><img src="../src/carts.png" style="padding: 0%; height: 30px; width: 30px;" alt="cart"></a>
      <span id="cart-count" class="badge bg-danger position-absolute top-0 start-50 translate-middle me-3 mt-2" style="left: 50% !important;">0</span>
      
      <!-- Sign-in icon -->
      <a href="../clients/index.php" class="ms-4" style="text-decoration: none;">
        <i class="bi bi-person-circle" style=" font-size: 20px;color: #ffffff;"></i>
      </a>
    </div>
  </div>
</div>

<!-- navbar starts -->
<nav class="container navbar navbar-expand-lg navbar-light rounded-5 sticky-top" id="CustomNavbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="../src/logo_transparent.png" id="logo" alt="image1" style="width: 70px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item ms-5">
      <a class="nav-link" href="../accueil.php" style="color: white;">Accueil</a>
      </li>
      <li class="nav-item ms-5">
      <a class="nav-link" href="../php/catégorie.php" style="color: white;">Catégorie</a>
      </li>
      <li class="nav-item ms-5">
      <a class="nav-link" href="../php/plats.php" style="color: white;">Plats</a>
      </li>
      <li class="nav-item ms-5">
      <a class="nav-link" href="../php/contact.php" style="color: white;">Contact</a>
      </li>
  </ul>
    </div>
  </div>
</nav>
</div>