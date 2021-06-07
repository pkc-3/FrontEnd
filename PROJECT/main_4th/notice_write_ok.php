<?
	session_start();
	$id=$_SESSION["id"];
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$writeday=date("Y-m-d");
	$content=$_POST["content"];
	if($id=="admin"){
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$query="insert into notice (writer,title,content,writeday) values('$writer','$title','$content','$writeday')";
		$rs=mysqli_query($conn,$query);
	?>
		<script>alert("새 글이 작성되었습니다.");</script>
	<? } 
	else{ ?>
		<script>alert("작성 권한이 없습니다.");</script>
	<? }
?>

<meta http-equiv="refresh" content="0;url=notice.php">

