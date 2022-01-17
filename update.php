<?php 

$conn = new mysqli('localhost','root','','automobile_showroom');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
    require_once("conn.php");

    if(isset($_POST['update']))
    {   $Emp_id = $_GET['Emp_id'];
        $Emp_name = $_POST['Emp_name'];
        $email_id = $_POST['email_id'];
        $Designation = $_POST['Designation'];
        $Salary = $_POST['Salary'];
        $Ph_no = $_POST['Ph_no'];

        $query = " update employeee set Emp_name = '".$Emp_name."', email_id='".$email_id."',Designation='" .$Designation."', Salary='" .$Salary."' , Ph_no='" .$Ph_no."'where Emp_id='".$Emp_id."'";
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