<?
	session_start();
	$no=$_POST["no"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="update notice set title='$title',content='$content' where no=$no";
	$row=mysqli_query($conn,$sql);
?>
<meta http-equiv="refresh" content="0;url=notice_content.php?no=<?=$no?>"
 charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">