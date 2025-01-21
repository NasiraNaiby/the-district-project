<?php
require '../admin/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['login'])) {
        $input_email = $_POST['email'];
        $input_password = $_POST['password'];  

        // Fetch user data for login
        $stmt = $pdo->prepare("SELECT email, password FROM client WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $input_email);
        $stmt->bindParam(':password', $input_password);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $_SESSION['client'] = true;
            $_SESSION['email'] = $user['email'];
            header("Location: clients.php");
            exit();
        } else {
            header("Location: clients.php?error=invalid");
            exit();
        }
    } elseif (isset($_POST['register'])) {
        $register_email = $_POST['register_email'];
        $register_password = $_POST['register_password'];

        // Insert new user data for registration
        $register_stmt = $pdo->prepare("INSERT INTO client (email, password) VALUES (:email, :password)");
        $register_stmt->bindParam(':email', $register_email);
        $register_stmt->bindParam(':password', $register_password);
        $register_stmt->execute();
        header("Location: index.php?msg=registered");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin/css.css">
    <title>Login</title>
</head>
<body>
<section class="vh-100 login-section">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg text-white gradient-custom-2" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
              <div class="form-container">
                  <!-- Login Form -->
                  <div id="login-form">
                      <div class="mb-md-5 mt-md-4 pb-5">
                          <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                          <p class="text-white mt-5 mb-2">Veuillez entrer votre identifiant et votre mot de passe!</p>
                          <form method="post" action="index.php">
                              <input type="hidden" name="login">
                              <p class="small mb-2 pb-lg-2"><a id="show-register" class="text-white" href="#registerModal" data-bs-toggle="modal">Avoir un compte?</a></p>
                              <div data-mdb-input-init class="form-outline form-white mb-4">
                                  <input type="email" class="form-control form-control-lg" name="email">
                              </div>
                              <div data-mdb-input-init class="form-outline form-white mb-4">
                                  <input type="password" class="form-control form-control-lg" name="password">
                              </div>
                              <p class="small mb-5 pb-lg-2"><a class="text-white" href="#!">Mot de passe oublié?</a></p>
                              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="index.php">
          <input type="hidden" name="register">
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" class="form-control" name="register_email">
            <label class="form-label">Email</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" class="form-control" name="register_password">
            <label class="form-label">Password</label>
          </div>
          <button class="btn btn-primary" type="submit">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
