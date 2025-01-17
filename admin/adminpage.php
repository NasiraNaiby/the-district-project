<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) { 
    header("Location: login.php"); 
    exit(); 
}
$user_name = $_SESSION['username']; 
?>
<div class="wrapper">
    <div class="main">
        <div class="row g-0">
            <div class="col-md-2">
                <!-- sidebar -->
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-md-10">
                <div id="client-section">
                    <h1 class="text-center mt-3">Clients details</h1>
                    <table class="table table-hover table-light text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>fullName</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>photo</th>
                                <th>Addresse</th>
                                <th>Code Postal</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->query('SELECT * FROM client'); 
                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $row["clId"] ."</td>";
                                echo "<td>" . $row["fullName"] ."</td>";
                                echo "<td>" . $row["email"] ."</td>";
                                echo "<td>" . $row["password"] ."</td>";
                                echo "<td>" . $row["photo"] . "</td>";
                                echo "<td>" . $row["addresse"] . "</td>";
                                echo "<td>" . $row["codePostal"] . "</td>";
                                echo "<td>" . $row["tel"] . "</td>";
                                echo "<td>" . $row["mail"] . "</td>";
                                echo "<td>";
                                echo "<a href='edit.php?cliId=" . $row["cliId"] . "' class='btn btn-primary text-white text-decoration-none'><i class='bi bi-pencil'></i></a>";
                                echo "<a href='action.php?cliId=" . $row["cliId"] . "' class='btn btn-danger text-white text-decoration-none ms-2'><i class='bi bi-trash'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <button class="btn btn-success" id="addClientBtn">Ajouter un Client</button>
                    <form id="clientForm" method="POST" action="action.php" enctype="multipart/form-data">
                        <input type="hidden" name="clId" >
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="clitype">User Type:</label>
                                <select class="form-control" id="clitype" name="clitype">
                                    <option value="admin">Administrateur</option>
                                    <option value="gestionaire">Gestionaire</option>
                                    <option value="approvisionneur">Approvisionneur</option>
                                </select>
                            </div>
                        </div>
                        <!-- Other input rows -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="fullName">fullName:</label>
                                <input type="text" class="form-control" id="fullName" name="fullName" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">email:</label>
                                <input type="email" class="form-control" id="email" name="email" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="password">password:</label>
                                <input type="password" class="form-control" id="password" name="password" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">photo:</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="addresse">Addresse:</label>
                                <input type="text" class="form-control" id="addresse" name="addresse" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="codePostal">CodePostal:</label>
                                <input type="text" class="form-control" id="codePostal" name="codePostal" >
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                                <label for="tel">Tel:</label>
                                <input type="text" class="form-control" id="tel" name="tel" >
                            </div>
                            
                        </div>
             
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
