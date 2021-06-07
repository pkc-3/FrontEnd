<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<?
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$query="select * from qna order by f_no desc,no asc";
		$rs=mysqli_query($conn,$query);

	?>
	<br><br>
	<table class="table1">
		<tr>
			<th>글제목</th>
			<th>작성자</th>
			<th>작성일</th>
			<th>조회수</th>
		</tr>
		<? while($row=mysqli_fetch_array($rs)){?>
		<tr>
			<td><?=$row["title"]?></td>
			<td><?=$row["writer"]?></td>
			<td><?=$row["writeday"]?></td>
			<td><?=$row["hit"]?></td>
		</tr>
		<? } ?>
		<tr>
			<td align="center" colspan="4">
				<input type="button" class="bt" value="질문하기" onclick="location.href='qna_write.php'">
			</td>
		</tr>
	</table>
</body>
</html>