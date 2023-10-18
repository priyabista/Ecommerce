<?php
// include_once 'session_start.php';
session_start();
include('config/dbcon.php');

if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
  echo "you are not logged in";
}
else{
echo $_SESSION['id'];
}

?>
<!-- header -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ecommerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="user1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="user.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
 <style>
  .row{
  display: grid;
  column-gap:10px;
  grid-template-columns: 30% 30% 20%;
  /* background-color: #2196F3; */
  /* padding: 10px 10px 10px 10px; */
  padding:30px 0px 0px 70px;
  width: auto;
}
.row::before{
 display:none;
}
.row::after{
  display:none;
}
#submit input{
        margin-top: 10px;
        margin-right: 10px;
    }
    *{
    text-decoration: none;
}

.heading{
    margin-top: -40px;
    position:relative;
    padding-left: 500px;
    padding-top: 80px;
    display: flex;
}
    #submit{
        position: absolute;
        padding-left: 20px;
        padding-top: 0px;
    }
    #submit input{
        background-color: rgb(98, 224, 155);
        border: none;
        width: 100%;
        margin: 30px;
        padding: 10px;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 15px;
        font-weight: bold;
    }

    .box input {
        background-color: #f2f4f6;
        border: none;
        padding: 15px;
      width: 250px;
      font-size: 15px;
    }
    label{
        font-size: 20px;
    }
    .cancel{
     background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 10px 27px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
     margin: 4px 2px;
     cursor: pointer;
     margin-left: 240px;
     margin-top: 45px;
   }
   .footer{
    margin-top: 100px;
    position: relative;
   }
   #email{
    margin-left: 35px;
   }




  </style>

</head>
<body style="overflow-x: hidden;">

<!-- navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: #FFF1FA;">
  <div class="container-fluid-1">
    <div class="navbar-header">
      <a class="navbar-brand" href="UI.php" style="color: black;
    font-weight: bolder;
    font-size: 4.5em;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    position: absolute;
    left: 50px;">Beauty and Skin Care</a>
    </div>
   
    <!-- user login section -->

    <ul class="nav navbar-nav navbar-right">
      <li ><a href="#" onclick="openLogin()"><i class="fa fa-user" aria-hidden="true"></i></a></li>

      <div class="login-module"  id="login" style="border:1px solid rgba(128,128,128,0.3);position:absolute;top:60px;">
        <?php  
        if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) { ?>
          <h3 style="margin-left: 140px; margin-top: 90px; font-family: Bahnschrift SemiBold SemiConden; font-size: 2.78rem;">Hello</h3>
       <a class="button" style="margin-top: 40px;" href="./account/login.php">SIGN IN</a>
       <a class="button" href="./account/registration.php">CREATE&nbsp;ACCOUNT</a>
       <div class="items">
       <a id="text" href="login.php">ACCOUNT INFORMATION </a><br>
       <a id="text" href="login.php">ADDRESSES</a><br>
       <a id="text" href="login.php">ORDERS</a>
       <li ><a href="#" id="close" onclick="closeLogin()">close</a></li>
        </div>

     <?php   }
     
     else{
    
       $sq=mysqli_query($con,"select * from `registration` where userid='".$_SESSION['id']."'");
       $srow=mysqli_fetch_array($sq); ?>
       <div class="displayusername">
   
    <h1 style= "font-family: Clarendon Blk BT;font-size:3rem;text-align:center;">Hello&nbsp;<?php 
    
    echo $srow['firstname'];?>&nbsp;!</h1>  
   
     </div> 
     <div class="items">
            <a id="text" href="account_info.php">ACCOUNT INFORMATION </a><br>
            <a id="text" href="#">ADDRESSES</a><br>
            <a id="text" href="#">ORDERS</a>
      <li ><a href="#" id="close" onclick="closeLogin()">close</a></li>

          </div>
  <?php   ?>
      <a href="logout.php">Logout</a>
      <?php

            }
        ?>

    
         

         
      
      <!-- echo $srow['email'];  -->
          
 
    
      </div>
       
      <!-- login form -->
      <!-- user login section end -->

      <!--already registered  user  -->
      <!-- <ul class="nav navbar-nav navbar-right">
      <li ><a href="#" onclick="openLoginforRegistereduser()"><i>Already loged in</i></a></li>
      <div class="login-module"  id="login">
      <li ><a href="#" id="close" onclick="closeLogin()">close</a></li>
       <h3 style="margin-left: 140px; margin-top: 90px; font-family: Bahnschrift SemiBold SemiConden; font-size: 2.78rem;">Hello<br>
      </h3>
       <a class="button" style="margin-top: 40px;" href="./account/login.php">SIGN IN</a>
       <a class="button" href="./account/registration.php">CREATE&nbsp;ACCOUNT</a>
       <div class="items">
       <a id="text" href="#">ACCOUNT INFORMATION </a><br>
       <a id="text" href="#">ADDRESSES</a><br>
       <a id="text" href="#">ORDERS</a>
       </div>
      </div> -->
    <!--already registered  user  end -->
    

      <?php 
     if(isset($_SESSION['id'])){
      $sql="select * from cart where userid = '".$_SESSION['id']."'";
      $query=mysqli_query($con, $sql);
      $count=mysqli_num_rows($query);
     }
      ?>
      <li><a href="#" onclick="openCart()"><i class="fa fa-shopping-bag" aria-hidden="true"></i><span style="display:block;width:25px;background:#000;height:25px;position:relative;border:1.5px solid white;border-radius:20px;top:-26px;left:15px;color:white;font-size:0.5em;text-align:center;"><?php if(isset($_SESSION['id'])){ echo $count;}else{ echo 0; } ?></span>
