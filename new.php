<!DOCTYPE html>
<html>
<head>
  <title>Display all records of a Employee</title>
</head>
<body style="background-color:#a2cfeb;"  >

<h1 style="color:#002c5f; text-shadow: 4px 4px #c0f0fc; font-size:50px;text-align:center"><em>Employee Details</em></h1><br><br><br>
<center><table style="background-color:#ffffff;" border=10px width=80%>
</tr>

<th> Emp_id</th>

<th> Emp_name </th>

<th> Email </th>

<th> designation </th>

<th> salary </th>

<th> ph_no </th>



</tr>
<?php
                    
                    $conn = mysqli_connect("localhost","root","","automobile_showroom");
                    




                    
                    
                        $Emp_id = $_POST['Emp_id'];
                        $query = "select * from employeee where Emp_id ='$Emp_id'";
                        $result=$conn->query($query);
                      
                        while($row = $result->fetch_assoc())
                        {
                            
                           echo "<tr>
                                <td>".  $row['Emp_id']  ."</td>
                                <td> ".  $row['Emp_name'] ."</td>
                                <td> ". $row['email_id'] ." </td>
                                <td> ". $row['Designation'] ." </td>
                                <td> ". $row['Salary'] ." </td>
                                <td> ". $row['Ph_no'] ." </td>
                            </tr>   " ;


                            
                        }


                    
                    ?></table></center></body></html>