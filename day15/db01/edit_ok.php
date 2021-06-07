<?
	$no=$_POST["no"];
	$name=$_POST["name"];
	$tel=$_POST["tel"];
	$email=$_POST["email"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="update emergency set name='$name',tel='$tel',email='$email' where no=$no";
	mysqli_query($conn,$sql);

?>
<meta http-equiv="refresh" content="0;url=main.php">