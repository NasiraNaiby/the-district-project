<nav class="container navbar navbar-expand-lg navbar-light rounded-5 fixed-top" id="CustomNavbar">
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
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'accueil.php'){ echo 'active'; } ?>" href="accueil.php" style="color: white;"  >Accueil</a>
                  </li>
                  <li class="nav-item ms-5">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'catégorie.php'){ echo 'active'; } ?>" href="catégorie.php" style="color: white;" >Catégorie</a>
                  </li>
                  <li class="nav-item ms-5">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'plats.php'){ echo 'active'; } ?>" href="plats.php" style="color: white;" >Plats</a>
                  </li>
                  <li class="nav-item ms-5">
                    <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){ echo 'active'; } ?>" href="contact.php" style="color: white;" >Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>