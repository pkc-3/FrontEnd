<?
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="delete from emergency where no=$no";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=main.php">