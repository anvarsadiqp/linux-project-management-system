<?php 

if (empty($_POST['name']) || ($_POST["pass"]))
{
	header('Location:index.php');
}
//include "dbConfig.php";

    $name = $_POST["name"];
    $pass = sha1($_POST["pass"]);
	 if ($name == '' || $pass == '') {
        echo "You must enter all fields";
    } else {
		echo $pass;
		
        //$sql = "SELECT * FROM members WHERE name = '$name' AND password = '$pass'";
        //$query = mysql_query($sql);

        //if ($query === false) {
        //    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
        //    exit;
        //}

        //if (mysql_num_rows($query) > 0) {
        $pa ="d0354ffe8389ee43a6ec07ed68d3e7bd92db29b0";
        //if($pa == sha1($_POST['pass']))
        //{
		//	echo "yes";
		//}
		//exit();
	$pa =$_POST['pass'];        
         if ($name == "lpm" and $pa == "lpm123!@#")
         {
			 echo "hai";
         session_start();
         $_SESSION['user'] = "1";
         header('location: admin.php');
            exit;
        }

        echo "Username and password do not match";
    }

?>

