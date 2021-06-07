<?
	session_start();
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$id=$_SESSION["id"];
	$sql="delete from blog where id='$id'";
	mysqli_query($conn,$sql);
	session_destroy();
?>
<meta http-equiv="refresh" content="0;url=index.php">