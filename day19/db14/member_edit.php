<?
	session_start();
	$id=$_SESSION["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from blog where id='$id'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<header>
		<div class="topmenu">
			<? if(isset($_SESSION["id"])){
				?>
			<a href="logout.php">Logout</a>
			|
			<a href="member_edit.php">Edit</a>
			| 
			<a href="dcount.php">Delete account &nbsp;&nbsp;</a>
			<? }
			else{ ?>
			<a href="login.php">Login</a>
			|
			<a href="member.php">Signup</a>
			| 
			<a href="idpw.php">Search Id/Pw &nbsp;&nbsp;</a> <? } ?>
		</div>
		<br><a href="index.php">Welcome!!!</a>
	</header>
	<div id="wrap">
		<div class="menu">
			<ul class="menubar">
				<li><a href="notice.php">공지사항</a></li>
				<li><a href="board.php">자유게시판</a></li>
				<li><a href="qna.php">묻고 답하기</a></li>
				<li><a href="inc.php">자료실</a></li>
				<li><a href="book.php">즐겨찾기</a></li>
			</ul>
		</div>
		<div class="content">
			<form name="frm1" method="post" action="member_edit_ok.php">
			<table class="table1">
				<tr>
					<th colspan="2" align="center">
						회원정보 수정
					</th>
				</tr>
				<tr>
					<td>아이디</td>
					<td><input type="text" name="id" value="<?=$row["id"]?>" readonly></td>
				</tr>
				<tr>
					<td>패스워드</td>
					<td><input type="password" name="pw" value="<?=$row["pw"]?>"></td>
				</tr>
				<tr>
					<td>이름</td>
					<td><input type="text" name="name" value="<?=$row["name"]?>"></td>
				</tr>
				<tr>
					<td>주소</td>
					<td><input type="text" name="addr" value="<?=$row["addr"]?>"></td>
				</tr>
				<tr>
					<td>전화번호</td>
					<td><input type="text" name="tel" value="<?=$row["tel"]?>"></td>
				</tr>
				<tr>
					<td>직업</td>
					<td><input type="text" name="job" value="<?=$row["job"]?>"></td>
				</tr>
				<tr>
					<td>최종학력</td>
					<td><input type="text" name="grade" value="<?=$row["grade"]?>"></td>
				</tr>
				<tr>
					<td>성별</td>
					<td><input type="radio" name="gender" value="m" checked>남성
						<input type="radio" name="gender" value="f" <?if($row["gender"]=="f"){?>checked <?}?>>여성
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="button" value="수정하기" onclick="send()">
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
	<footer>
		푸터부분
	</footer>
</body>
</html>
	<script>
	function send() {
		document.frm1.submit();
	}
	</script>


