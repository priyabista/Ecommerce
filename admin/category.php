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
                        <h4>Categories</h4>
                    </div>
                    <div class="card-body" id="category_table">
                        <table class="table table-bordered ">
                            <thead class="bg-secondary">
                                <tr class="text-white">
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Sub Category </th>
                                    <th>Image</th>
                                    <th>Status</th>
                                 
                                    
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $category = getAll("categories");
                                   if(mysqli_num_rows($category) > 0) { 
                                    foreach($category as $item) { ?>
                                        <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td><?= $item['category_name']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td>
                                                <img src="../uploads/<?= $item['image'] ?>" alt="<?= $item['name']; ?>" srcset="" width="50px" height="50px">
                                            </td>
                                            <td><?= $item['status'] == '0'? "Visible":"Hidden"; ?></td>
                                     

                                            <td>
                                                <a href="edit-category.php?id=<?= $item['id']; ?>" class="btn btn-info ">Edit</a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
                                                <button class="btn btn-danger" type="submit" name="delete_category_btn">Delete</button>
                                                </form>
                                                <!-- <button class="btn btn-danger delete_category_btn" type="submit" name="delete_category_btn" value="<?= $item['id']; ?>">Delete</button> -->

                                            </td>

                                        </tr>
                                <?php  } }
                                   else
                                   {
                                    echo "No record found";
                                   }
                                ?>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>