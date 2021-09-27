<?php 

include('../includes/conn.php');

$id = $_GET['id'];

$queryExec = mysqli_query($con, "delete from product where p_id='$id'");

if($queryExec)
{
    header('Location:../product_list.php?success');
}
else
{
    header('Location:../product_list.php?failed');

}

?>