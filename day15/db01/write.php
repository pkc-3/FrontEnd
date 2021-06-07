<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php"> <!-- write_ok.php로 데이터 넘겨주기 위해서는 form태그 필요 -->
	<table border="1" cellspacing="5" cellpadding="10">
		<tr>
			<td>이름</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>전화번호</td>
			<td><input type="text" name="tel"></td>
		</tr>
		<tr>
			<td>이메일주소</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr><td colspan="2" align="center">
			<input type="button" value="전송완료" onclick="send()">
		</td></tr>
	</table>
	</form>
</body>
</html>
<script>
	function send() {
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.tel.value==""){
			alert("전화번호를 입력해주세요");
			frm1.tel.focus();
			return false;
		}
		if(frm1.email.value==""){
			alert("email을 입력하세요");
			frm1.email.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>