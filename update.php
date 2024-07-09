<?php include('config.php');
session_start();


$id = $_GET['id'];
// echo $id;

$username=$_SESSION['$username'];
if($username!= true)
{
    header('location:login.php');
    
}

$query="select * from form where id='$id' ";
$data = mysqli_query($conn,$query);
$result= mysqli_fetch_assoc($data);
// echo "<pre>";
// print_r($result);
// echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    
<body>
          <!-- Header -->
<div class="container mt-5 ">
<h2 class="text-center mb-4 ">Update Student Details</h2>
 
             <!-- Form body -->

<form action="<?php $_SERVER['PHP_SELF']; ?>" id="registeration_form" method="POST" >

            <!-- Personal info -->
 <div class=" form-group mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input type="text" name="first_name" id="FirstName"  value="<?php  echo $result['fname'] ;?> " class="form-control" placeholder="Enter your first name" />
    <h5 id="FirstNamecheck"></h5>
 </div>

 <div class=" form-group mb-3">
    <label for="lastName"  class="form-label">last Name</label>
    <input type="text" name="lastName" id="LastName" class="form-control" value="<?php  echo $result['lname'] ;?> "  placeholder="Enter your last name" />
    <h5 id="LastNamecheck"></h5>

 </div>

 <div class=" form-group mb-3">
    <label for="dateofBirth" class="form-label">Date of Birth</label>
    <input type="date" name="dateofBirth" value="<?php  echo $result['dob'] ;?> "id="DateofBirth" class="form-control"  />
    <h5 id="DateofBirthcheck"></h5>

 </div>
 
           <!-- Contact Details -->
<div class=" form-group mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="text" value="<?php  echo $result['email'] ;?> " name="email" id="Email" class="form-control" placeholder="Enter your E-mail ID" />
    <h5 id="emailcheck"></h5>
 </div>

 <div class=" form-group mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" name="phone" id="Phone" value="<?php  echo $result['phone'] ;?> " class="form-control" placeholder="Enter your Phine number" />
    <h5 id="phonecheck"></h5>

 </div>
 
 <div class=" form-group mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" value="<?php  echo $result['address'] ;?> " id="Address" class="form-control" placeholder="Enter your Address" />
    <h5 id="addresscheck"></h5>

 </div>

<!-- Educational Background -->
<div class=" form-group mb-3">
    <label for="highschool" class="form-label">High School</label>
    <input type="text" name="highschool" id="Highschool" value="<?php  echo $result['hight_school'] ;?> " class="form-control" placeholder="School Name" />
    <h5 id="highschoolcheck"></h5>
</div>

<div class=" form-group mb-3">
    <label for="yearofgraduation" class="form-label">Year of Graduation</label>
    <input type="date" name="yearofgraduation" id="Yearofgraduation" value="<?php  echo $result['grad_dob'] ;?> " class="form-control" placeholder="" />
    <h5 id="yearofgraduationcheck"></h5>
 </div>


      <!-- Submission -->
    <button type="submit" id="submitbtn" name="submitbutton" class="btn btn-primary mb-3">UPDATE</button>
</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="register1.js"></script>
 
</body>
</html>



<?php
if(isset($_POST['submitbutton']))
{
    $fname =       $_POST['first_name'];
    $lname =       $_POST['lastName'];
    $dob =         $_POST['dateofBirth'];
    $email =       $_POST['email'];
    $phone =       $_POST['phone'];
    $address =     $_POST['address'];
    $hight_school= $_POST['highschool'];
    $grad_dob =    $_POST['yearofgraduation'];


// $query = "INSERT INTO form(fname, lname ,dob ,email, phone , address ,hight_school, grad_dob ) values('$fname', '$lname','$dob','$email','$phone','$address','$hight_school','$grad_dob')";

$query = "UPDATE form set fname='$fname', lname='$lname'  ,email='$email', phone='$phone' , address='$address' ,hight_school='$hight_school' WHERE id='$id'";

   $data = mysqli_query($conn,$query);

   if($data)
   {
    echo " <script>alert('Record updated')</script>";
    ?>

<meta http-equiv="refresh" content="5; url=http://localhost//php_test/log_in/display.php">

    <?php
   }
   else{
    echo"<script>alert('failed to update')</script>";
   }
}

else{
   echo "value not set";
}
?>

<input type="submit">