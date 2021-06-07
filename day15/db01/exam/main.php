<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?
		$conn=mysqli_connect("localhost","root","autoset","db02");
		$sql="select * from customer";
		$rs=mysqli_query($conn,$sql);
	?>
		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
				<th>이름</th>
				<th>주소</th>
				<th>전화번호</th>
				<th>나이</th>
				<th>직업</th>
				<th>연봉</th>
				<th>보유차종</th>
			</tr>
			<? 
			while($row=mysqli_fetch_array($rs)){
				?>
			<tr>
				<td><?=$row["name"]?></td>
				<td><?=$row["address"]?></td>
				<td><?=$row["tel"]?></td>
				<td><?=$row["age"]?></td>
				<td><?=$row["job"]?></td>
				<td><?=$row["salary"]?></td>
				<td><?=$row["car"]?></td>
			</tr>
			<? } 
			?>
			<tr>
				<td colspan="7" align="center">
					<input type="button" value="추가하기" onclick="location.href='write.php'">
				</td>
			</tr>
		</table>
</body>
</html>