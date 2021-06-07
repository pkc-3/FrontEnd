<?	
	$id=$_GET["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from member2 where id='$id'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
	//데이터는 오직 한건만 물고 오기때문에 while 문장 필요없이 페치.
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
				<td>아이디</td>
				<td><?=$row["id"]?></a>
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><?=$row["name"]?>
				</td>
			</tr>
			<tr>
				<td>주소</td>
				<td><?=$row["addr"]?>
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><?=$row["tel"]?>
				</td>
			</tr>
			<tr>
				<td>직업</td>
				<td><?=$row["job"]?>
				</td>
			</tr>
			<tr>
				<td>최종학력</td>
				<td><?=$row["grade"]?>
				</td>
			</tr>
			<tr>
				<td>성별</td>
				<td>
					<?=$row["gender"]?>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" value="수정" onclick="location.href='edit.php?id=<?=$id?>'">
					<input type="button" value="삭제" onclick="del()">
				</td>
			</tr>

	</form>
</body>
</html>
<script>
	function del() {
		if(confirm("정말로 삭제하시겠습니까?")){
			location.href='del.php?id=<?=$id?>';
		}
	}

</script>
