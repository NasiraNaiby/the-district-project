<?php
require 'connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];  

    // Fetch user data
    $stmt = $pdo->prepare("SELECT username, password FROM user WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $input_username);
    $stmt->bindParam(':password', $input_password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $user['username'];
        header("Location: adminpage.php");
        exit();
    } else {
        header("Location: index.php?error=invalid");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="../CSS/css.css">
    <title>Document</title>
</head>
<body>
<section class="vh-100 login-section" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg text-white gradient-custom-2 " style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white mb-5">Veuillez entrer votre identifiant et votre mot de passe!</p>
                <form method="post" action="index.php">
                        <div data-mdb-input-init class="form-outline form-white mb-4">
                            <input type="text" class="form-control form-control-lg" name="username">
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
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
