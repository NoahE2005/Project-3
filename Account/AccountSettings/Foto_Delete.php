<?php
require '../../DatabasePuller.php';
// Get the current user's account ID
session_start();
$accountID = $_SESSION['account_id'];

// Get the file path for the user's current photo
$fileName = "AccountImage-" . $Account_Username[$accountID] . "." . $Account_Foto_Type[$accountID];
$filePath = "AccountImage/" . $fileName;

// Delete the file if it exists
if (file_exists($filePath)) {
  unlink($filePath);
}

// Redirect the user back to the account settings page
header("Location: ../Account.php");
exit;
?>
