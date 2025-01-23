<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) { 
    header("Location: index.php"); 
    exit(); 
}
$user_name = $_SESSION['username']; 
?>
<div class="wrapper ">
    <div class="main">
        <div class="row">
            <div class="col-md-2">
                <!-- sidebar -->
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-9 mt-5">
                <!--Start of Plats section  -->
                <div id="plats-section ">
                    <h1>Modifier les données des plats</h1>
                    <?php
                        // Fetch the logged-in client data
                        $stmt = $pdo->prepare("SELECT * FROM plat WHERE platId = ?");
                        $stmt->execute([$client_email]);
                        $client = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($client) {
                            $clientId = $client['platId'];
                            $platName = $client['platName'];
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
                    <form id="addPlatForm" method="POST" action="../phpscripts/adminaction.php" enctype="multipart/form-data" >
                    <input type="hidden" name="action" value="insert">
                        <!-- Other input rows -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="platName">Nom du plat:</label>
                                <input type="text" class="form-control" id="platName" name="platName" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="platDescription">Plat Description:</label>
                                <input type="text" class="form-control" id="platDescription" name="platDescription" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="platPrice">Plat Price:</label>
                                <input type="text" class="form-control" id="platPrice" name="platPrice" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="catId">Categorie:</label>
                                <select class="form-control" id="catId" name="catId">
                                    <option value="1">Tacos</option>
                                    <option value="2">Burger</option>
                                    <option value="3">Pizza</option>
                                    <option value="4">Petit déjeuner</option>
                                    <option value="5">Seafood</option>
                                    <option value="6">Salad</option>
                                    <option value="7">Boissons</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="photo">Plat Photo:</label>
                                <input type="file" class="form-control" id="photo" name="photo" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div> 
                <!-- End of plats-section -->

                <!--Start of categorie section  -->
                <div id="categorie-section">            
                    <form class="mb-5" id="addcategorieForm" method="POST" action="../phpscripts/adminaction.php" enctype="multipart/form-data" style="display: none;">
                    <input type="hidden" name="action" value="catinsert">   
                        <input type="hidden" name="catId" >
                        <!-- Other input rows -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="catName">Nom de la catégorie:</label>
                                <input type="text" class="form-control" id="catName" name="catName" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="catDescription">Description de la catégorie:</label>
                                <input type="text" class="form-control" id="catDescription" name="catDescription" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
            </div> 
            <!-- End of categorie-section -->        

            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
