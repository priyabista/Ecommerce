<?php 
session_start();
include('../config/dbcon.php');
if(isset($_SESSION['auth']))
{
    if(isset($_POST['scope']))
    {
        $scope = $_POST['scope'];
        switch ($scope)
        {
            case "add":
                $prod_id = $_POST['prod_id'];
                $prod_qty = $_POST['prod_qty'];
                $user_id = $_SESSION['auth_user']['user_id'];
                
                $check_existing_cart = "SELECT * FROM carts WHERE product_id='$prod_id' AND user_id='$user_id' ";
                $check_existing_cart_run = mysqli_query($con, $check_existing_cart);
                if(mysqli_num_rows($check_existing_cart_run) > 0)
                {
                    echo "existing";
                }
                else
                {

                
                    $insert_query = "INSERT INTO carts (user_id, product_id, product_qty) VALUES ('$user_id','$prod_id','$prod_qty')";
                    $insert_query_run = mysqli_query($con, $insert_query);
                    if($insert_query_run)
                    {
                        echo 201;
                    }
                    else
                    {
                        echo 500;
                    }
                }
                break;

              

                case "update":
                    $prod_id = $_POST['prod_id'];
                    $userid = $_SESSION['auth_user']['userid'];

                    $check_existing_cart = "SELECT * FROM carts WHERE product_id='$prod_id' AND user_id='$user_id' ";
                    $check_existing_cart_run = mysqli_query($con, $check_existing_cart);
                    if(mysqli_num_rows($check_existing_cart_run) > 0)
                    {
                     $update_query = "UPDATE carts SET product_qty='$prod_qty' WHERE product_id='$prod_id' AND user_id='$user_id' ";
                     $update_query_run = mysqli_query($con, $update_query);
                     if($update_query_run){
                        echo 200;
                     }
                     else{
                        echo 500;
                     }
                    }
                    else
                    {
                        echo "Something went wrong";
                    }

                 break;

                 case "delete":
                    $cart_id = $_POST['cart_id'];
                    $user_id = $_SESSION['auth_user']['user_id'];
                    $check_existing_cart = "SELECT * FROM carts WHERE id='$cart_id' AND user_id='$user_id' ";
                    $check_existing_cart_run = mysqli_query($con, $check_existing_cart);
                    if(mysqli_num_rows($check_existing_cart_run) > 0)
                    {
                        $delete_query = "DELETE FROM carts WHERE id='$cart_id' AND user_id='$user_id'";
                        $delete_query_run = mysqli_query($con, $delete_query);

                        if($delete_query_run)
                        {
                            echo 200;
                        }
                        else
                        {
                            echo 500;
                        }
                    }
                    else
                    {
                        echo "Something went wrong";
                    }
                break;
               
            default:
                echo 500;
        } 
    }
}
else{
    echo 401;
}

if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pqty = $_POST['qty'];
    $user_id = $_SESSION['auth_user']['user_id'];

     
    $check_existing_cart = "SELECT * FROM carts WHERE product_id='$pid' AND user_id='$user_id' ";
    $check_existing_cart_run = mysqli_query($con, $check_existing_cart);
    if(mysqli_num_rows($check_existing_cart_run) > 0)
    {
        echo "existing";
    }
    else
    {

    
        $insert_query = "INSERT INTO carts (user_id, product_id, product_qty) VALUES ('$user_id','$pid','$pqty')";
        $insert_query_run = mysqli_query($con, $insert_query);
        if($insert_query_run)
        {
            echo 201;
        }
        else
        {
            echo 500;
        }
    }
}

if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
    $user_id = $_SESSION['auth_user']['user_id'];

    $query = "SELECT * FROM carts WHERE user_id='$user_id'";
    $query_run = mysqli_query($con, $query);
    $rows = mysqli_num_rows($query_run);
    echo $rows;
}

?>