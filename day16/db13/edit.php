<?
	$id=$_GET["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from member2 where id='$id'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="edit_ok.php">
		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
				<td>아이디</td>
				<td><input type="text" name="id" value="<?=$row["id"]?>" readonly>(아이디는 수정불가)
				</td>
			</tr>
			<tr>
				<td>패스워드</td>
				<td><input type="text" name="pw" value="<?=$row["pw"]?>">
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="name" value="<?=$row["name"]?>">
				</td>
			</tr>
			<tr>
				<td>주소</td>
				<td><input type="text" name="addr" value="<?=$row["addr"]?>">
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type="text" name="tel" value="<?=$row["tel"]?>">
				</td>
			</tr>
			<tr>
				<td>직업</td>
				<td><input type="text" name="job" value="<?=$row["job"]?>">
				</td>
			</tr>
			<tr>
				<td>최종학력</td>
				<td><input type="text" name="grade" value="<?=$row["grade"]?>">
				</td>
			</tr>
			<tr>
				<td>성별</td>
				<td>
					<input type="radio" name="gender" value="m" checked>남성
					<input type="radio" name="gender" value="f" <?if($row["gender"]=="f"){?>checked <?}?>>여성
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="전송" onclick="send()">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

<script>
	function send() {
		document.frm1.submit();
	}
</script>