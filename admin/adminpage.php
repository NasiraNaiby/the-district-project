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
            <div class="col-md-9 ">
                <div id="client-section ">
                    <h1 class="text-center mt-3">Clients details</h1>
                    <table class="table  table-hover table-light text-center  ">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>fullName</th>
                                <th>Email</th>
                                <th>photo</th>
                                <th>Addresse</th>
                                <th>Code Postal</th>
                                <th>Téléphone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $stmt = $pdo->query('SELECT * FROM client'); 
                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $row["clId"] . "</td>";
                                echo "<td>" . $row["fullName"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td><img src='" . $row["photo"] . "' alt='Profile Photo' style='width:50px; height:50px;'></td>";
                                echo "<td>" . $row["addresse"] . "</td>";
                                echo "<td>" . $row["codePostal"] . "</td>";
                                echo "<td>" . $row["tel"] . "</td>";
                                echo "<td>";
                                echo "<a href='../phpscripts/adminaction.php?clId=" . $row["clId"] . "' class='btn btn-danger text-white text-decoration-none ms-2'><i class='bi bi-trash'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!--Start of Plats section  -->
                <div id="plats-section">
                    <h1 class="text-center mt-3">Plats details</h1>
                    <table class="table table-hover table-light text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Photo</th>
                                <th>Plat Categorie</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $stmt = $pdo->query('SELECT * FROM plats'); 
                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $row["platId"] . "</td>";
                                echo "<td>" . $row["platName"] . "</td>";
                                echo "<td>" . $row["platDescription"] . "</td>";
                                echo "<td>" . $row["platPrice"] . "</td>";
                                echo "<td>" . $row["platPhoto"] . "</td>";
                                echo "<td>" . $row["catId"] . "</td>";
                                echo "<td>";
                                echo "<a href='edit.php?platId=" . $row["platId"] . "' class='btn btn-warning text-white text-decoration-none ms-2'><i class='bi bi-pencil'></i></a>";
                                echo "<a href='../phpscripts/adminaction.php?platId=" . $row["platId"] . "' class='btn btn-danger text-white text-decoration-none ms-2'><i class='bi bi-trash'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                    <Button class="btn btn-success" id="addplatBtn" >Add a Plat</Button>                    
                    <form id="addPlatForm" method="POST" action="../phpscripts/adminaction.php" enctype="multipart/form-data" style="display: none;">
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
                <h1 class="text-center mt-3">categorie details</h1>
                <table class="table table-hover table-light text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $stmt = $pdo->query('SELECT * FROM categorie'); 
                        while ($row = $stmt->fetch()) {
                            echo "<tr>";
                            echo "<td>" . $row["catId"] . "</td>";
                            echo "<td>" . $row["catName"] . "</td>";
                            echo "<td>" . $row["catDescription"] . "</td>";
                            echo "<td>";
                            echo "<a href='../phpscripts/adminaction.php?catId=" . $row["catId"] . "' class='btn btn-warning text-white text-decoration-none ms-2'><i class='bi bi-pencil'></i></a>";
                            echo "<a href='../phpscripts/adminaction.php?catId=" . $row["catId"] . "' class='btn btn-danger text-white text-decoration-none ms-2'><i class='bi bi-trash'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
                <Button class="btn btn-success mb-3" id="addcategorieBtn">Add a Categorie</Button>               
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
