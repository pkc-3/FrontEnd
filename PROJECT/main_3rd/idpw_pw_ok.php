<?
	session_start();
	$new_pw=$_POST["new_pw"];
	$id=$_POST["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="update members set pw='$new_pw' where id='$id'";
	$rs=mysqli_query($conn,$sql);
?>
<script>alert("비밀번호가 변경되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=login.php" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">