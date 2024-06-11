<?php
session_start();

if(isset($_POST['submit'])) {
    $otp = $_POST['input1'] . $_POST['input2'] . $_POST['input3'] . $_POST['input4'];

    if($_SESSION['OTP'] == $otp) {
        echo "OTP verification successful!";
        header("Location: login_page.php");
        exit;
    } else {
        echo "OTP verification failed.";
    }
}
?>
