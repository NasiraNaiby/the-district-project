<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user_name = isset($_SESSION['email']) ? $_SESSION['email'] : null;
$display_name = $user_name ? substr($user_name, 0, 6) : '';
$my_title = $display_name ?: 'Default Title'; // Fallback title if user_name is not set
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $my_title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../CSS/css.css">
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
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#cart">
                    <img src="../src/carts.png" style="padding: 0%; height: 30px; width: 30px;" alt="cart">
                </a>
                <span id="cart-count" class="badge bg-danger position-absolute top-0 start-50 translate-middle me-3 mt-2" style="left: 30% !important;">0</span>
                
                <?php if ($display_name): ?>
                    <div class="dropdown ms-4">
                        <a href="#" class="dropdown-toggle" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                            <?php echo htmlspecialchars($display_name); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li class="d-flex justify-content-center py-2">
                                <img src="../src/userimage/district.png" alt="User Image" class="img-thumbnail rounded-circle" style="width: 50px; height: 50px;">
                            </li>
                            <li><a class="dropdown-item text-center"><?php echo htmlspecialchars($display_name); ?></a></li>
                            <li><a  href="../clients/clients.php"    class="dropdown-item text-center">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="/clients/index.php" class="ms-4" style="text-decoration: none;">
                        <i class="bi bi-person-circle" style="font-size: 20px; color: #ffffff;"></i>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Navbar starts -->
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
</body>
</html>
