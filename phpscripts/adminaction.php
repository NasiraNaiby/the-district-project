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
    $Active = validatedData($_POST['Active']);

    //this one  (if stmts) make sure directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    //  pattern for validation
    $textpattern = "/^[\p{L}\p{N}\p{P}\p{Zs}]+$/u";
    $platPricePattern = "/^\d+(\.\d{1,2})?$/";

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
        $allowedMimeTypes = ['image/jpeg', 'image/png',];
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
        $stmt = $pdo->prepare("INSERT INTO plats (platName, platDescription, platPrice, catId, platPhoto, Active) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$platName, $platDescription, $platPrice, $catId, $photo, $Active]);

        // Redirect to the admin page after successful insert
        header("Location: ../admin/adminpage.php");
        exit();

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update') {
    $platId = validatedData($_POST['platId']);
    $platName = validatedData($_POST['platName']);
    $platDescription = validatedData($_POST['platDescription']);
    $platPrice = validatedData($_POST['platPrice']);
    $catId = validatedData($_POST['catId']);
    $platPhoto = $_FILES['platPhoto']; 

    // Patterns for validation
    $textpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'!]+$/";
    $platPricePattern = "/^\d+(\.\d{2})?$/";
    
    // Validate form fields
    try {
        $platId = validatePattern("/^\d+$/", $platId, 'platId');
        $platName = validatePattern($textpattern, $platName, 'platName');
        $platDescription = validatePattern($textpattern, $platDescription, 'platDescription');
        $platPrice = validatePattern($platPricePattern, $platPrice, 'platPrice');
        $catId = validatePattern("/^\d+$/", $catId, 'catId');

        // Handle file upload (platPhoto)
        if ($platPhoto['error'] == UPLOAD_ERR_OK) {
            // Make sure the file is an image (basic validation)
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($platPhoto['type'], $allowedTypes)) {
                throw new Exception('Invalid file type. Only JPEG, PNG, and GIF are allowed.');
            }

            // Generate a new filename to prevent conflicts
            $photoName = basename($platPhoto['name']);
            $uploadDir = '../src/uploads/';
            $targetPath = $uploadDir . $photoName;

            // Move the file to the server
            if (!move_uploaded_file($platPhoto['tmp_name'], $targetPath)) {
                throw new Exception('Failed to upload the photo.');
            }
        } else {
            // If no file was uploaded, keep the old photo (or handle it as necessary)
            $photoName = ''; // Keep the existing photo or set a default one
        }

        // Prepare the SQL statement to avoid SQL Injection
        $stmt = $pdo->prepare("UPDATE plats SET platName = ?, platDescription = ?, platPrice = ?, catId = ?, platPhoto = ? WHERE platId = ?");
        if ($stmt->execute([ $platName, $platDescription, $platPrice, $catId, $photoName, $platId])) {
            header("Location: ../admin/adminpage.php");
            exit();
        } else {
            echo "Update failed.";
        }
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}



// insert categorie data

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
    $textcatpattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'!]+$/";


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


// Add a boisson
if ($_SERVER["REQUEST_METHOD"] == "POST" && (!isset($_POST['action']) || $_POST['action'] == 'boissonsinsert')) {
    // Capture form data
    $name = validatedData($_POST['name']);
    $description = validatedData($_POST['description']);
    $price = validatedData($_POST['price']);
    
    // File upload path
    $uploadDir = '../src/uploads/';
    $photoFileName = $_FILES['photo']['name'];
    $photoFileTmpName = $_FILES['photo']['tmp_name'];
    $photoFilePath = $uploadDir . basename($photoFileName);

    // Make sure directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Updated pattern for validation
    $textpattern = "/^[\p{L}\p{N}\p{P}\p{Zs}]+$/u";
    $boissonPricePattern = "/^\d+(\.\d{1,2})?$/";

    try {
        // Validate each input field
        $name = validatePattern($textpattern, $name, 'name');
        $description = validatePattern($textpattern, $description, 'description');
        $price = validatePattern($boissonPricePattern, $price, 'price');

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
        $stmt = $pdo->prepare("INSERT INTO boissons (name, image, price, description) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $photo, $price, $description]);

        // Redirect to the admin page after successful insert
        header("Location: ../admin/adminpage.php");
        exit();

    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
// update the boissons data
elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'updateBoissons') {
    $id = validatedData($_POST['id']);
    $name = validatedData($_POST['name']);
    $description = validatedData($_POST['description']);
    $price = str_replace(',', '.', trim(validatedData($_POST['price'])));
    $photo = $_FILES['photo']; // input type="file"

    // Patterns for validation
    $textpattern = "/^[\p{L}\p{M}\p{N}\p{P}\p{Zs}\p{Zl}\p{Zp}]+$/u";
    $pricePattern = "/^\d+([.,]\d{2})?$/";

    // Validate form fields
    try {
        $id = validatePattern("/^\d+$/", $id, 'id');
        $name = validatePattern($textpattern, $name, 'name');
        $description = validatePattern($textpattern, $description, 'description');
        $price = validatePattern($pricePattern, $price, 'price');

        var_dump($price); // Debugging: Check the price value

        // Handle file upload (photo)
        if ($photo['error'] == UPLOAD_ERR_OK) {
            // (validation)
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($photo['type'], $allowedTypes)) {
                throw new Exception('Invalid file type. Only JPEG, PNG, and GIF are allowed.');
            }

            // Generate a new filename 
            $photoName = basename($photo['name']);
            $uploadDir = '../src/uploads/';
            $targetPath = $uploadDir . $photoName;

            // Move the file to the server
            if (!move_uploaded_file($photo['tmp_name'], $targetPath)) {
                throw new Exception('Failed to upload the photo.');
            }
        } else {
            // If no file was uploaded, keep the old photo (or handle it as necessary)
            $photoName = ''; // Keep the existing photo or set a default one
        }

        // Prepare the SQL statement to avoid SQL Injection
        $stmt = $pdo->prepare("UPDATE boissons SET name = ?, description = ?, price = ?, image = ? WHERE id = ?");
        if ($stmt->execute([$name, $description, $price, $photoName, $id])) {
            header("Location: ../admin/adminpage.php");
            exit();
        } else {
            echo "Update failed.";
        }
    } catch (PDOException $e) {
        die("Database error: " . $e->getMessage());
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}




 
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


// delete un boissons
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $clId = $_GET['id']; 
    $pdo->beginTransaction(); 
    try { 
       $stmt1 = $pdo->prepare("DELETE FROM boissons WHERE id = ?"); 
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
?>

