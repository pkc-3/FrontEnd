<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<br><br>
	<form name="frm1" method="post" action="qna_write_ok.php">
	<table class="table1">
		<tr>
			<td>글쓴이</td>
			<td><input type="text" name="writer"></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><textarea name="content" rows="10" cols="75"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" class="bt" value="작성완료" onclick="send()">
				<input type="button" class="bt" value="뒤로가기" onclick="location.href='qna.php'">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>
<script type="text/javascript">
	function send() {
		if(frm1.title.value==""){
			alert("글제목을 작성해주세요")
			frm1.title.focus();
			return false;
		}
		if(frm1.content.value==""){
			alert("글내용을 작성해주세요")
			frm1.content.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>