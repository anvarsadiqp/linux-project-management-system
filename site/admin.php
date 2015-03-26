<?php
include("dbConfig.php");
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
	<br><br>
	<center>
		<h1>Quizent Technologies</h1>
<?php
echo date();
?>
<a style=" display:box; float :left; margin-top:10px;margin-left:50px;
border: medium none;

cursor: pointer;
height: 25px;
width: 75px !important;
padding: 5px 15px 5px 15px;
"
href='http://projects.quizent.com/phpma/' > <img src="http://projects.quizent.com/phpma/themes/pmahomme/img/logo_left.png"></a>

<a style=" display:box; float :right; margin-top:10px;margin-right:50px;background: none repeat scroll 0 0 #0D92E1;
border: medium none;
color: #FFFFFF;
cursor: pointer;
font: bold 15px/25px Arial,Helvetica,sans-serif;
height: 25px;
width: 75px !important;
padding: 5px 15px 5px 15px;
"
href='logout.php' > Logout</a>

<a style=" display:box; float :right; margin-top:10px;margin-right:20px;background: none repeat scroll 0 0 #0D92E1;
border: medium none;
color: #FFFFFF;
cursor: pointer;
font: bold 15px/25px Arial,Helvetica,sans-serif;
height: 25px;
width: 75px !important;
padding: 5px 15px 5px 15px;
"
href='create.php' > Create</a>
	<br><br><br><br>
	<table class="reference notranslate">
  <tbody>


  <tr>
    <th style="width:5%">PID</th>
    <th style="width:60%">Project URL</th>
    <th style="width:15%">Creator</th>
    <th style="width:15%">Function</th>
  </tr>
<?php
$q1 = mysql_query("select * from data where state='1'");
while( $res = mysql_fetch_array($q1))
{
?>
<tr>
<td style="width:5%">LPM-<?php echo $res['0']; ?></td>
<td style="width:60%"><a href="http://<?php echo $res['2']; ?>/" target="_blank"><?php echo $res['2']; ?></a></td>
<td style="width:15%"><?php echo $res['4']; ?></td>
<th style="width:15%">
	<a href="function.php?name=<?php echo $res['1']; ?>&id=<?php echo $res['0']; ?>&fun=bak">Bakup</a>&nbsp;&nbsp;
	<a href="function.php?name=<?php echo $res['1']; ?>&id=<?php echo $res['0']; ?>&fun=dow">Download</a>&nbsp;&nbsp;
	<a style="color:red;" href="function.php?name=<?php echo $res['1']; ?>&id=<?php echo $res['0']; ?>&fun=del">Delete</a></a></th>
</tr>
<?php
}
?>

</tbody>
</table>
</center>
</body>
