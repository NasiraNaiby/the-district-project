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
            <div id="topplat-section ">
                    <h1 class="text-center mt-3">Clients details</h1>
                    <div class="container mt-5">
                            <h2>Best-Selling Dishes</h2>
                            <canvas id="PlatsChart"></canvas>
                        </div>


                    <?php
                        // Prepare the SQL query to get best-selling dishes with total revenue
                        $sql = "SELECT p.platName, SUM(c.commandPlatQuantity * c.commandPlatPrice) AS totalRevenue 
                                FROM cart c 
                                JOIN plats p ON c.platId = p.platId 
                                GROUP BY p.platName 
                                ORDER BY totalRevenue DESC;";

                        // Prepare the query
                        $stmt = $pdo->prepare($sql);

                        // Execute the query
                        $stmt->execute();

                        // Fetch all the results
                        $dishes = $stmt->fetchAll();

                        // Prepare the data for Chart.js
                        $labels = [];
                        $data = [];

                        foreach ($dishes as $dish) {
                            // Use 'platName' for the label and 'totalRevenue' for the data
                            $labels[] = $dish['platName'];
                            $data[] = $dish['totalRevenue'];
                        }

                        // Convert PHP arrays to JSON
                        $labels_json = json_encode($labels);
                        $data_json = json_encode($data);
                        ?>

<script>
                            const labels = <?php echo $labels_json; ?>;
                            const data = <?php echo $data_json; ?>;
                            console.log(labels);
                            console.log(data);
                        </script>
                       
                </div>
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
                <h1 class="text-center mt-5">Plats details</h1>
                <table class="table table-hover table-light text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th>Plat Status</th>
                                    <th>Plat Categorie</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                // Fetch plats data from the database
                                $stmt = $pdo->query('SELECT
                                            plats.platId, 
                                            plats.platName,
                                            plats.platDescription,
                                            plats.platPrice,
                                            plats.platPhoto,
                                            plats.Active,
                                            categorie.catName
                                        FROM 
                                            plats
                                        JOIN 
                                            categorie ON plats.catId = categorie.catId;
                                        ');
                                while ($row = $stmt->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["platId"] . "</td>";
                                    echo "<td>" . $row["platName"] . "</td>";
                                    echo "<td>" . $row["platDescription"] . "</td>";
                                    echo "<td>" . $row["platPrice"] . "</td>";
                                    echo "<td>" . $row["platPhoto"] . "</td>";
                                    echo "<td>" . $row["Active"] . "</td>";
                                    echo "<td>" . $row["catName"] . "</td>"; 
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
                                    <?php
                                        // Fetch all categories from the database
                                        $catStmt = $pdo->query('SELECT * FROM categorie');
                                        while ($category = $catStmt->fetch()) {
                                            echo "<option value='" . $category['catId'] . "'>" . $category['catName'] . "</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="photo">Plat Photo:</label>
                                <input type="file" class="form-control" id="photo" name="photo" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">Plat status:</label>
                                <select id="Active"  class="form-control" name="Active">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
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
                                <th>Number of Active Plat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $stmt = $pdo->query('SELECT 
                                        categorie.catId, -- Added catId
                                        categorie.catName,
                                        categorie.catDescription,
                                        COUNT(plats.platId) AS numberOfActiveDishes
                                    FROM 
                                        categorie
                                    JOIN 
                                        plats ON categorie.catId = plats.catId
                                    WHERE 
                                        plats.active = 1
                                    GROUP BY 
                                        categorie.catId, categorie.catName, categorie.catDescription;
                                    ');

                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $row["catId"] . "</td>";
                                echo "<td>" . $row["catName"] . "</td>";
                                echo "<td>" . $row["catDescription"] . "</td>";
                                echo "<td>" . $row["numberOfActiveDishes"] . "</td>";  // Fixed here
                                echo "<td>";
                                echo "<a href='edit.php?catId=" . $row["catId"] . "' class='btn btn-warning text-white text-decoration-none ms-2'><i class='bi bi-pencil'></i></a>";
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
             
            <!-- start of order table -->
            <div id="Command-section ">
                    <h1 class="text-center mt-3">Détails de la commande</h1>
                    <table class="table  table-hover table-light text-center  ">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Command Status</th>
                                <th>Command Date</th>
                                <th>Client Name</th>
                                <th>Client Mail</th>
                                <th>Plat Name</th>
                                <th>Plat Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $stmt = $pdo->query('SELECT 
                                        command.comId,
                                        command.commandDate,
                                        command.commandStatus,
                                        client.fullName,
                                        client.email,
                                        plats.platName,
                                        plats.platPrice
                                    FROM 
                                        command
                                    JOIN 
                                        client ON command.clId = client.clId
                                    JOIN 
                                        cart ON command.comId = cart.comId
                                    JOIN 
                                        plats ON cart.platId = plats.platId;
                                    '); 
                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $row["comId"] . "</td>";
                                echo "<td>" . $row["commandDate"] . "</td>";
                                echo "<td>" . $row["commandStatus"] . "</td>";
                                echo "<td>" . $row["fullName"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["platName"] . "</td>";
                                echo "<td>" . $row["platPrice"] . "</td>";
                                echo "<td>";
                                echo "<a href='../phpscripts/adminaction.php?clId=" . $row["clId"] . "' class='btn btn-danger text-white text-decoration-none ms-2'><i class='bi bi-trash'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                 <!-- end of order table -->
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
