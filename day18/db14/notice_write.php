<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<div class="topmenu">
		<? if(isset($_SESSION["id"])){ ?>
		<a href="logout.php">Logout</a>
		 | 
		<a href="member_edit.php">Edit</a>
		 | 
		<a href="javascript:dcount()">Delete account</a>
		&nbsp;&nbsp;	
		<? }else { ?>
		<a href="login.php">Login</a>
		 | 
		<a href="member.php">SignUp</a>
		 | 
		<a href="idpw.php">Search Id/Pw</a>
		&nbsp;&nbsp;
		<? } ?>
	</div>
	<br><a href="index.php">Welcome!!</a>
</header>
<div id="wrap">
	<div class="menu">
		<ul class="menubar">
			<li><a href="notice.php">공지사항</a></li>
			<li><a href="board.php">자유게시판</a></li>
			<li><a href="qna.php">묻고답하기</a></li>
			<li><a href="inc.php">자료실</a></li>
			<li><a href="book.php">즐겨찾기</a></li>
		</ul>
	</div>
	<div class="content">
	<form name="frm1" method="post" action="notice_write_ok.php">
		<table class="table1">	
			<tr>
				<td>글제목</td>
				<td><input type="text" name="title"></td>
			</tr>	
			<tr>
				<td>글내용</td>
				<td>
		<textarea name="content" rows="10" cols="60"></textarea>
				</td>
			</tr>	
			<tr><td colspan="2" align="center">
	<input type="button" class="bt" value="확인" onclick="send()">
			</td></tr>
		</table>
	</form>
	</div>
</div>
<footer>
	푸터부분.
</footer>
</body>
</html>
<script>
	function dcount(){
		if(confirm("회원탈퇴를 하시겠습니까?")){
			location.href="dcount.php";
		}
	}
	function send(){
		document.frm1.submit();
	}
</script>