<?
	$num=$_POST["num"];
	$name=$_POST["name"];
	$kor=$_POST['kor'];
	$eng=$_POST['eng'];
	$math=$_POST['math'];
	$tot=$kor+$eng+$math;
	$avr=$tot/3;
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="insert into main(num,name,kor,eng,math,tot,avr) values('$num','$name','$kor','$eng','$math','$tot','$avr')";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=main.php">