<?php
session_start();
include("config.php");
error_reporting(0);

$username=$_SESSION['$username'];
if($username!= true)
{
    header('location:login.php');
    
}

$query="select * from form";
$data = mysqli_query($conn,$query);


$total = mysqli_num_rows($data);

if($total >0)
{
    ?>
    <table class="table table-striped-columns mt-5" >
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>DATE OF BIRTH</th>
        <th>E-MAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
        <th>HIGH SCHOOL</th>
        <th>GRADUATION YEAR</th>
        <th>curr_date</th>
        <th>Operation</th>
<?php
    while($result= mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td> ". $result["id"]."</td>
        <td>". $result["fname"]."</td>
        <td>". $result["lname"]."</td>
        <td>". $result["dob"]."</td>
        <td>". $result["email"]."</td>
        <td>". $result["phone"]."</td>
        <td>". $result["address"]."</td>
        <td>". $result["hight_school"]."</td>
        <td>". $result["grad_dob"]."</td>
        <td>". $result["curr_date"]."</td>      

        <td><a class href='update.php?id=$result[id]'> <input class='btn btn-primary' type='submit' value='UPDATE'></a>
        <a class href='delete.php?id=$result[id]'> <input class='btn btn-danger' type='submit' value='DELETE'></a>
        
        </td>       
        </tr>
        ";
    }
}
?>
</table>

<!-- LogOut button -->
<a href="logout.php">
<input type="submit" value="LotOut now" class=""btn btn-primary>
</a>                
                

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



