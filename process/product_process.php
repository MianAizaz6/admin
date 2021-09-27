<?php 

include('../includes/conn.php');

if(isset($_POST['add']) && $_POST['add'] == 'product')
{
   $name = $_POST['name'];
   $price = $_POST['price'];
   $color = $_POST['color'];
   $quantity = $_POST['qty'];
   $desc = $_POST['desc'];
   $company = $_POST['company'];

   $photo = $_FILES['photo']['name'];
    $type = $_FILES['photo']['type'];
    $size = $_FILES['photo']['size'];
    $temp = $_FILES['photo']['tmp_name'];

    if($type == 'image/png' || $type == 'image/jpg' || $type = 'image/jpeg')
    {

   $query = "insert into product set p_name='$name', p_price='$price', p_color='$color', p_quantity='$quantity',
   p_desc='$desc', com_id = '$company', p_image='$photo'";
 
   $go = mysqli_query($con,$query);
   if($go)
  {

    $uplaod = move_uploaded_file($temp,"../uploads/".$photo);

    if($uplaod)
    {
      header('Location:../add-product.php?success');
    }
    else
    {
      header('Location:../add-product.php?failed');
    }
  }
  else{
    header('Location:../add-product.php?InsertionError');
  }

    }
    else
    {
      echo 'Sorry Type Error';
    }

  

  // if($go)
  // {
  //     header('Location:../add-product.php?success');
  // }
  // else{
  //   header('Location:../add-product.php?failed');
  // }
   
}
else
{
    echo "sorry submit the form first";
}

?>