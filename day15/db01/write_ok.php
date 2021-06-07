<?
	$name=$_POST["name"];
	$tel=$_POST["tel"];
	$email=$_POST["email"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="insert into emergency (name,tel,email) values('$name','$tel','$email')";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=main.php"> <!-- 메인으로 다시 넘김 데이터만 db로 인서트 하고 끝냄 -->