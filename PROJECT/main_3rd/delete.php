<?
	session_start();
	$id=$_SESSION["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="delete from members where id='$id'";
	$rs=mysqli_query($conn,$sql);
	session_destroy();
?>
<script>alert("ID가 삭제되었습니다.")</script>
<meta http-equiv="refresh" content="0;url='index.php'" charset="utf-8">
