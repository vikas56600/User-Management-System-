<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Login 6 - Bootstrap Brain Component -->
<section class="bg p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-3 p-md-4 p-xl-5 shadow-lg p-3 mb-5 bg-body rounded" >
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Log in</h3>
                </div>
              </div>
            </div>



            <!-- FROM SECTION  -->

            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-2xl btn-primary" type="submit" name="login">Log in now</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="#!" class="link-secondary text-decoration-none">Create new account</a>
                  <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
</body>
</html>

<?php
session_start();
 include('config.php');

 if(isset($_POST['login']))
 {
    $username = $_POST['email'];
    $pwd = $_POST['password'];

 $query = "SELECT * from admin where email = '$username' && password = '$pwd'";

 $data = mysqli_query($conn,$query);
 $total = mysqli_num_rows($data);

 if($total==1)
 {
    $_SESSION['$username']=$username;
    // echo " <script>alert('log-in succesfully')</script>";
    header('location:display.php');
 }
 else
 {
    echo " <script>alert('login failed')</script>";
 }
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


