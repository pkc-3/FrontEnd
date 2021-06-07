<?
	$id=$_GET["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="delete from member2 where id='$id'";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=main.php">