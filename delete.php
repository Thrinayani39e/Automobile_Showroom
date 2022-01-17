<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','automobile_showroom');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
if(isset($_GET['Del']))
         {
             $Emp_id = $_GET['Del'];
             $query = " delete from employeee where Emp_id = '".$Emp_id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:view.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:view.php");
         }
 
         ?>