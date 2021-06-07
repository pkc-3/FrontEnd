<?
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	for($i=1;$i<=200;$i++){
		$sql="insert into notice(title,content,writer,writeday) values('공지사항테스트$i','냉무','admin','2021-04-16')";
		mysqli_query($conn,$sql);
	}
?>