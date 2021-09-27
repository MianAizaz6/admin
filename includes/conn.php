<?php
$con = mysqli_connect("localhost","root", "") or die('server connection error');

$db = mysqli_select_db($con,"faisal") or die('database connection error');

?>