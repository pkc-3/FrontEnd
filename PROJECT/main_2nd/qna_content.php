<? session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="script.js" defer="defer"></script>
  <meta charset="utf-8">
</head>
<body>
  <div id="div1">
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
      <li  style="background-color:orange"><a href="qna.php">Q&A</a></li>
      <li><a href="inc.php">INC</a></li>
      <li><a href="book.php">Link</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
    </div>
    <div class="content">
    <?
		$no= $_GET["no"];
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$query="update qna set hit=hit+1 where no=$no";
		mysqli_query($conn,$query);
		$query="select * from qna where no=$no";
		$rs=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($rs);
	?>
	<br>
	<form name="frm1" method="get" action="qna_del.php">
	<table class="table1">
		<tr>
			<td>글쓴이</td>
			<td><?=$row["writer"]?></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><?=$row["title"]?></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><?=$row["content"]?></td>
		</tr>
		<tr>
			<td>작성일</td>
			<td><?=$row["writeday"]?></td>
		</tr>
		<tr>
			<td>조회수</td>
			<td><?=$row["hit"]?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<? if($row["step"]==0){?>
					<input type="button" class="bt" value="답변하기" onclick="send(<?=$row["f_no"]?>)">
				<? } ?>
				<input type="button" class="bt" value="수정하기" onclick="edit()">
				<input type="button" class="bt" value="삭제하기" onclick="del(<?=$no?>)">
				<input type="button" class="bt" value="목록가기" onclick="back()">
			</td>
		</tr>
	</table>
	</form>
	</div>
    <div class="foot">
      Design & coded by jys since 2021.5.4
    </div>
  </div>
</body>
</html>
<script>
	function delete1() {
    if(confirm("ID를 삭제하시겠습니까?")){
      location.href='delete.php';
    }
  }
	function send(f_no) {
		location.href="qna_write_re.php?f_no="+f_no;
	}
	function del(no){
		if("<?=$id?>"=="<?=$row["writer"]?>"){
			if(confirm("삭제하시겠습니까?")){
			location.href="qna_del.php?no="+no;
			document.value.submit();
			}
		}
		else{
			alert("작성자가 아닙니다.")
		}
	}
	function edit(){
		if("<?=$id?>"=="<?=$row["writer"]?>"){
			location.href='qna_edit.php?no=<?=$no?>';
		}
		else{
			alert("작성자가 아닙니다.")
		}
	}
	function back(){
		history.back();
	}
</script>



