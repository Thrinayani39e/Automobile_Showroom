<!DOCTYPE html>
<html>
<head>
  <title>Know more Details</title>
</head>
<body style="background-color:#fff;"  >

<h1 style="color:#002c5f; text-shadow: 4px 4px #c0f0fc; font-size:50px;text-align:center"><em>Vehicle Details</em></h1><br><br><br>

<table style="background-color:#9aa5b1;" cellpadding="9" width=100%>
</tr>



<th> Model_id </th>

<th> Model_name </th>

<th> availability </th>

<th> Model_year </th>

<th> Cost </th>
<th> Description </th>



</tr>

<?php

include "connection.php"; // Using database connection file here

$records = mysqli_query($db,"select * from vehicle_type "); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr> <td><?php echo $data['model_id']; ?></td>

<td><?php echo $data['name']; ?></td>

<td><?php echo $data['availability']; ?></td>

<td><?php echo $data['model_year']; ?></td>

<td><?php echo $data['vehicle_cost']; ?></td>

<td><?php echo $data['vehicle_desc']; ?></td>

</tr>
<?php
}
?>
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>