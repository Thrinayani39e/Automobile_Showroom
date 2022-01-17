<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body style="background-color:#a2cfeb;"  >

<h1 style="color:#002c5f; text-shadow: 4px 4px #c0f0fc; font-size:50px;text-align:center"><em>Employee Details</em></h1><br><br><br>

<table border="20px" width=100%>
</tr>

<th> Emp_id</th>

<th> Emp_name </th>

<th> Email </th>

<th> designation </th>

<th> salary </th>

<th> ph_no </th>



</tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from employeee "); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr> <td><?php echo $data['Emp_id']; ?></td>

<td><?php echo $data['Emp_name']; ?></td>

<td><?php echo $data['email_id']; ?></td>

<td><?php echo $data['Designation']; ?></td>

<td><?php echo $data['Salary']; ?></td>

<td><?php echo $data['Ph_no']; ?></td>

</tr>
<?php
}
?>
</table>
<br>
<a href="view.php" ><button type="submit">Modify Details</button></a>


<?php mysqli_close($db); // Close connection ?>

</body>
</html>