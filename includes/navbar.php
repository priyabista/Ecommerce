<nav class="navbar navbar-expand-lg navbar-dark  shadow" style="background: #FFF1FA;">
  <div class="container col-md-12">
    <a style="font-family:fantasy; "  class="navbar-brand text-dark fw-bold fs-1" href="index.php">MAKEUP AND SKINCARE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
      <div class="search-container">
    <form action="" style="margin:5px 50px 0 0;">
      <input type="text" placeholder="Search" name="search">
      <button type="submit" style="border: none;background:pink;padding:3px 10px;border-top-right-radius:15px;border-bottom-right-radius:15px;"><i class="fa fa-search"></i></button>
    </form>
  </div>
      <?php if(isset($_SESSION['auth'])) { ?>
            <li class="nav-item dropdown">
            <a class="nav-link text-black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['name'];?>
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
            </ul>
            </li>
                <?php    }
                else { ?>
                <li class="nav-item dropdown">
                  <a href="" class="nav-link text-black dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" ><i class="fa-solid fa-user"></i></a>
                    <ul class="dropdown-menu">
                      <li><a  class="dropdown-item" href="login.php">Login</a></li>
                      <li><a class="dropdown-item" href="register.php">Register</a></li>
                    </ul>
                </li>
                
                <?php  }
                ?>
          
        <li class="nav-item">
          <a class="nav-link text-black " href="#" onclick="openCart()"><i class="fa fa-shopping-cart"><?php if(isset($_SESSION['auth'])){ ?>
            <span id="cart-item"></span>
         <?php } ?> </i></a>
        </li>
       
       
  
      </ul>
      <?php include('cartmodule.php'); ?>
    </div>
  </div>
</nav>
<?php include('subheader.php')  ?>