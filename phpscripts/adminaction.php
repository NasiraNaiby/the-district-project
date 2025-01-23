<?php
require '../admin/connection.php';
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
    // Capture form data
    $platName = validatedData($_POST['platName']);
    $platDescription = validatedData($_POST['platDescription']);
    $platPrice = validatedData($_POST['platPrice']);
    $catId = validatedData($_POST['catId']);
    
    // File upload path
    $uploadDir = '../src/uploads/';
    $photoFileName = $_FILES['photo']['name'];
    $photoFileTmpName = $_FILES['photo']['tmp_name'];
    $photoFilePath = $uploadDir . basename($photoFileName);

    // Make sure directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Patterns for validation
    $textpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
    $platPricePattern = "/^\d+(\.\d{2})?$/";

    try {
        // Validate each input field
        $platName = validatePattern($textpattern, $platName, 'platName');
        $platDescription = validatePattern($textpattern, $platDescription, 'platDescription');
        $platPrice = validatePattern($platPricePattern, $platPrice, 'platPrice');

        // Check for file upload error
        if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
            die("File upload error: " . $_FILES['photo']['error']);
        }

        // Check if the temporary file is valid
        if (!(is_uploaded_file($photoFileTmpName))) {
            die("Temporary file is not valid: " . $photoFileTmpName);
        }

        // Validate file size (2MB max)
        if ($_FILES['photo']['size'] > 2000000) { // 2MB limit
            die("File size exceeds the limit of 2MB.");
        }

        // Allow only specific mime types (JPEG, PNG)
        $allowedMimeTypes = ['image/jpeg', 'image/png'];
        if (!in_array($_FILES['photo']['type'], $allowedMimeTypes)) {
            die("Invalid file type. Only JPG and PNG are allowed.");
        }

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($photoFileTmpName, $photoFilePath)) {
            // Store the file name directly
            $photo = $photoFileName;
        } else {
            die("File upload failed. Error code: " . $_FILES['photo']['error']);
        }

        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO plats (platName, platDescription, platPrice, catId, platPhoto) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$platName, $platDescription, $platPrice, $catId, $photo]);

        // Redirect to the admin page after successful insert
        header("Location: ../admin/adminpage.php");
        exit();

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}



// insert categorie data

