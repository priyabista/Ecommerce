<?php 
session_start();
include('config/dbcon.php');

function getAllActive($table){
    global $con;
    $query = "SELECT * FROM $table WHERE status = '0' ";
  return  $query_run = mysqli_query($con, $query);
  }

  function getIdActive($table , $id){
    global $con;
    $query = "SELECT * FROM $table WHERE id = '$id' AND status = '0'";
  return  $query_run = mysqli_query($con, $query);
}


function getSlugActive($table , $slug){
  global $con;
  $query = "SELECT * FROM $table WHERE slug = '$slug' AND status = '0' LIMIT 1";
return  $query_run = mysqli_query($con, $query);
}

function getProductByCategory($category_id){
  global $con;
  $query = "SELECT * FROM products WHERE category_id = '$category_id' AND status = '0' ";
return  $query_run = mysqli_query($con, $query);
}

function getCartItems(){
  global $con;
  $userId = $_SESSION['auth_user']['user_id'];
  $query = "SELECT c.id as cid, c.product_id,c.product_qty, p.id as pid, p.name, p.image, p.original_price FROM carts c, products p 
  WHERE c.product_id = p.id AND c.user_id='$userId' ORDER BY c.id DESC";
  return $query_run = mysqli_query($con, $query);
}

function getOrders(){
  global $con;
  $userId = $_SESSION['auth_user']['user_id'];
  $query = "SELECT * FROM orders WHERE user_id = '$userId'";
  return $query_run = mysqli_query($con, $query);
}

function getAllSub($tabel,$category_name){
  global $con;
  $query = "SELECT * FROM $tabel WHERE category_name = '$category_name'";
  return $query_run = mysqli_query($con, $query);
}

  function redirect($url, $message){
    $_SESSION['message'] = $message;
    header('location: '.$url);  
    exit();
  }

  function checkTrackingNoValid($trackingNo)
  {
    global $con;
    $userId = $_SESSION['auth_user']['user_id'];

    $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo' AND user_id='$userId'";
    return $query_run = mysqli_query($con, $query);

  }

?>