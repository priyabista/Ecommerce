
<?php 
include('../middleware/adminMiddleware.php');
// include('../functions/myFunction.php');

include('includes/header.php');

?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if(isset($_GET['id']))
                    { 
                        $id = $_GET['id'];
                        $category =  getById("categories",$id);
                        if(mysqli_num_rows($category) > 0){
                            $data = mysqli_fetch_array($category);
                            ?>
                            <div class="card">
                            <div class="card-header">
                                <h4>Edit Categories</h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-md-6">
                                    <label for="">Main Category</label>
                                    <select name="maincategory_id" class="form-select mb-2" >
                                               

                                                <?php  $categories = getAll("categories"); 
                                                if(mysqli_num_rows($categories) > 0){
                                                    $item = mysqli_fetch_array($categories);
                                               ?>
                                                <option value="<?= $item['category_name'] ?>" <?= $data['category_name'] == $item['category_name'] ?'selected':'' ?>><?= $item['category_name']; ?></option>
                                                <option value="Makeup">Makeup</option>
                                                <option value="Skincare">Skincare</option>
                                                <option value="Fragrance">Fragrance</option>
                                                <option value="Hair">Hair</option>
                                                <option value="Accessories">Accessories</option>
                                                <?php      }
                                                else 
                                                {
                                                    echo "No category Available";
                                                }
                                                ?>
                                                
                                        </select>
                                </div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="category_id" value="<?= $data['id']; ?>">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="<?= $data['name']; ?>" class="form-control" placeholder="Enter category name">
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <label for="">Description</label>
                                            <textarea name="description" id=""   placeholder="Enter description" rows="3" class="form-control"><?= $data['description']; ?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="image" id="" class="form-control">
                                            <label for="">Current Image</label>
                                            <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                            <img src="../uploads/<?= $data['image']; ?>" alt="" height="50px" width="50px">
                                        </div>
                                        
                                      
                                        
                                        <div class="col-md-6">
                                            <label for="">Hide</label>
                                            <input type="checkbox" <?= $data['status']? "checked" : "" ?>   name="status" id="" >
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Popular</label>
                                            <input type="checkbox" <?= $data['popular']? "checked" : "" ?>   name="popular" id="" >
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-info" name="update_category_btn" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                      </div>
                  <?php      }
                  else 
                  {
                    echo "Category not found";
                  }
                        
                ?>
                   
                <?php    }
                else
                {
                    echo "ID missing from url";
                }
                ?>
              
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>