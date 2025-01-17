<?php
require 'connection.php';

function validatedData($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function validatePattern($pattern, $data, $field) {
    if (!preg_match($pattern, $data)) {
        die("Invalid $field.");
    }
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST['action']) || $_POST['action'] == 'insert')) {
    $fullname = validatedData($_POST['fullname']);
    $email = validatedData($_POST['email']);
    $password = validatedData($_POST['password']);
    $photo = validatedData($_POST['photo']);
    $addresse = validatedData($_POST['addresse']);
    $codePostal = validatedData($_POST['codePostal']);
    $tel = validatedData($_POST['tel']);
   

    // Patterns for validation
    $textpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
    $CPpattern = "/^[1-9][0-9]{4}$/";
    $telPattern = "/^0[1-9]([-. ]?[0-9]{2}){4}$/";
    $passwordPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";

    try {
        // Validate each input field
        $fullname = validatePattern($textpattern, $fullname, 'fullname');
        $email = validatePattern($textpattern, $email, 'email');
        $addresse = validatePattern($textpattern, $addresse, 'addresse');
        $codePostal = validatePattern($CPpattern, $codePostal, 'codePostal');
        $ville = validatePattern($textpattern, $ville, 'ville');
        $tel = validatePattern($telPattern, $tel, 'tel');
        $password = validatePattern($passwordPattern, $password, 'password');

        // Prepare the SQL statement to avoid SQL Injection
        $stmt = $pdo->prepare("INSERT INTO user ( fullname, email, addresse, cp, ville, tel, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([ $fullname, $email, $addresse, $codePostal, $ville, $tel, $password]);

        header("Location: adminpage.php");
        exit();
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update') {
    $clId = validatedData($_POST['clId']);
    $fullname = validatedData($_POST['fullname']);
    $email = validatedData($_POST['email']);
    $addresse = validatedData($_POST['addresse']);
    $codePostal = validatedData($_POST['codePostal']);
    $ville = validatedData($_POST['ville']);
    $tel = validatedData($_POST['tel']);
    $password = validatedData($_POST['password']);

    // Patterns for validation
    $textpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
    $CPpattern = "/^[1-9][0-9]{4}$/";
    $telPattern = "/^0[1-9]([-. ]?[0-9]{2}){4}$/";
    $passwordPattern = "/^[a-z0-9.-]+@[a-z0-9.-]{2,}\.[a-z]{2,4}$/";

    try {
        // Validate each input field
        $clId = validatePattern("/^\d+$/", $clId, 'clId');
        $fullname = validatePattern($textpattern, $fullname, 'fullname');
        $email = validatePattern($textpattern, $email, 'email');
        $addresse = validatePattern($textpattern, $addresse, 'addresse');
        $codePostal = validatePattern($CPpattern, $codePostal, 'codePostal');
        $ville = validatePattern($textpattern, $ville, 'ville');
        $tel = validatePattern($telPattern, $tel, 'tel');
        $password = validatePattern($passwordPattern, $password, 'password');

        // Prepare the SQL statement to avoid SQL Injection
        $stmt = $pdo->prepare("UPDATE user SET  fullname = ?, email = ?, addresse = ?, cp = ?, ville = ?, tel = ?, password = ? WHERE clId = ?");
        if ($stmt->execute([ $fullname, $email, $addresse, $codePostal, $ville, $tel, $password, $clId])) {
            header("Location: adminpage.php");
            exit();
        } else {
            echo "Update failed.";
        }
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['clId'])) {
    $clId = $_GET['clId'];
    $pdo->beginTransaction();

    try {
        $stmt1 = $pdo->prepare("DELETE FROM user WHERE clId = ?");
        $stmt1->execute([$clId]);
        $pdo->commit();
        header("Location: adminpage.php");
        exit();
    } catch (Exception $e) {
        $pdo->rollBack();
        echo "Failed to delete records: " . $e->getMessage();
    }
} else {
    echo "user ID not provided.";
}

?>
