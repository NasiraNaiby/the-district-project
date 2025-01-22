<?php
session_start();
include 'connection.php';
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) { 
    header("Location: index.php"); 
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
                                echo "<td>" . $row["password"] . "</td>";
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
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
