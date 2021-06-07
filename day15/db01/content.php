<?
	$no=$_GET['no']; //main에서 찍은값 한 건만 읽어온다. while 문장 필요없다.
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from emergency where no=$no";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellspacing="5" cellpadding="10">
		<tr>
			<td>이름</td>
			<td><?=$row["name"]?></td>
		</tr>
		<tr>
			<td>전화번호</td>
			<td><?=$row["tel"]?></td>
		</tr>
		<tr>
			<td>이메일 주소</td>
			<td><?=$row["email"]?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="수정" onclick="location.href='edit.php?no=<?=$no?>'">
				<input type="button" value="삭제" onclick="del()">
			</td>
		</tr>
	</table>
</body>
</html>

<script>
	function del() {
		if(confirm("정말로 삭제하시겠습니까?")){
			location.href="del.php?no="+<?=$no?>;
		}
	}
</script>