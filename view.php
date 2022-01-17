<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','automobile_showroom');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}
    require_once("conn.php");
    $query = " select * from employeee ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Emp_id </td>
                                <td> Emp_name </td>
                                <td> email_id </td>
                                <td> Designation </td>
                                <td> Salary </td>
                                <td>Ph_no</td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Emp_id = $row['Emp_id'];
                                        $Emp_name = $row['Emp_name'];
                                        $email_id = $row['email_id'];
                                        $Designation = $row['Designation'];
                                        $Salary = $row['Salary'];
                                        $Ph_no = $row['Ph_no'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $Emp_id ?></td>
                                        <td><?php echo $Emp_name ?></td>
                                        <td><?php echo $email_id ?></td>
                                        <td><?php echo $Designation ?></td>
                                        <td><?php echo $Salary ?></td>
                                        <td><?php echo $Ph_no ?></td>
                                        <td><a href="upd.php?Emp_id=<?php echo $Emp_id ?>">Edit</a></td>
                                        <td><a href="delete.php?Del=<?php echo $Emp_id ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>