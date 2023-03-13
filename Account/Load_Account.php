<?php
include '../DatabasePuller.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-3podsup";

$page = $_GET["page"];

session_start();
if (isset($_SESSION['account_id'])) {
    $email = $Account_Email[$_SESSION['account_id']];
    $password = $Account_Password[$_SESSION['account_id']];
    echo "Session";
    Verify($email, $password, $page);

    exit;
} 
else if (isset($_GET['email']) && isset($_GET['password'])) {
    // Use the variables from create_account.php
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo "Get";
    Verify($email, $password, $page);
    exit;
} 
else if (isset($_POST['email']) && isset($_POST['password'])) {
    // Use the variables from the login form
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "Post";
    Verify($email, $password, $page);
    exit;
}
else {
    // No email or password, redirect to the login page
    header('Location: /Project-3/Account/Login.php');
    echo "None";
    exit;
}

function Verify($email, $password ,$page) {
    global $Account_ID;
    global $Account_Email;
    global $Account_Password;
for ($i=0; $i < count($Account_ID); $i++) { 
    if($Account_Email[$i] == $email &&  $Account_Password[$i] == $password) {
        // echo "<br>Valid<br>";
        if(!isset($_SESSION['account_id'])) {
        $_SESSION['account_id'] = $Account_ID[$i] - 1;
        echo "Session set";
    } 
        header('Location: /Project-3/Account/Account.php?page=' . $page . '');
        exit;
    }
    else {
        echo "<br>Not Valid<br>";
    }
}
echo "<script>window.location.href = '/Project-3/Account/LogIn.php?error=1';</script>";
}

// // Redirect to the product page

?>

