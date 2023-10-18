<?php 
include('functions/userfunctions.php');

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = "You are already logged in";
    header('location: index.php');
    exit();
}
include('includes/header.php')   ?>
    <div class="py-5">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-6">
                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-warning alert-dismissible fade show position-absolute" role="alert" style="width: 100%;">
                    <strong>Hey!</strong> <?= $_SESSION['message']; ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php 
                unset($_SESSION['message']);
                endif; ?>
            <div class="card" style="background: #FFF1FA;">
                <div class="card-header" style="background:pink;">
                    <h4 class="text-center fw-bold" >Register</h4>

                </div>
                <div class="card-body">
                        <form action="functions/authcode.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter your name"  required>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone number" required>
                                  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required>
                                  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label  class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required>
                                </div>
                               
                                <button type="submit" name="register_btn"  class="btn mx-auto d-block" style="background: pink;">Submit</button>
                        </form>
                </div>
            </div>
                
        </div>
        </div>
        </div>
    </div>
<?php include('includes/footer.php')   ?>
    