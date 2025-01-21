<?php
session_start();
include '../admin/connection.php';

// Check if a session already exists before starting one
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['client'])) {
    header("Location: index.php");
    exit();
}

$user_name = $_SESSION['email'];

include 'header.php';
?>
<div class="container header">
    <div class="header-text mt-5 pt-4">
        <h1 class="fw-bold mt-5 pt-5 text-white">
            Votre Compte
        </h1>
    </div>
</div>
<section class="section-client">
<div class="container  my-5 mt-3 ">
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-3 ">
    <div class="col">
            <a href="#" id="editclientProfile" >
            <div class="card h-100 client-card">
                <div class="card-body text-center">
                    <i class="fas fa-address-card card-icon"></i>
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
                    <i class="bi bi-box-seam"></i>
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

<!--edit section   -->

<section class="edit-section">
<div class="container">
<div class="col-md-10">
        <div id="client-section">
            <?php
            if (isset($_GET['clid'])) {
                $id = $_GET['clid'];
                $stmt = $pdo->prepare("SELECT * FROM client WHERE clid = ?");
                $stmt->execute([$id]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    $clitype = $user['clitype'];
                    $Nom = $user['Nom'];
                    $prenom = $user['prenom'];
                    $addresse = $user['addresse'];
                    $codePostal = $user['cp'];
                    $ville = $user['ville'];
                    $tel = $user['tel'];
                    $mail = $user['mail'];
                } else {
                    echo "User not found.";
                    exit();
                }
            }
            ?>

<form id="clientProfile" method="POST" action="action.php">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="clid" value="<?php echo $id; ?>">
    
    <div class="row mt-3">
        <div class="form-group col-md-6">
            <label for="clitype">User Type:</label>
            <select class="form-control" id="clitype" name="clitype">
                <option value="admin" <?php if ($clitype == "admin") echo "selected"; ?>>Administrateur</option>
                <option value="gestionnaire" <?php if ($clitype == "gestionnaire") echo "selected"; ?>>Gestionnaire</option>
                <option value="approvisionneur" <?php if ($clitype == "approvisionneur") echo "selected"; ?>>Approvisionneur</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="Nom" value="<?php echo $Nom; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="addresse">Addresse:</label>
            <input type="text" class="form-control" id="addresse" name="addresse" value="<?php echo $addresse; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="codePostal">Code Postal:</label>
            <input type="text" class="form-control" id="codePostal" name="codePostal" value="<?php echo $codePostal; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="ville">Ville:</label>
            <input type="text" class="form-control" id="ville" name="ville" value="<?php echo $ville; ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="tel">Tel:</label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $tel; ?>">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="mail">Email:</label>
            <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $mail; ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
</div>
</div>
</section>

<?php include 'footer.php'?>
