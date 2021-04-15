<?php

if(isset($_POST['submit']))
{

$first_name = $_POST ['first_name'];
$last_name = $_POST ['last_name'];
$password = $_POST ['password'];

$array_data = [
  'first_name' => $first_name,
  'last_name' => $last_name,
  'password' => $password
];
 
file_put_contents("test.txt",$array_data);

}

?>

<p>
Welcome <?php echo $first_name; ?> 
<p>
      Click <a href="login.php">Login.</a>
</p>
