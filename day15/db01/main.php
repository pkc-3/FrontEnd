<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- 서버사이드 백엔드 언어가 구동되어야 함 -->
	<?
		//php언어는 변수명앞에 $를 붙여준다.
		//db에 접속하기 위한 mysqli_connect라는 함수를 실행
		//그 결과값을 토큰으로 $conn에 넣어준다. db에 접속하는 문법
		$conn=mysqli_connect("localhost","root","autoset","mydb");//원격 연결(mysqli_connect)
		$sql="select * from emergency";
		$rs=mysqli_query($conn,$sql);//mysqli에서 conn과 sql 기능 원격 실행(mysqli_query)
	?>
	<table border="1" cellspacing="5" cellpadding="10">
		<tr>
			<th>이름</th>
			<th>전화번호</th>
			<th>이메일주소</th>
		</tr>
		<? 
			while($row=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td><a href="content.php?no=<?=$row["no"]?>"><?=$row["name"]?></a></td>
			<td><?=$row["tel"]?></td>
			<td><?=$row["email"]?></td>
		</tr>
		<? } ?>
		<tr>
			<td colspan="3" align="center">
				<input type="button" value="추가하기" onclick="location.href='write.php'">
			</td>
		</tr>
	</table>
</body>
</html>