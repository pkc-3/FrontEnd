<?
	$name=$_POST["name"];
	$address=$_POST["address"];
	$tel=$_POST["tel"];
	$age=$_POST["age"];
	$job=$_POST["job"];
	$salary=$_POST["salary"];
	$car=$_POST["car"];
	$conn=mysqli_connect("localhost","root","autoset","db02");
	$sql="insert into customer values('$name','$address','$tel','$age','$job','$salary','$car')";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=main.php">