<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="5">
		<tr> 
			<th>아이디</th>
			<th>이름</th>
			<th>주소</th>
			<th>전화번호</th>
			<th>직업</th>
			<th>학력</th>
			<th>성별</th>
		</tr>
		<?
			$conn=mysqli_connect("localhost","root","autoset","mydb");
			$sql="select * from member2";
			$rs=mysqli_query($conn,$sql); 

			while($row=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td>
				<a href="content.php?id=<?=$row["id"]?>">
					<?=$row["id"]?></a>
			</td>
			<td><?=$row["name"]?></td>
			<td><?=$row["addr"]?></td>
			<td><?=$row["tel"]?></td>
			<td><?=$row["job"]?></td>
			<td><?=$row["grade"]?></td>
			<td><?=$row["gender"]?></td>
		</tr>
		<? } ?>
		<tr>
			<td colspan="7" align="center">
				<input type="button" value="추가하기" onclick="location.href='write.php'"></td>
		</tr>
	</table>
</body>
</html>