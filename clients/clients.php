<?php
session_start();
include '../admin/connection.php';

//Check if session already exists before starting one
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['client'])) {
    header("Location: index.php");
    exit();
}

$client_email = $_SESSION['email'];

include '../header.php';
?>
<div class="container header">
    <div class="header-text mt-5 pt-4">
        <h1 class="fw-bold mt-5 pt-5 text-white">
            Votre Compte
        </h1>
    </div>
</div>
<section class="section-client">
<div class="container my-5 mt-3">
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3">
        <div class="col">
            <a href="#" id="editclientProfile">
                <div class="card h-100 client-card">
                    <div class="card-body text-center">
                    <i class="fas fa-user card-icon"></i>
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text">Modifier les détails de votre compte</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100 client-card">
                    <div class="card-body text-center">
                    <i class="fas fa-box card-icon"></i>
                        <h5 class="card-title">Vos commandes</h5>
                        <p class="card-text">Afficher toutes les commandes passées</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100 client-card">
                    <div class="card-body text-center">
                        <i class="fas fa-address-card card-icon"></i>
                        <h5 class="card-title">Adresses</h5>
                        <p class="card-text">Modifier les adresses et les préférences de livraison des commandes et des cadeaux</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#">
                <div class="card h-100 client-card">
                    <div class="card-body text-center">
                        <i class="fas fa-phone card-icon"></i>
                        <h5 class="card-title">Nous contacter</h5>
                        <p class="card-text">Contacter notre service client par téléphone ou par mail</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
</section>

<!--edit section-->
<div class="d-flex flex-column min-vh-100">
<section class="edit-section">
<div class="container">
<div class="col-md-10">
    <div id="client-section">
        <?php
        // Fetch the logged-in client data
        $stmt = $pdo->prepare("SELECT * FROM client WHERE email = ?");
        $stmt->execute([$client_email]);
        $client = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($client) {
            $clientId = $client['clId'];
            $fullname = $client['fullName'];
            $email = $client['email'];
            $password = $client['password'];
            $photo = $client['photo'];
            $addresse = $client['addresse'];
            $codePostal = $client['codePostal'];
            $tel = $client['tel'];
        } else {
            echo "User not found.";
            exit();
        }
        ?>

        <form id="clientProfile" method="POST" action="../phpscripts/clientaction.php" style="display: none;" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="clId" value="<?php echo $clientId; ?>">
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo htmlspecialchars($fullname); ?>">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                </div>
                <div class="form-group col-md-6" style="position: relative;">
                    <input type="file" class="form-control" id="photo" name="photo" value="<?php echo htmlspecialchars($photo ? $photo : ''); ?>">
                    <span class="text-white" style="text-decoration-underline"><?php echo htmlspecialchars($photo ? $photo : ''); ?></span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="addresse" name="addresse" value="<?php echo htmlspecialchars($addresse); ?>">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="codePostal" name="codePostal" value="<?php echo htmlspecialchars($codePostal); ?>">
                </div>
                
            </div>
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="tel" name="tel" value="<?php echo htmlspecialchars($tel); ?>">
                </div>
                
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</div>
</section>

<?php include '../footer.php'; ?>