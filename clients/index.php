<?php

require '../admin/connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input_email = $_POST['email'];
    $input_password = $_POST['password'];  

    // Fetch user data
    $stmt = $pdo->prepare("SELECT email, password FROM client WHERE email = :email");
    $stmt->bindParam(':email', $input_email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($input_password, $user['password'])) {
        $_SESSION['client'] = true;
        $_SESSION['email'] = $user['email'];
        header("Location: clients.php");
        exit();
    } else {
        header("Location: clients.php?error=invalid");
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
    <title>login</title>
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
              <p class="text-white mt-5 mb-2">Veuillez entrer votre identifiant et votre mot de passe!</p>
                <form method="post" action="index.php">
                <p class="small mb-2 pb-lg-2"><a id="show-register" class="text-white " href="#registerModal" data-bs-toggle="modal">Sign Up</a></p>
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
</section>

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="../clients/phpscript.php" enctype="multipart/form-data" onsubmit="return checkPasswords();">
          <input type="hidden" name="insert">
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" class="form-control" name="fullname">
            <label class="form-label">Nom et prénom</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" class="form-control" name="email">
            <label class="form-label">Email</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" class="form-control" name="password" id="password">
            <label class="form-label">Password</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" class="form-control" name="confirm_password" id="confirm_password">
            <label class="form-label">Confirm Mot de passe</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="file" class="form-control" name="photo">
            <label class="form-label">photo</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" class="form-control" name="addresse">
            <label class="form-label">Addresse</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" class="form-control" name="codePostal">
            <label class="form-label">Code Postal</label>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" class="form-control" name="tel">
            <label class="form-label">Telephone</label>
          </div>
          <button class="btn btn-primary" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function checkPasswords() {
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;

    if (password !== confirm_password) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
