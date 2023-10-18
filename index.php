<?php 
include('functions/userfunctions.php');
include('includes/header.php');  

include('config/dbcon.php');
// include('includes/cartmodule.php');
?>
  <?php if(isset($_SESSION['message'])): ?>
                    <div class="alert alert-warning alert-dismissible fade show position-absolute" role="alert" style="width: 100%;">
                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                unset($_SESSION['message']);
                endif; ?>

        <div class="" style="margin: 5px 0 0 0;">
                <img src="images/main.jpg" style="margin-top: 0px; width: 100%;height:570px;object-fit:cover;">
    </div>
    <div class="py-5">
        <div class="container">
    
        <div class="row justify-content-center">
        <div class="col-md-12">
                  
               
        
                        <div class="row" style=" display: grid;column-gap:30px;grid-template-columns:30% 30% 30%; padding:0 0 0 50px; width: auto;row-gap:40px;">
                                 <?php
                                $query = "SELECT * FROM products";
                                $query_run = mysqli_query($con,$query);
                                if(mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $item){ ?>
                            <div class="col-md-3 mb-2">
                                <a href="products.php?id=<?= $item['id'];?>" class="text-decoration-none text-black">
                                <div class="card shadow" style="width: 300px;margin:0px 0 0 0;">
                                    <div class="card-body">

                                        <img src="uploads/<?= $item['image']; ?>" alt="Category Image" srcset="" class="mx-auto d-block " style="height:250px;width:60%;object-fit:contain;" >
                                        <hr>
                                 <div class="" style="margin:20px 0;">
                                 <h5 class="text-center fw-bold " style="font-family:Clarendon Blk BT;font-size:1em;"><?= $item['name'];?></h5>
                                        <p class="text-center" style="font-size:0.9em;font-weight:600;opacity:0.6;">Rs <?= $item['original_price'];?></p>
                                </a>
                                <form action="" class="form-submit">
                                    <input type="hidden" name="" value="<?= $item['id'];?>" class="pid">
                                <button class="btn btn-default mx-auto d-block addCart " onclick="openCart()"   style="font-family: Clarendon Blk BT;font-size:13px;padding:10px 20px;border:1px solid rgba(128,128,128,0.4);opacity:0.8;font-weight:600">Add to Cart</button>

                                </form>
                                 </div>   
                                        
                                    </div>
                                </div>
                                
                            </div>
                                <?php   }
                                }else{
                                echo "No data available";
                                }
                            ?>
                        </div>
                
        </div>
        </div>
        </div>
    </div>
<?php include('includes/footer.php')   ?>
    