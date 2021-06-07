<?
	$no=$_GET["no"];
	$p_no=$_GET["p_no"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="delete from inc_re where no=$no";
	mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=inc_content.php?no=<?=$p_no?>"
 charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">