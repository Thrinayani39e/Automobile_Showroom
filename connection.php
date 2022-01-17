<?php

$db = mysqli_connect("localhost","root","","automobile_showroom");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
