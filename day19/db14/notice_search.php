<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
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
				$search=$_POST["search"];
				$searchString=$_POST["searchString"];
				$conn=mysqli_connect("localhost","root","autoset","mydb");
				$sql="select * from notice where $search like '%$searchString%'";
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
		<form name="frm1" method="post" action="notice_search.php">
		<tr>
			<td colspan="5" align="center">
				<input type="button" value="돌아가기" onclick="location.href='notice.php'" class="bt">
			</td>
		</tr>
		</form>

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
	function sendString(){
		if(frm1.searchString.value==""){
			alert("키워드를 입력하세요")
			frm1.searchString.focus();
			return false;
		}
		document.frm1.submit();
	}

</script>