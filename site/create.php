<?php
session_start(); 
if (empty($_SESSION['user']))
{
	header('location:index.php');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Linux Project Managment System</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<center>
	<form name="frmregister" action="function.php" method="post" >
		<table class="form" border="0">

			<tr>
			<td></td>
				<td style="color:red;">
			</tr> 
			
			<tr>
				<th><label for="name"><strong>Project Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="20" /></td>
			</tr>
			<tr>
				<th><label for="name"><strong>Password:</strong></label></th>
				<td><input class="inp-text" name="b" id="password" type="password" size="20" /></td>
			</tr>
			<tr>
				<tr>
				<th><label for="name"><strong>Project Type:</strong></label></th>
				
				<td><select class="inp-text" name="c" id="name" type="text" >
					<option value="1">Core PHP Project</option>
					<option value="2">Drupal Project</option>
					<option value="3">Wordpress Project</option>
					<option value="4">HTML Project</option>
				</select>
				</td>
			</tr>
			<tr>
				<th><label for="name"><strong>Your Name:</strong></label></th>
				<td><input class="inp-text" name="d" id="name" type="text" size="20" /></td>
			</tr>
			<td></td>
				<td class="submit-button-right"><center>
				<input class="send_btn1" type="submit" value="Create new Project" alt="Submit" title="Create new Project" />
				</center>
			</tr>
		</table>
	</form>
</center>
</body>
</html>
