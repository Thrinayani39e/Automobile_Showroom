<?php 

    require_once("conn.php");
    $Emp_id = $_GET['Emp_id'];
    $query = " select * from employeee where Emp_id='".$Emp_id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Emp_id = $row['Emp_id'];
        $Emp_name = $row['Emp_name'];
        $email_id = $row['email_id'];
        $Designation = $row['Designation'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Form in PHP</h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?ID=<?php echo $Emp_id ?>" method="post">
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $Emp_name ?>">
                                <input type="email" class="form-control mb-2" placeholder=" User Email " name="email" value="<?php echo $email_id ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Age " name="age" value="<?php echo $Designation ?>">
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>