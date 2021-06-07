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
	<?
		$no=$_GET["no"];
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$sql="update notice set hit=hit+1 where no=$no";
		mysqli_query($conn,$sql);
		$sql="select * from notice where no=$no";
		$rs=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($rs);	
	?>

		<table class="table1">
			<tr>
				<td width="25%">글번호</td>
				<td><?=$row["no"]?></td>
			</tr>
			<tr>
				<td>글제목</td>
				<td><?=$row["title"]?></td>
			</tr>
			<tr>
				<td>글내용</td>
				<td><?=($row["content"])?></td>
			</tr>
			<tr>
				<td>글쓴이</td>
				<td><?=$row["writer"]?></td>
			</tr>
			<tr>
				<td>작성일</td>
				<td><?=$row["writeday"]?></td>
			</tr>
			<tr>
				<td>조회수</td>
				<td><?=$row["hit"]?></td>
			</tr>
			<tr><td colspan="2" align="center">
				<input type="button" class="bt" value="뒤로가기" onclick="location.href='notice.php'">
				<input type="button" class="bt" value="수정" onclick="location.href='notice_edit.php?no=<?=$no?>'">
				<input type="button" class="bt" value="삭제" onclick="del()">
			</td></tr>
		</table>

		<form name="frm1" method="post" action="notice_content_re.php">
		<table class="table1">
			<tr>
				<td>
				<input type="hidden" name="no" value="<?=$no?>">
				<textarea name="content" rows="2" cols="60"></textarea>
				</td>
				<td>
				<input type="button" value="답변하기" onclick="send()">
				</td>
			</tr>
			<?
				$sql2="select * from notice_re where p_no=$no";
				$rs2=mysqli_query($conn,$sql2);
				while($row2=mysqli_fetch_array($rs2)){
			?>

			<tr><td colspan="2">
				<?=nl2br($row2["content"])."/".$row2["writeday"]."by ".$row2["writer"] ?>
			<? 
			   if(isset($_SESSION["id"])){ 
			   	   if($_SESSION["id"]==$row2["writer"]){
			?>
				<a href="notice_content_del.php?no=<?=$row2["no"]?>&p_no=<?=$no?>"> x</a>
			<? 
					}
				} 
			?>
			</td></tr>
			<?
		}
			?>
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
			location.href='dcount.php';
		}
	}
	function del(){
		if(confirm("게시글을 삭제하시겠습니까?")){
			location.href='notice_del.php?no=<?=$no?>';
		}
	}
	function send(){
		if(frm1.content.value==""){
			alert("내용을 입력하세요");
			frm1.content.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>

