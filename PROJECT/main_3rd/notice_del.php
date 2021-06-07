<?
	$no=$_GET["no"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$query="delete from notice where no=$no";
	mysqli_query($conn,$query);
?>
<script type="text/javascript">alert("삭제 되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=notice.php">
