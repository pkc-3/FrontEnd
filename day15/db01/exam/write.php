<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="frm1" method="post" action="write_ok.php">
		<table border="1" cellspacing="5" cellpadding="10">
			<tr>
				<td>이름</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>주소</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td>전화번호</td>
				<td><input type="text" name="tel"></td>
			</tr>
			<tr>
				<td>나이</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td>직업</td>
				<td><input type="text" name="job"></td>
			</tr>
			<tr>
				<td>연봉</td>
				<td><input type="text" name="salary"></td>
			</tr>
			<tr>
				<td>보유차종</td>
				<td><input type="text" name="car"></td>
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
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.address.value==""){
			alert("주소를 입력하세요");
			frm1.address.focus();
			return false;
		}
		if(frm1.tel.value==""){
			alert("전화번호를 입력하세요");
			frm1.tel.focus();
			return false;
		}
		if(frm1.age.value==""){
			alert("나이를 입력하세요");
			frm1.age.focus();
			return false;
		}
		if(frm1.job.value==""){
			alert("직업을 입력하세요");
			frm1.job.focus();
			return false;
		}
		if(frm1.salary.value==""){
			alert("연봉을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.car.value==""){
			alert("보유차종을 입력하세요");
			frm1.car.focus();
			return false;
		}
		document.frm1.submit();

	}
</script>