<?php 

include('../includes/conn.php');

if(isset($_POST['edit']) && $_POST['edit'] == 'product')
{
    
   $name = $_POST['name'];
   $price = $_POST['price'];
   $color = $_POST['color'];
   $quantity = $_POST['qty'];
   $desc = $_POST['desc'];
   $company = $_POST['company'];
   $pid = $_POST['pid'];

  $query = "update product set p_name='$name', p_price='$price', p_color='$color', p_quantity='$quantity',
  p_desc='$desc', p_company = '$company' where p_id='$pid'";

  $execute = mysqli_query($con, $query);

  if($execute)
  {
      header('Location:../product_list.php?success');
  }
  else{
    header('Location:../product_list.php?Failed');
  }
   
}
else
{
    echo "sorry  Invalid access";
}

?>