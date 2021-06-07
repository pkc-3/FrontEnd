<?
	session_start();
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$name=$_POST["name"];
	$addr=$_POST["addr"];
	$tel=$_POST["tel"];
	$job=$_POST["job"];
	$grade=$_POST["grade"];
	$gender=$_POST["gender"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="update members set pw='$pw', name='$name', addr='$addr',tel='$tel',job='$job', grade='$grade', gender='$gender' where id='$id'";
	$rs=mysqli_query($conn,$sql);
?>
<script>alert("수정이 완료되었습니다.")</script>
<meta http-equiv="refresh" content="0;url='index.php'" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">