</a></li>
    </ul>
    <div class="cart"  id="cart" style="width:400px;height:100%;position:fixed;background:#fff;right:0px;z-index:2000;overflow-y:auto;top:0;border-left:1px solid rgba(128,128,128,0.3);display:none; ">
   
<div class="headerCart" style="width:380px;padding:20px;position:fixed;z-index:1000;background:white;border-bottom:1px solid rgba(128,128,128,0.3)">
<h1 style="display:inline-block;font-weight:700;">SHOPPING CART</h1>
<span style="margin:0 0 0 10px;cursor:default;font-size:1.1em;font-weight:500;color:rgba(128,128,128,0.8)"><?php if(!isset($_SESSION['id'])){ echo "0"; } else{ echo $count; }?> Items</span>
<span onclick="closeCart()" style="margin:0 0 0 40px;cursor:pointer;font-size:1.1em;font-weight:500;color:rgba(128,128,128,0.8)">Close</span>
</div>
<div class="bodyCart" style="   
    padding: 10px 10px 10px 20px;width:380px;position:relative;top:80px;margin-bottom:270px;word-wrap:break-word;">
     <?php
     if(isset($_SESSION['id'])){
        $q = "select * from cart where userid = '".$_SESSION['id']."'";
        $query = mysqli_query($con, $q);
     
        while($res = mysqli_fetch_array($query)){
        ?>
<div class="height" style="border-bottom:1px solid rgba(128,128,128,0.3);height:0px;margin:0px 0 10px 0;"></div>

<h3 style="display:block;height:40px;max-width:280px;"><?php echo $res['product_title'] ?> </h3>
<a class="anchor" href="#" style="display:inline-block;margin:0px 0px 0px 300px;position:relative;left:0px;top:-45px;"><span style="color:rgba(128,128,128,0.8);" >Remove</span></a>
<img src="./images/<?php echo  $res['images'];?>" alt="" style="width:120px;height:180px;display:inline-block;position:relative;margin-top:-30px;border:1px solid rgba(128,128,128,0.2)">
<span style="color:rgba(0,0,0);font-size:1em;font-weight:500;position:relative;top:65px;left:5px;cursor:pointer;">Rs <?php echo  $res['price'] ?></span>
<div class="incdnc" style="border:none;height:40px;width:120px;display:inline-block;border-top:1px solid rgba(128,128,128,0.3);border-bottom:1px solid rgba(128,128,128,0.3);border-radius:30px;position:relative;left:40px;top:100px;">
<button  onclick="decrement()"style="display:inline-block;position:relative;left:-41px;width:40px;top:-1px;border:none;border:1px solid rgba(128,128,128,0.3);height:40px;border-top-left-radius:30px;border-bottom-left-radius:30px;">-</button>
<h3 style="display:inline-block;text-align:center;position:relative;left:-30px;" id="number">1</h3>
<button onclick="increment()" style="display:inline-block;width:40px;position:relative;left:40px;top:-41px;border:none;border:1px solid rgba(128,128,128,0.3);height:40px;border-top-right-radius:30px;border-bottom-right-radius:30px;">+</button>
</div>
<div class="height" style="border-bottom:1px solid rgba(128,128,128,0.3);height:0px;margin:10px 0 20px 0;"></div>

<?php
            }
          }
    ?>

