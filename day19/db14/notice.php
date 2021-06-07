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
				if(isset($_GET["page"])){
					$page=$_GET["page"];
					$group=ceil($page/5);//1~5:1 6~10:2
				}
				else{
					$page=1;
					$group=1;
				}

				$conn=mysqli_connect("localhost","root","autoset","mydb");
				$sql2="select count(*) as cnt from notice";
				$rs2=mysqli_query($conn,$sql2);
				$row2=mysqli_fetch_array($rs2);
				$cnt=$row2["cnt"];
				$pageCount=ceil($cnt/10);
				$groupCount=ceil($pageCount/5);
				$startRow=($page-1)*10;
				$sql="select * from notice order by no desc limit $startRow,10";
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
			<tr>
				<td colspan="5" align="center">
			<?
			//이전 5개로 돌아가기
				
				if($group>1){
					$firstPage=1;
					echo"<a href='notice.php?page=$firstPage'>FIRST </a>";
				}
				if($group>1){
					$prevPage=(($group-2)*5)+1;//6,11,17
					echo"<a href='notice.php?page=$prevPage'>Prev </a>";
				}
				$startPage=($group-1)*5+1;
				$endPage=$startPage+4;
				for($i=$startPage;$i<=$endPage;$i++){
					//페이지 카운트 범위를 벗어나면 문장을 종료시킨다.
					if($i>$pageCount){break;}
					if($page==$i){
						echo"<a href='notice.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
					}
					else{
						echo"<a href='notice.php?page=$i'>[$i]</a>";
					}
				}
				//다음 5개 가져오기 루틴
				$nextPage=($group*5)+1;
				if($group<$groupCount){
					echo"<a href='notice.php?page=$nextPage'>NEXT </a>";
					$lastPage=$pageCount;
					echo"<a href='notice.php?page=$lastPage'>LAST </a>";
				}	
				
			?>

				</td>
			</tr>
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
		<form name="frm1" method="post" action="notice_search.php">
		<tr>
			<td colspan="5" align="center">
				<select name="search">
					<option value="title">제목</option>
					<option value="content">내용</option>
					<option value="writer">작성자</option>
				</select>&nbsp;&nbsp;
				<input type="text" name="searchString">
				<input type="button" value="검색" onclick="sendString()" class="bt">
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