// Category insertion
function validatedcatData($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function validatecatPattern($pattern, $data, $field) {
    if (!preg_match($pattern, $data)) {
        die("Invalid $field.");
    }
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST['action']) || $_POST['action'] == 'catinsert')) {
    // Capture form data
    $catName = validatedcatData($_POST['catName']);
    $catDescription = validatedcatData($_POST['catDescription']);
    
    // Patterns for validation (make sure they are for category fields)
    $textcatpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";

    try {
        // Validate each category input field
        $catName = validatecatPattern($textcatpattern, $catName, 'catName');
        $catDescription = validatecatPattern($textcatpattern, $catDescription, 'catDescription');
        
        // Prepare and execute the SQL statement
        $stmt = $pdo->prepare("INSERT INTO categorie (catName, catDescription) VALUES (?, ?)");
        $stmt->execute([$catName, $catDescription]);

        // Redirect to the admin page after successful insert
        header("Location: ../admin/adminpage.php");
        exit();

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}





// function validatedData($data) {
//     return htmlspecialchars(strip_tags(trim($data)));
// }

// function validatePattern($pattern, $data, $field) {
//     if (!preg_match($pattern, $data)) {
//         die("Invalid $field.");
//     }
//     return $data;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST['action']) || $_POST['action'] == 'insert')) {
//     $fullname = validatedData($_POST['fullname']);
//     $email = validatedData($_POST['email']);
//     $password = validatedData($_POST['password']);
//     $photo = validatedData($_POST['photo']);
//     $addresse = validatedData($_POST['addresse']);
//     $codePostal = validatedData($_POST['codePostal']);
//     $tel = validatedData($_POST['tel']);
   

//     // Patterns for validation
//     $textpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
//     $CPpattern = "/^[1-9][0-9]{4}$/";
//     $telPattern = "/^0[1-9]([-. ]?[0-9]{2}){4}$/";
//     $passwordPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";

//     try {
//         // Validate each input field
//         $fullname = validatePattern($textpattern, $fullname, 'fullname');
//         $email = validatePattern($textpattern, $email, 'email');
//         $addresse = validatePattern($textpattern, $addresse, 'addresse');
//         $codePostal = validatePattern($CPpattern, $codePostal, 'codePostal');
//         $ville = validatePattern($textpattern, $ville, 'ville');
//         $tel = validatePattern($telPattern, $tel, 'tel');
//         $password = validatePattern($passwordPattern, $password, 'password');

//         // Prepare the SQL statement to avoid SQL Injection
//         $stmt = $pdo->prepare("INSERT INTO user ( fullname, email, addresse, cp, ville, tel, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
//         $stmt->execute([ $fullname, $email, $addresse, $codePostal, $ville, $tel, $password]);

//         header("Location: ../admin/adminpage.php");
//         exit();
//     } catch (PDOException $e) {
//         die("Database error: " . $e->getMessage());
//     }
//  } 
 //elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update') {
//     $clId = validatedData($_POST['clId']);
//     $fullname = validatedData($_POST['fullname']);
//     $email = validatedData($_POST['email']);
//     $addresse = validatedData($_POST['addresse']);
//     $codePostal = validatedData($_POST['codePostal']);
//     $ville = validatedData($_POST['ville']);
//     $tel = validatedData($_POST['tel']);
//     $password = validatedData($_POST['password']);

//     // Patterns for validation
//     $textpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
//     $CPpattern = "/^[1-9][0-9]{4}$/";
//     $telPattern = "/^0[1-9]([-. ]?[0-9]{2}){4}$/";
//     $passwordPattern = "/^[a-z0-9.-]+@[a-z0-9.-]{2,}\.[a-z]{2,4}$/";

//     try {
//         // Validate each input field
//         $clId = validatePattern("/^\d+$/", $clId, 'clId');
//         $fullname = validatePattern($textpattern, $fullname, 'fullname');
//         $email = validatePattern($textpattern, $email, 'email');
//         $addresse = validatePattern($textpattern, $addresse, 'addresse');
//         $codePostal = validatePattern($CPpattern, $codePostal, 'codePostal');
//         $ville = validatePattern($textpattern, $ville, 'ville');
//         $tel = validatePattern($telPattern, $tel, 'tel');
//         $password = validatePattern($passwordPattern, $password, 'password');

//         // Prepare the SQL statement to avoid SQL Injection
//         $stmt = $pdo->prepare("UPDATE user SET  fullname = ?, email = ?, addresse = ?, cp = ?, ville = ?, tel = ?, password = ? WHERE clId = ?");
//         if ($stmt->execute([ $fullname, $email, $addresse, $codePostal, $ville, $tel, $password, $clId])) {
//             header("Location: adminpage.php");
//             exit();
//         } else {
//             echo "Update failed.";
//         }
//     } catch (PDOException $e) {
//         die("Database error: " . $e->getMessage());
//     }
// }
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['clId'])) {
    $clId = $_GET['clId']; 
    $pdo->beginTransaction(); 
    try { 
       $stmt1 = $pdo->prepare("DELETE FROM client WHERE clId = ?"); 
       $stmt1->execute([$clId]); 
       $pdo->commit(); 
       header("Location: ../admin/adminpage.php"); 
       exit(); 
   }
    catch (Exception $e) { 
       $pdo->rollBack(); 
       echo "Failed to delete records: " . $e->getMessage(); 
   } 
} else { 
   echo "user ID not provided."; 
} 



// Admin Plats delete action

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['platId'])) {
   $platId = $_GET['platId']; 
   $pdo->beginTransaction(); 
   try { 
      $stmt1 = $pdo->prepare("DELETE FROM plats WHERE platId = ?"); 
      $stmt1->execute([$platId]); 
      $pdo->commit(); 
      header("Location: ../admin/adminpage.php"); 
      exit(); 
  }
   catch (Exception $e) { 
      $pdo->rollBack(); 
      echo "Failed to delete records: " . $e->getMessage(); 
  } 
} else { 
  echo "user ID not provided."; 
} 

// Admin Categorie delete action

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['catId'])) {
   $catId = $_GET['catId']; 
   $pdo->beginTransaction(); 
   try { 
      $stmt1 = $pdo->prepare("DELETE FROM categorie WHERE catId = ?"); 
      $stmt1->execute([$catId]); 
      $pdo->commit(); 
      header("Location: ../admin/adminpage.php"); 
      exit(); 
  }
   catch (Exception $e) { 
      $pdo->rollBack(); 
      echo "Failed to delete records: " . $e->getMessage(); 
  } 
} else { 
  echo "user ID not provided."; 
} 
?>

