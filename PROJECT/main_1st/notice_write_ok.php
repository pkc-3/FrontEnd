<?
	session_start();
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writer=$_SESSION["id"];
	$writeday=date("Y-m-d");
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="insert into notice (title,content,writer,writeday) values ('$title','$content','$writer','$writeday')";
	mysqli_query($conn,$sql);
?>
<script>alert("새 글이 작성되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=notice.php" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">