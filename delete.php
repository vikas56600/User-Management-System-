<?php
include('config.php');

$id = $_GET['id'];

$query="DELETE from form where id='$id' ";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Recored deleted')</script>";
    ?>

    <meta http-equiv="refresh" content="0; url=http://localhost//php_test/log_in/display.php">
    
        <?php
}
else{
    echo "<script>alert('Recored failed to deleted')</script>";
}



?>