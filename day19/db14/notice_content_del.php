<?
	$no=$_GET["no"];
	$p_no=$_GET["p_no"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="delete from notice_re where no=$no";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=notice_content.php?no=<?=$p_no?>">