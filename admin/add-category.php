
<?php 
include('../middleware/adminMiddleware.php');
// include('../functions/myFunction.php');
include('includes/header.php');

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center" style="color:black;">Add Categories</h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                            <div class="col-md-6">
                                    <label for="">Main Category</label>
                                    <select name="maincategory_id" class="form-select mb-2" required>
                                                <option selected>Select Main Category</option>
                                                <option value="Makeup">Makeup</option>
                                                <option value="Skincare">Skincare</option>
                                                <option value="Fragrance">Fragrance</option>
                                                <option value="Hair">Hair</option>
                                                <option value="Accessories">Accessories</option>
 
                                        </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Sub Category</label>
                                    <input type="text" name="name"  class="form-control" placeholder="Enter category name" required>
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="">Description</label>
                                    <textarea name="description" id="" placeholder="Enter description" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="">Hide</label>
                                    <input type="checkbox" name="status" id="" >
                                </div>
                                <div class="col-md-6">
                                    <label for="">Popular</label>
                                    <input type="checkbox" name="popular" id="" >
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-info" name="add_category_btn" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>