
<?php 

$Player_Name=$_POST['Player Name'];
$Father_Name=$_POST['Father Name'];

$con=mysql_connect("localhost","root","");
if(!$con)
{
	die('Could not connect:' .mysql_error());
}

mysql_select_db("baseball_signups",$con);

$query="INSERT INTO signupforms(Player Name, Father Name)VALUES('$Player_Name', '$Father_Name')";
if(!mysql_query($query,$con))
{
	die('Error in inserting records' .mysql_error);
}else
{
	echo "Data Inserted";
}
 
 
?>
