<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
	<meta charset="utf-8">
</head>
<body><div id="div1">
    <div class="logo"></div>
    <div class="top">
      Welcome!!
      <div class="topmenu">
        <? if(isset($_SESSION["id"])){
          $id = $_SESSION["id"];
        ?>
        <h4><?=$id?> 님 로그인 중입니다.</h4>
        <a href="logout.php">Logout</a>     |
        <a href="member_edit.php">Edit</a>     |
        <a href="javascript:delete1()">Delete account</a>
        <? }
        else{ ?>
        <a href="login.php">Login</a>     | 
        <a href="newmember.php">SignUp</a>     | 
        <a href="idpw.php">Search Id/Pw</a> <? } ?>
      </div>
    </div>
    <div class="left">
      <ul class="menubar">
      <li><a href="about.php">About</a></li>
      <li><a href="notice.php">Notice</a></li>
      <li><a href="board.php">Board</a></li>
      <li><a href="qna.php">Q&A</a></li>
      <li><a href="inc.php">INC</a></li>
      <li><a href="book.php">Link</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
    </div>
    <div class="content"><br>
	<?
		$conn = mysqli_connect("localhost","root","autoset","mydb");
		$query = "select * from inc order by no desc";
		$rs = mysqli_query($conn,$query); 
	?>
	<table class="table1" width="500px">
		<tr>
			<th>글번호</th>
			<th width="40%">글제목</th>
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

			$sql2="select count(*) as cnt from inc";
			$rs2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_array($rs2);
			$cnt=$row2["cnt"];
			$pageCount=ceil($cnt/10);
			$groupCount=ceil($pageCount/5);
			$startRow=($page-1)*10;
			$sql="select * from inc order by no desc limit $startRow, 10";
			$rs=mysqli_query($conn,$sql);
				
		while($row=mysqli_fetch_array($rs)){ ?>
		<tr>
			<td><?=$row["no"]?></td>
			<td><? if(isset($_SESSION["id"])){
							?>
							<a href="inc_content.php?no=<?=$row["no"]?>">
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
						echo"<a href='inc.php?page=$firstPage'>FIRST </a>";
						}
						if($group>1){
							$prevPage=(($group-2)*5)+1;//6,11,17
						echo"<a href='inc.php?page=$prevPage'>Prev </a>";
						}
						$startPage=($group-1)*5+1;
						$endPage=$startPage+4;
						for($i=$startPage;$i<=$endPage;$i++){
						if($i>$pageCount){break;}
						if($page==$i){
						echo"<a href='inc.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
						}
						else{
						echo"<a href='inc.php?page=$i'>[$i]</a>";
						}
					}
				$nextPage=($group*5)+1;
				if($group<$groupCount){
					echo"<a href='inc.php?page=$nextPage'>NEXT </a>";
					$lastPage=$pageCount;
					echo"<a href='inc.php?page=$lastPage'>LAST </a>";
				}
			?>
				</td>
			</tr>
		<tr>
			<td colspan="5" align="center">
				
				<form name="frm1" method="post" action="inc_search.php">
					
					<select name="search">
						<option value="title">제목</option>
						<option value="content">내용</option>
						<option value="writer">작성자</option>
					</select>&nbsp;&nbsp;
					<input type="text" name="searchString">
					<input type="button" value="검색" class="bt" onclick="sendString()">
					<? if(isset($_SESSION["id"])){
						?>
						<input type="button" class="bt" value="새로 작성" onclick="location.href='inc_write.php'">
					<? } ?>
				</form>
			</td>

		</tr>
	</table>
	</div>
    <div class="foot">
      Design & coded by jys since 2021.5.4
    </div>
  </div>
</body>
	
</html>
<script type="text/javascript">
	function delete1() {
    if(confirm("ID를 삭제하시겠습니까?")){
      location.href="delete.php";
    }
  }
</script>