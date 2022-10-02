<?php

include 'all file/connection.php';

session_start();
// session_destroy();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

?>

<?php include 'all file/header.php'; ?>



<?php include 'all file/footer.php'; ?>