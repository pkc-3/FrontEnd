<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
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
			<a href="javascript:dcount()">Delete account &nbsp;&nbsp;</a>
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
			좋은 블로그가 되도록 노력할게요.<br>
			많이들 놀러오셔요.
		</div>
	</div>
	<footer>
		푸터부분
	</footer>
</body>
</html>
<script>
	function dcount() {
		if(confirm("회원 탈퇴를 하시겠습니까?")){
			location.href="dcount.php";
		}
	}
</script>