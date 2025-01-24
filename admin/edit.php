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
    <div id="plats-section">
        <h1>Modifier les données les data</h1>
        <?php
        // Check if platId is passed in the URL
        if (isset($_GET['platId'])) {
            $platId = $_GET['platId']; // Get platId from the URL

            // Prepare the query to fetch the plat data by platId
            $stmt = $pdo->prepare("SELECT * FROM plats WHERE platId = ?");
            $stmt->execute([$platId]);
            $plat = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($plat) {
                // Fetch plat details
                $platId = $plat['platId'];
                $platName = $plat['platName'];
                $platDescription = $plat['platDescription'];
                $platPrice = $plat['platPrice'];
                $catId = $plat['catId'];
                $platPhoto = $plat['platPhoto'];
                ?>

                <!-- Show the plat edit form -->
                <form id="" method="POST" action="../phpscripts/adminaction.php" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="platId" value="<?php echo $platId; ?>">
                    <!-- Plat input rows -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="platName">Nom du plat:</label>
                            <input type="text" class="form-control" id="platName" name="platName" value="<?php echo htmlspecialchars($platName); ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="platDescription">Plat Description:</label>
                            <input type="text" class="form-control" id="platDescription" name="platDescription" value="<?php echo htmlspecialchars($platDescription); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="platPrice">Plat Price:</label>
                            <input type="text" class="form-control" id="platPrice" name="platPrice" value="<?php echo htmlspecialchars($platPrice); ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="catId">Categorie:</label>
                            <select class="form-control" id="catId" name="catId">
                                <option value="1" <?php if ($catId == "1") echo "selected"; ?>>Tacos</option>
                                <option value="2" <?php if ($catId == "2") echo "selected"; ?>>Burger</option>
                                <option value="3" <?php if ($catId == "3") echo "selected"; ?>>Pizza</option>
                                <option value="4" <?php if ($catId == "4") echo "selected"; ?>>Petit déjeuner</option>
                                <option value="5" <?php if ($catId == "5") echo "selected"; ?>>Seafood</option>
                                <option value="6" <?php if ($catId == "6") echo "selected"; ?>>Salad</option>
                                <option value="7" <?php if ($catId == "7") echo "selected"; ?>>Boissons</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="platPhoto">Plat Photo:</label>
                            <input type="file" class="form-control" id="platPhoto" name="platPhoto">
                            <span class="text-muted" style="text-decoration-underline"><?php echo htmlspecialchars($platPhoto ? $platPhoto : ''); ?></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>

            <?php
            } else {
                // Error if plat not found
                echo "Plat not found.";
            }
        } else {
            // platId is missing, show the category form
            ?>
    </div>
    <!-- End of plats-section -->
    <!--Start of categorie section  -->
    <div id="categorie-section">

    <?php
        // Check if catId is passed in the URL
        if (isset($_GET['catId'])) {
            $catId = $_GET['catId']; // Get catId from the URL

            $stmt = $pdo->prepare("SELECT * FROM categorie WHERE catId = ?");
            $stmt->execute([$catId]);
            $category = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($category) {
                // Fetch category details
                $catId = $category['catId'];
                $catName = $category['catName'];
                $catDescription = $category['catDescription'];
    ?>
                <form class="mb-5" id="addcategorieForm" method="POST" action="../phpscripts/adminaction.php" enctype="multipart/form-data">
                    <input type="hidden" name="action" value="catinsert">
                    <input type="hidden" name="catId" value="<?php echo $catId; ?>"> <!-- Fix here -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="catName">Nom de la catégorie:</label>
                            <input type="text" class="form-control" id="catName" name="catName" value="<?php echo htmlspecialchars($catName); ?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="catDescription">Description de la catégorie:</label>
                            <input type="text" class="form-control" id="catDescription" name="catDescription" value="<?php echo htmlspecialchars($catDescription); ?>" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
    <?php
            }
        }
    ?>
    </div> 
    <!-- End of categorie-section --> 

    <?php
    }
    ?>
</div>

        </div>
    </div>
</div>
<?php include 'footer.php'; ?>