<?php 
session_start();
if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    $_SESSION['message'] = "Log out Succesfully!";
}
header('location: index.php');
?>