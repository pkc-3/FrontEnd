<?
	$no=$_POST["no"];
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$query="update qna set writer='$writer',title='$title',content='$content' where no=$no";
	mysqli_query($conn,$query);
?>
<script type="text/javascript">alert("수정이 완료되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=qna.php">