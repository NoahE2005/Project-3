<?php
require '../../DatabasePuller.php';
session_start();

if (isset($_SESSION['account_id'])) {
  $CurrentAccount_ID = (int)$_SESSION['account_id'] ;
} else {
  // Redirect to the login page if the account ID is not set
  header('Location: /Project-3/Account/Login.php');
  exit;
}

if(isset($_POST["submit"]) && isset($_FILES["file"])) {
    // Check if the file was uploaded successfully
    if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        // Get the uploaded file
        $file = $_FILES["file"];

        // Get the file name
        $fileName = $file["name"];

        // Get the file extension
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);

        // Generate a new file name
        $newFileName = "AccountImage-" . $Account_Username[$CurrentAccount_ID] . "." . $fileExt;

        // Move the uploaded file to the desired location and rename it
        move_uploaded_file($file["tmp_name"], "AccountImage/" . $newFileName);

        // Update the image type in the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project-3podsup";

try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("UPDATE accounts SET Foto_Type=:fileExt WHERE ID=:CurrentAccount_ID + 1");
        $stmt->bindParam(':fileExt', $fileExt);
        $stmt->bindParam(':CurrentAccount_ID', $CurrentAccount_ID);
        $stmt->execute();
        
        echo "Update successful";
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

        // $stmt->close();
        $conn = null;
        // Output a success message
        echo "File uploaded successfully as $newFileName";
    } else {
        // Output an error message
        echo "File upload not successful";
    }
}

// Redirect back to the account page
header('Location: /Project-3/Account/Account.php');
exit;
?>
