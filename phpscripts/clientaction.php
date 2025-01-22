<?php 
include '../admin/connection.php';
function validatedData($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update') {
    echo "POST request and update action detected.<br>";
    $clId = validatedData($_POST['clId']);
    $fullname = validatedData($_POST['fullname']);
    $email = validatedData($_POST['email']);
    $password = validatedData($_POST['password']);
    $addresse = validatedData($_POST['addresse']);
    $codePostal = validatedData($_POST['codePostal']);
    $tel = validatedData($_POST['tel']);
    
    // Handle photo upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $photoTmpPath = $_FILES['photo']['tmp_name'];
        $photoName = basename($_FILES['photo']['name']);
        $photoDir = "../src/userimage/";
        $photoPath = $photoDir . $photoName;

        if (move_uploaded_file($photoTmpPath, $photoPath)) {
            echo "Photo uploaded successfully.<br>";
            $updatePhoto = true;
            $photoPath = $photoName;
        } else {
            die("Failed to upload photo.");
        }
    } else {
        echo "No new photo uploaded.<br>";
        $updatePhoto = false;
    }
    try {
        // Construct the SQL statement dynamically based on whether a new photo was uploaded
        if ($updatePhoto) {
            $stmt = $pdo->prepare("UPDATE client SET fullname = ?, email = ?, password = ?, photo = ?, addresse = ?, codePostal = ?, tel = ? WHERE clId = ?");
            $params = [$fullname, $email, $password, $photoPath, $addresse, $codePostal, $tel, $clId];
        } else {
            $stmt = $pdo->prepare("UPDATE client SET fullname = ?, email = ?, password = ?, addresse = ?, codePostal = ?, tel = ? WHERE clId = ?");
            $params = [$fullname, $email, $password, $addresse, $codePostal, $tel, $clId];
        }
        echo "Prepared statement.<br>";
        if ($stmt->execute($params)) {
            echo "Update successful.<br>";
            header("Location: ../clients/clients.php");
            exit();
        } else {
            echo "Update failed.<br>";
        }
        // Verify if changes are reflected
        $checkStmt = $pdo->prepare("SELECT fullname, email, password, photo, addresse, codePostal, tel FROM client WHERE clId = ?");
        $checkStmt->execute([$clId]);
        $updatedData = $checkStmt->fetch(PDO::FETCH_ASSOC);

        if ($updatedData) {
            echo "<pre>";
            print_r($updatedData);
            echo "</pre>";
        } else {
            echo "Failed to retrieve updated data.<br>";
        }
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    echo "Invalid request.<br>";
}
?>

