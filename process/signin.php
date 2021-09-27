<?php 
include('../includes/conn.php');

if(isset($_POST['log']) && $_POST['log'] == 'in')
{
    $userName = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from admin where username='$userName' AND password = '$password'";

    $execute = mysqli_query($con,$query);

    $num = mysqli_num_rows($execute);

    if($num > 0)
    {
            $record = mysqli_fetch_array($execute);
            session_start();
            $_SESSION['Username'] = $record['username'];
            $_SESSION['id'] = $record['admin_id'];

            header('Location:../home.php?success');
    }
    else
    {
       header('Location:../index.php?failed');
    }
   

}
else
{
    echo 'Not login';
}

?>