<div class="navbar navbar-expand-lg navbar-dark  shadow" style="background: pink;position:sticky;top:0;z-index:1;">
  <div class="container col-md-12">
  <ul class="nav navbar-nav" >
      <!-- <li class="active"><a href="#">NEW</a></li> -->
      <div class="dropdown">
      <li><a  class="text-black fw-bold dropbtn" href="categories.php?id=Makeup" style="font-size:1.5em;margin:50px;font-family:fantasy;">MAKEUP</a></li>
      <div class="dropdown-content">
        <?php $categories = getAllSub("categories","Makeup");  
        if(mysqli_num_rows($categories) > 0){
          foreach($categories as $item){ ?>
          <a href="subcategory.php?subcategoryid=<?= $item['id'] ?>"><?= $item['name']; ?></a>

         <?php }
        }
        ?>
      
      </div>
      </div>
      <div class="dropdown">
      <li><a class="text-black  fw-bold dropbtn"  href="categories.php?id=Skincare" style="font-size:1.5em;margin:50px;font-family:fantasy;">SKINCARE</a></li>
      <div class="dropdown-content">
        <?php $categories = getAllSub("categories","Skincare");  
        if(mysqli_num_rows($categories) > 0){
          foreach($categories as $item){ ?>
          <a href="subcategory.php?subcategoryid=<?= $item['id'] ?>"><?= $item['name']; ?></a>

         <?php }
        }
        ?>
      
      </div>
      </div>

      <div class="dropdown">
      <li><a  class="text-black fw-bold dropbtn " href="categories.php?id=Fragrance" style="font-size:1.5em;margin:50px;font-family:fantasy;">FRAGRANCE</a></li>
      <div class="dropdown-content">
        <?php $categories = getAllSub("categories","Fragrance");  
        if(mysqli_num_rows($categories) > 0){
          foreach($categories as $item){ ?>
          <a href="subcategory.php?subcategoryid=<?= $item['id'] ?>"><?= $item['name']; ?></a>

         <?php }
        }
        ?>
      
      </div>
      </div>

      <div class="dropdown">
      <li><a  class="text-black fw-bold dropbtn " href="categories.php?id=Hair" style="font-size:1.5em;margin:50px;font-family:fantasy;">HAIR</a></li>
      <div class="dropdown-content">
        <?php $categories = getAllSub("categories","Hair");  
        if(mysqli_num_rows($categories) > 0){
          foreach($categories as $item){ ?>
          <a href="subcategory.php?subcategoryid=<?= $item['id'] ?>"><?= $item['name']; ?></a>

         <?php }
        }
        ?>
      
      </div>
      </div>

      <div class="dropdown">
      <li><a  class="text-black fw-bold " href="categories.php?id=Accessories" style="font-size:1.5em;margin:50px;font-family:fantasy;">ACCESSORIES</a></li>
      <div class="dropdown-content">
        <?php $categories = getAllSub("categories","Accessories");  
        if(mysqli_num_rows($categories) > 0){
          foreach($categories as $item){ ?>
          <a href="subcategory.php?subcategoryid=<?= $item['id'] ?>"><?= $item['name']; ?></a>

         <?php }
        }
        ?>
      
      </div>
      </div>
    </ul>
  </div>
</div>
