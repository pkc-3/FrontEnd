<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table border="1" cellpadding="10" cellspacing="5">
			<tr>
				<td>아이디</td>
				<td><input type="text" name="id">
					<a href="javascript:idcheck()">중복확인</a>
				</td>
			</tr>
			<tr>
				<td>패스워드</td>
				<td><input type="text" name="pw">
				</td>
			</tr>
			<tr>
				<td>이름</td>
				<td><input type="text" name="name">
				</td>
			</tr>
			<tr>
				<td>주소</td>
				<td><input type="text" name="addr">
				</td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type="text" name="tel">
				</td>
			</tr>
			<tr>
				<td>직업</td>
				<td><input type="text" name="job">
				</td>
			</tr>
			<tr>
				<td>최종학력</td>
				<td><input type="text" name="grade">
				</td>
			</tr>
			<tr>
				<td>성별</td>
				<td>
					<input type="radio" name="gender" value="m" checked>남성
					<input type="radio" name="gender" value="f">여성
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
	function idcheck(){
		if(frm1.id.value==""){
			alert("id를 입력하세요");
			frm1.id.focus();
			return false;
		}
		window.open("popup.php?id="+frm1.id.value,"pop01","width=600,height=200");
	}
</script>