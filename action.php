<?php
if (isset($_POST['submit'])) 
      {
	$first_name = $_POST['first_name'];
  	$password = $_POST['password'];
	  if (empty($first_name))
	     {
		echo "Please enter a First_name<br>";
	     } else $first_name = $first_name;

	  if (empty($password))
	     {
		 echo "Please enter a password";
	     } else $password = $password;
	  
	  $text = $first_name . "," . $password . "\
";
	  $fp = fread('test.txt', 'r', "test.txt") or die ('Unable to open file!');

	  if(!empty($first_name) && !empty($password) && !isset($users[$_POST['first_name']]))  

	  	{
        
        header('Location: index.php');
    	}

    	else
		{
			echo "NO";
		}
	  fclose ($fp);

$path = 'test.txt';
}
?>