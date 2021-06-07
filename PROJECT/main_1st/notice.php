<? session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
	<div class="topmenu">
				<? if(isset($_SESSION["id"])){
				?>
				<a href="logout.php">Logout</a> | 
				<a href="member_edit.php">Edit</a> | 
				<a href="javascript:delete1()">Delete account</a>
				<? }
					else{ ?>
				<a href="login.php">Login</a> |
				<a href="newmember.php">Signup</a> |
				<a href="idpw.php">Search Id/Pw &nbsp;</a> <? } ?>
	</div>
	<header>
		<div class="gnb_menu"></div>
		<div class="logo">
			<a href="index.php"><img src="logo/logo.png"></a>
		</div>
		<nav>
			<ul class="menu">
				<li><a href="notice.php">공지사항</a></li>
				<li><a href="#">국내 여행지</a>
					<ul class="submenu">
						<li><a href="jejuisland.php">제주도</a></li>
						<li><a href="busan.php">부산</a></li>
						<li><a href="ulleung.php">울릉도</a></li>
					</ul>
				</li>
				<li><a href="#">해외 여행지</a>
					<ul class="submenu">
						<li><a href="america.php">미국</a></li>
						<li><a href="japan.php">일본</a></li>
						<li><a href="china.php">중국</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<div class="bigbox">
		<table class="notice_table" border="5" cellpadding="10" cellspacing="0">
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
				$sql="select * from notice order by no desc limit $startRow, 10";
				$rs=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($rs)){
					?>
					<tr>
						<td><?=$row["no"]?></td>
						<td><? if(isset($_SESSION["id"])){
							?>
							<a href="notice_content.php?no=<?=$row["no"]?>">
							<?=$row["title"]?></a>
							<? }
						else{?>
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
						if($i>$pageCount){break;}
						if($page==$i){
						echo"<a href='notice.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
						}
						else{
						echo"<a href='notice.php?page=$i'>[$i]</a>";
						}
					}
				$nextPage=($group*5)+1;
				if($group<$groupCount){
					echo"<a href='notice.php?page=$nextPage'>NEXT </a>";
					$lastPage=$pageCount;
					echo"<a href='notice.php?page=$lastPage'>LAST </a>";
				}
			?>
				</td>
			</tr>
			<form name="frm1" method="post" action="notice_search.php">
			<tr>
				<td colspan="5" align="center">
					<? if(isset($_SESSION["id"])){
						if(($_SESSION["id"])=="admin"){?>
						<input type="button" class="bt" value="새로 작성" onclick="location.href='notice_write.php'">
					<? }} ?>
					<select name="search">
						<option value="title">제목</option>
						<option value="content">내용</option>
						<option value="writer">작성자</option>
					</select>&nbsp;&nbsp;
					<input type="text" name="searchString">
					<input type="button" value="검색" class="bt" onclick="sendString()">
				</td>
			</tr>
			</form>
		</table>
	</div>
	<footer>
		<div class="foot">
		<ul class="lfoot">
			<li><a href="#">법적고지</a></li>
			<li><a href="#">개인정보취급방침</a></li>
			<li><a href="#">개인정보처리방침</a></li>
		</ul>
		<div class="rfoot">
			<p>
			상호명:여행을 사랑하는 사람들(주)<br>
			대표자:홍길동<br>
			개인정보책임자:유관순<br>
			상담전화:1588-9000<br>
			주소:부산광역시 해운대구 우동 정릉빌딩 503호
			</p>
		</div>
	</div>
	</footer>
</body>
</html>
<script>
	function delete1() {
		if(confirm("ID를 삭제하시겠습니까?")==""){
			location.href="delete.php";
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