</div>
<div class="footerCart"  style="border-top:1px solid rgba(128,128,128,0.3);height:180px;position:fixed;top:73vh;width:380px;background:#fff;z-index:1000;">

<h3>SUBTOTAL:</h3>
            <span></span>

            <h2>Estimated Total:</h2>
            <span>$4299</span>
</div>

</div>
<!-- <div class="cart" style="border:1px solid #000;width:400px;height:100%;position:fixed;top:0;left:70%;overflow-y:auto;background:#fff;">
        <div class="cartHeader"  style="border:1px solid red;padding:20px;width:100%;position:fixed;background:#fff;z-index:1000;">
            <h2 style="display:inline-block;">SHOPPING CART</h1>
                <span style="font-size:0.8;margin-lft:20px;color:rgba(128,128,128,0.9)">20 Items</span>
                <span style="font-size:0.8;margin-lft:20px;color:rgba(128,128,128,0.9)">Close</span>
        </div>

<div class="cartBody" style="position:relative;top:70px;padding:10px 20px;width:100%;border:1px solid red;word-wrap:break-word;margin-bottom:220px;" >
            <h3 style="border:1px solid red;height:40px;max-width:280;">Derma Roller1 </h3>
            <span class="remove" style="position:relative;left:290px;top:-150px;border:1px solid red;">Remove</span>
            <img src="download (2).jfif" alt="" srcset="" style="border:1px solid red;position:relative;left:-60px;width:100px;">
            <span class="price" style="border:1px sold red;positin:relative;left:-60px;top:-5px;">Rs 2000</span>
            <div class="incdnc" style="display: inline-block;border:1px solid rgba(128,128,128,0.7);width:100px;position:relative;height: 40px;left: -20px;padding:0 0px 0 0px;border-radius: 30px;">
       <button  onclick="decrease()" style="display: inline-block;height: 100%;width: 30px;font-size: 2em;background: #fff;border: none;color: rgba(128,128,128,0.9);border-top-left-radius: 30px;border-bottom-left-radius: 30px;border-right: 1px solid rgba(128,128,128,0.7);">-</button>
      <h1 id="numbers" style="width:35px;display: inline-block;font-size: 1.5em;margin: 0 0 0 -5px;text-align: center;font-weight: 600;"></h1>
       <button onclick="increase()" style="display: inline-block;height: 100%;width: 30px;font-size: 2em;background: #fff;border: none;color: rgba(128,128,128,0.9);border-top-right-radius: 30px;border-bottom-right-radius: 30px;border-left: 1px solid rgba(128,128,128,0.7);">+</button>
            </div>
            <div class="height" style="margin-top:20px;margin-bottom:20px;borde:1px solid rgba(128,128,128,0.9)"></div>
       
        </div>
        <div class="cartFooter" style="border:1px solid red;height:180px;position:fixed;top:73vh;width:380px;background:#fff;z-index:1000;">
            <h3 style="display:inline-block;">SUBTOTAL:</h3>
            <span>$4299</span>

            <h2>Estimated Total:</h2>
            <span>$4299</span>
        </div>
    </div> -->




    <form class="navbar-form navbar-left" action="search.php" style="width:240px;position:relative;margin:45px 0 0 0;left:350px">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" style="width:200px;margin-left:-15px;height:40px;position:relative;top:0;left:0px;">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="search_btn" style="position:relative;top:0;left:0px;width:40px;height:40px;background:pink;">
            <i class="glyphicon glyphicon-search" style="text-align:center;"></i>
          </button>
        </div>
      </div>

    </form>
  </div>
