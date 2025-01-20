<?php
require '../admin/connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST['action']) || $_POST['action'] == 'insert')) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($_FILES['photo']['error'] != 0) {
        die("Invalid Photo.");
    }
    $photo_name = $_FILES['photo']['name'];
    $addresse = $_POST['addresse'];
    $codePostal = $_POST['codePostal'];
    $tel = $_POST['tel'];

    // Password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Handle file upload
    $target_dir = "../src/userimage/";
    $target_file = $target_dir . basename($photo_name);
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        die("Failed to upload photo.");
    }

    // Debug: Check all variables before inserting
    echo "fullname: $fullname<br>email: $email<br>hashed_password: $hashed_password<br>photo: $photo_name<br>addresse: $addresse<br>codePostal: $codePostal<br>tel: $tel<br>";

    // Check if PDO is working
    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("INSERT INTO client (fullname, email, password, photo, addresse, codePostal, tel) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        // Debug: Check if statement preparation is successful
        if (!$stmt) {
            die(var_export($pdo->errorInfo(), true));
        }

        $stmt->execute([$fullname, $email, $hashed_password, $photo_name, $addresse, $codePostal, $tel]);
        
        // Debug: Check last insert ID
        $lastId = $pdo->lastInsertId();
        if (!$lastId) {
            die("Insert failed.");
        } else {
            echo "Insert successful. Last inserted ID is: " . $lastId;
        }

        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
}
?>
