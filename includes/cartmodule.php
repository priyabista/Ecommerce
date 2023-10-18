

<div class="cart" id="cart" style="width: 400px;height:100%;position:fixed;background:#fff;right:0px;z-index:2000;overflow-y:auto;top:0;border-left:1px solid rgba(128,128,128,128,0.3);display:none;">
<div class="mycart" id="mycart">
<div class="cart-header" style="width:380px;padding:20px;position:fixed;z-index:1000;background:white;border-bottom:1px solid rgba(128,128,128,0.3)">
<h4 style="display:inline-block;font-weight:700;">SHOPPING CART</h4>

<?php  $itemno = 0;
if(isset($_SESSION['auth'])){
$itemget = getCartItems();
$itemno = mysqli_num_rows($itemget);}
?>
<span style="margin:0 0 0 10px;cursor:default;font-size:0.8em;font-weight:500;color:rgba(128,128,128)"><?= $itemno; ?> Items</span>
<span onclick="closeCart()" style="margin:0 0 0 40px;cursor:pointer;font-size:0.8em;font-weight:500;color:rgba(128,128,128,0.9)">Close</span>
</div>
<?php 
if(isset($_SESSION['auth'])){
$items = getCartItems(); 
$totalPrice = 0;
 if(mysqli_num_rows($items) > 0){ 
 ?>
<div class="cart-body"  style=" padding: 10px 10px 10px 20px;width:380px;position:relative;top:80px;margin-bottom:270px;word-wrap:break-word;">
<?php 

foreach ($items as $citem) {
?>
<div class="product_data" id="">
<h6 style="display:block;height:40px;max-width:280px;" class="fw-bold"><?= $citem['name'] ?> </h6>
<button class="btn  btn-sm deleteItem" value="<?= $citem['cid'] ?>" style="display:inline-block;margin:0px 0px 0px 300px;position:relative;left:0px;top:-45px;"><span style="color:rgba(128,128,128,0.8);font-size:0.8em;" >Remove</span></button>
<img src="uploads/<?= $citem['image'] ?>" alt="" style="width:120px;height:180px;display:inline-block;position:relative;margin-top:-30px;border:1px solid rgba(128,128,128,0.2)">
<span style="color:rgba(0,0,0);font-size:0.7em;font-weight:700;position:relative;top:65px;left:5px;cursor:pointer;">Rs <?= $citem['original_price'] ?></span>
<input type="hidden" name="" class="prodId" value="<?= $citem['product_id'] ?>">

<div class="input-group mb-3" style="width: 130px;position:relative;left:200px;top:-40px;">
<button class="input-group-text decrement-btn bg-white  updateQty" style="border-top-left-radius:15px;border-bottom-left-radius:15px;">-</button>
<input type="text" class="form-control bg-white text-center input-qty" value="<?= $citem['product_qty']; ?>" disabled>
<button class="input-group-text increment-btn bg-white updateQty" style="border-top-right-radius:15px;border-bottom-right-radius:15px;">+</button>
</div>
<hr>
</div>
<?php    
  
if(isset($citem)){ 
$totalPrice += $citem['original_price'] * $citem['product_qty'];
}

}
?>
</div>
<div class="footerCart"  style="border-top:1px solid rgba(128,128,128,0.3);height:300px;position:fixed;top:73vh;width:380px;background:#fff;z-index:1000;">

<h4 class="d-inline-block">Estimated Total:</h4>
<span style="margin: 0 0 0 0px;" class="fw-bold" id="price">Rs <?= $totalPrice; ?></span>
<div class="mt-5" style="width:360px;">
<a href="checkout.php" class="btn btn-default fw-bold" style="border:1px solid rgba(128,128,128,0.7);width:100%;">Proceed to checkout</a>
</div>
</div> 
<?php }else
{ ?>
<h6 class=" text-center" style="position:relative ;top:100px;color:rgba(128,128,128,0.8);font-size:0.9em;">Empty Cart!</h6>
<?php } }else{ ?>
    <h6 class=" text-center" style="position:relative ;top:100px;color:rgba(128,128,128,0.8);font-size:0.9em;">Login to continue!</h6>

<?php }

?>  
  


</div>

</div>
