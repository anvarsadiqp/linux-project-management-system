
<?php
session_start();
if(isset($_SESSION['user']))
{
	unset($_SESSION['user']);
	echo 'done';
	header('Location:index.php');
}
header('Location:index.php');
?>
