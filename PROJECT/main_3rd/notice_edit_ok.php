<?
	session_start();
	$id=$_SESSION["id"];
	$no=$_POST["no"];
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	if($id==$writer){
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$query="update notice set title='$title',content='$content' where no=$no";
		$rs=mysqli_query($conn,$query);
	?>
		<script>alert("수정이 완료되었습니다.");</script>
	<? } 
	else{ ?>
		<script>alert("작성자가 아닙니다.");</script>
	<? }
?>

<meta http-equiv="refresh" content="0;url=notice.php">

