<?
	session_start();
	$no=$_POST["no"];
	$content=$_POST["content"];
	$writer=$_SESSION["id"];
	$writeday=date("Y-m-d");
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="insert into inc_re (content,writer,writeday,p_no) values ('$content','$writer','$writeday',$no)";

	mysqli_query($conn,$sql);

?>
<meta charset="utf-8" http-equiv="refresh" content="0;url=inc_content.php?no=<?=$no?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