</div>

<!-- CATEGORIES -->
<div class="container-fluid-2" style="background-color: pink; color: black; height: 49px;">
  <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="#">NEW</a></li> -->
      <li><a href="categories.php?id=Makeup">MAKEUP</a></li>
      <li><a href="categories.php?id=Skincare">SKINCARE</a></li>
      <li><a href="categories.php?id=Fragrance">FRAGNANCE</a></li>
      <li><a href="categories.php?id=Hair">HAIR</a></li>
      <li><a href="categories.php?id=Accessories">ACCESSORIES</a></li>
    </ul>
</div>


</nav>




<!-- CATEGORIES END -->

<div class="advertisement1" style="padding: 0px 10px;margin:-15px 0px 0px 0px">
  <img src="coverpic1.jpg" style="margin-top: 0px; width: 100%;height:440px;object-fit:cover;">
</div>

<div class="categories" style="margin-top: 0px;   align-items: center;">
  <div class="small-container" style="width:100%; max-width: 100%;
       margin:auto;
        padding:0px 5% 25px 5%;background:#fff;" >
   <div class="row"  >
   <?php
        $q = "select * from products ";
        $query = mysqli_query($con, $q);
        while($res = mysqli_fetch_array($query)){
        ?>
        <div class="col-1" style="margin:0 0px 40px 0px;">
        <a href="product_description.php?id=<?php echo $res['id']?>" style="text-decoration:none;color:black;">
        <div class="card" style="width: 300px;height:430px;border:1px solid rgba(128,128,128,0.4);">
                        
        <div class="card-header" style="color: #3366CC; background-color: #FFFFFF;height:300px">
          <img src="uploads/<?php echo  $res['image'];?>"  style="width:60%;height:250px;margin:5px 0 0 60px;">
        </div>
        <div class="card-body" style="background-color: white;">
            <h5 style= "font-family: Clarendon Blk BT;font-size:1.5em;text-align:center;"><?php echo $res['name'] ?></h5>
            <p style="font-size:1.5em;text-align:center;font-weight:600;opacity:0.8;">Rs <?php echo  $res['original_price'] ?></p>
            <button onclick="openCart()" style="font-family: Clarendon Blk BT;font-size:13px;margin:0px 0 0 65px;padding:10px 20px;border:1px solid rgba(128,128,128,0.4);opacity:0.8;font-weight:600">Add to Cart</button>
        </div>
        </div>
        </a>
        </div>
      
<?php
            }
    ?>
   </div>
     <script>
    function openCart(){
      document.getElementById("cart").style.display = "block";
    }
    document.addEventListener('mouseup', function(e){
      var container = document.getElementById('cart');
      if(!container.contains(e.target)){
        container.style.display ='none';
      }
    });
    function closeCart(){
      document.getElementById("cart").style.display = "none";
    }
    function openLogin(){
      document.getElementById("login").style.display = "block";
    }
    function closeLogin(){
      document.getElementById("login").style.display = "none";
    }
    document.addEventListener('mouseup', function(e){
      var container = document.getElementById('login');
      if(!container.contains(e.target)){
        container.style.display ='none';
      }
    });
    
    
   
  
    
      </script>
    
    </body>
    </html>
 
    
      