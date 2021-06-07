<?
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="delete from notice where no='$no'";
	$rs=mysqli_query($conn,$sql);
?>
<script>alert("삭제되었습니다")</script>
<meta http-equiv="refresh" content="0;url=notice.php" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">