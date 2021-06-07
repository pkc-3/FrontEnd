<?
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$name=$_POST["name"];
	$addr=$_POST["addr"];
	$tel=$_POST["tel"];
	$job=$_POST["job"];
	$grade=$_POST["grade"];
	$gender=$_POST["gender"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="insert into blog(id,pw,name,addr,tel,job,grade,gender) values('$id','$pw','$name','$addr','$tel','$job','$grade','$gender')";
	$rs=mysqli_query($conn,$sql);
	mysqli_fetch_array($rs);
?>
<script>alert("가입이 완료되었습니다")</script>
<meta http-equiv="refresh" content="0;url=index.php">
<meta charset="utf-8">