
<?php 

$conn = new mysqli('localhost','root','','automobile_showroom');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
    require_once("conn.php");
    $Emp_id = $_GET['Emp_id'];
    $query = " select * from employeee where Emp_id='".$Emp_id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Emp_id = $row['Emp_id'];
        $Emp_name = $row['Emp_name'];
        $email_id = $row['email_id'];
        $Designation = $row['Designation'];
        $Salary = $row['Salary'];
        $Ph_no = $row['Ph_no'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-primary text-white text-center py-3"> Update</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?Emp_id=<?php echo $Emp_id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" Emp_name " name="Emp_name" value="<?php echo $Emp_name ?>">
                                <input type="email" class="form-control mb-2" placeholder=" email_id " name="email_id" value="<?php echo $email_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Designation " name="Designation" value="<?php echo $Designation ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Salary " name="Salary" value="<?php echo $Salary ?>">
                                <input type="text" class="form-control mb-2" placeholder=" Ph_no " name="Ph_no" value="<?php echo $Ph_no?>">
                                <button class="btn btn-primary" name="update" >Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>