<?
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writeday=date("Y-m-d");
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$query="insert into notice (writer,title,content,writeday) values('$writer','$title','$content','$writeday')";
	$rs=mysqli_query($conn,$query);
	mysqli_fetch_array($rs);
?>
<script type="text/javascript">alert("새 공지사항이 작성되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=notice.php">

