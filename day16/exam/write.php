<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
	<table border="1" cellpadding="10" cellspacing="5">
		<tr>
			<td>학번</td>
			<td><input type="text" name="num"></td>
		</tr>
		<tr>
			<td>이름</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>국어</td>
			<td><input type="text" name="kor"></td>
		</tr>
		<tr>
			<td>영어</td>
			<td><input type="text" name="eng"></td>
		</tr>
		<tr>
			<td>수학</td>
			<td><input type="text" name="math"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="입력완료" onclick="send()">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

<script>
	function send() {
		document.frm1.submit()
	}
</script>