<?php
include("dbConfig.php");
session_start(); 
if (empty($_SESSION['user']))
{
	header('location:index.php');
}

if (isset($_POST['name']) || ($_GET['name']))
{
$pro =$_POST['name'];
$pro1 =$_GET['name'];
$name = mysql_real_escape_string(stripslashes($pro));
$name1 = mysql_real_escape_string(stripslashes($pro1));

$dn = mysql_num_rows(mysql_query('select name from data where name="'.$name.'"'));
	if($dn==0)
	{
		echo "proceed for account creation";
		// ========= Create Function ==========
		If(isset ($_POST['name']) && ($_POST['b']) && ($_POST['c']) && ($_POST['d']) )
			{
			$as = $_POST['name'];
			$as = escapeshellarg("$as");
			$ad = $_POST['b'];
			$ad = escapeshellarg("$ad");
			$af = $_POST['c'];
			$af = escapeshellarg("$af");		
			echo $ad;echo $ad;echo $af;
			//exit();
			$sh = shell_exec("/usr/local/lpm/conf/create.sh $as $ad $af 2>&1");
//			echo $sh;
//			exit();

			$pname = $_POST['name'];
			$purl = $pname.".quizent.com";
			$puser = $_POST['d'];

			$a = "INSERT INTO `lpm`.`data` ( `name`, `url`, `state`, `Creator`) VALUES ('$pname', '$purl', '1', '$puser');";
			mysql_query($a);
			header('location: admin.php');
			}
			else
			{
				echo "Sorry something is missing";
			}
	}
	else
	{
		echo "sorry there is an account";
	}	
// ========= Backup Function ==========
	
if($_GET['fun'] == "bak")
	{
	$as = $_GET['name'];
	$as = escapeshellarg("$as");
	$sh = shell_exec("/usr/local/lpm/conf/backup.sh  $as 2>&1");

	header('location: admin.php');	
	
	}
// ========= Download Function ==========
	
if($_GET['fun'] == "dow")
	{
	$as = $_GET['name'];
	$as = escapeshellarg("$as");
	$sh = shell_exec("/usr/local/lpm/conf/download.sh  $as 2>&1");
		
	header('location: admin.php');	
	
	}

// ========= Delete Function ==========
if($_GET['fun'] == "del")
	{
	
	$as = $_GET['name'];


  //echo '<input type="button" onclick="ConfirmDelete()" value="DELETE ACCOUNT">';
	$as = escapeshellarg("$as");
	$sh = shell_exec("/usr/local/lpm/conf/delete.sh  $as 2>&1");
//exit();		
	$idd =$_GET['id'];
	//mysql_query("UPDATE data SET state='2' WHERE pid='".$idd."'");
	mysql_query("DELETE FROM data WHERE pid='".$idd."'");
	echo "removed";
//exit();
	header('location: admin.php');	
	
	}
}
else
{
	header('location:index.php');
}
?>
