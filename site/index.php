<?php
include("dbConfig.php");
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
		<h1>Linux Project Managment System</h1>
<?php
echo date();
?>
	<br><br><br><br>
	<table class="reference notranslate">
  <tbody>


  <tr>
    <th style="width:5%">PID</th>
    <th style="width:60%">Project URL</th>
    <th style="width:15%">Creator</th>
    <th style="width:15%">Status</th>
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
<td style="width:15%;color:green;">In-progress</td>
</tr>
<?php
}
?>

</tbody>
</table>
</center>
</body>
