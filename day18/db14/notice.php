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
		<table class="table1">
			<tr>
				<th>글번호</th>
				<th>글제목</th>
				<th>작성자</th>
				<th>작성일</th>
				<th>조회수</th>
			</tr>
			<?
				$conn=mysqli_connect("localhost","root","autoset","mydb");
				$sql="select * from notice order by no desc";
				$rs=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($rs)){
			?>
			<tr>
				<td><?=$row["no"]?></td>
				<td>
					<? if(isset($_SESSION["id"])){ ?>
					<a href="notice_content.php?no=<?=$row["no"]?>">
							<?=$row["title"]?>
					</a>
					<? }else{ ?>
							<?=$row["title"]?>
					<? } ?>
				</td>
				<td><?=$row["writer"]?></td>
				<td><?=$row["writeday"]?></td>
				<td><?=$row["hit"]?></td>
			</tr>
		<? } ?>
		<?
			//1로그인 했니.//2관리자이니?
		if(isset($_SESSION["id"])){
			if($_SESSION["id"]=="admin"){
		?>
			<tr><td colspan="5" align="center">
					<input type="button" class="bt" value="공지사항추가" onclick="location.href='notice_write.php'">
			</td></tr>
		<?
			}
		}
		?>
		</table>
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
</script>