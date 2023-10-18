<?php 
include('functions/userfunctions.php');

include('includes/header.php');  
if(isset($_GET['id']))
{
    $product_id = $_GET['id'];
    $product_data = getIdActive("products",$product_id);
    $product = mysqli_fetch_array($product_data);

    if($product)
    { ?>
        <!-- <div class="py-3 bg-primary">
            <div class="container">
                <h6 class="text-white">
                <a class="text-white text-decoration-none" href="index.php">Home /</a>    
                
                <a class="text-white text-decoration-none" href="categories.php">  
                Collection /
                </a>  
             <?= $product['name'] ?></h6>
            </div>
        </div> -->

        <div class="br-light py-4">
            <div class="container product_data mt-3">
                <div class="row">
                    <div class="col-md-4">
                        <div class="shadow">
                          <img src="uploads/<?= $product['image']; ?>" alt="Product Image" srcset="" class="w-100">
                                
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="fw-bold"><?= $product['name']; ?>
                            <span class="float-end text-black "><?php if($product['trending']){ ?><i class="fas fa-fire-alt"></i> <?php } ?></span>
                        </h4>
                        <hr>
                        <p><?= $product['small_description']; ?></p>

                        <div class="row">
                        <div class="col-md-6">
                            <h5>Rs <span class="text-black fw-bold"> <?= $product['original_price']; ?></span></h5>
                                
                            </div>
                            
                            
                        </div>

                            <div class="row mt-3">
                                <div class="col-md-4">
                                        
                                        <div class="input-group mb-3" style="width: 130px;">
                                            <button class="input-group-text bg-white decrement-btn"  style="border-top-left-radius:15px;border-bottom-left-radius:15px;">-</button>
                                            <input type="text" class="form-control bg-white text-center input-qty" value="1" disabled>
                                            <button class="input-group-text bg-white increment-btn" style="border-top-right-radius:15px;border-bottom-right-radius:15px;">+</button>
                                        </div>
                                </div>
                            </div>

                            <div class="row ">
                            <div class="col-md-12 mx-auto d-block">
                             <button class="btn btn-default  px-4 addToCartBtn" onclick="openCart()" style="border:1px solid rgba(128,128,128,0.6);height:60px;width:100%;" value="<?= $product['id']; ?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                            </div>
                           
                        </div>
                            
                        <hr>
                        <h6>Product Description:</h6>
                        
                        <p><?= $product['description']; ?></p>

                    </div>
                </div>
            </div>
        </div>
       
  <?php  }
    else
    {
        echo "Something went wrong";
    }
}
else
{
    echo "Something went wrong";
}
include('includes/footer.php');