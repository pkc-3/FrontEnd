<?
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	for($i=1;$i<=100;$i++){
		$sql="insert into inc(title,content,writer,writeday,fname) values('테스트중입니다. $i','유용하게 쓰세요','admin','2021-05-04','test.html')";
		mysqli_query($conn,$sql);
	}
?>