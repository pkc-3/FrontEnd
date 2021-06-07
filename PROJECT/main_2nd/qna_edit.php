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
		$query="select * from qna where no=$no";
		$rs=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($rs);
	?>
	<br>
	<form name="frm1" method="post" action="qna_edit_ok.php">
	<table class="table1">
		<tr>
			<td>글쓴이</td>
			<td><input type="text" name="writer" value="<?=$row["writer"]?>" readonly></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><input type="text" name="title" value="<?=$row["title"]?>"></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><textarea name="content" rows="10" cols="75"><?=$row["content"]?></textarea>
				<input type="hidden" name="no" value="<?=$no?>">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" class="bt" value="수정완료" onclick="send()">
				<input type="button" class="bt" value="취소하기" onclick="back()">
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
  	function send() {
		if(frm1.title.value==""){
			alert("글제목을 작성해주세요")
			frm1.title.focus();
			return false;
			}
		if(frm1.content.value==""){
			alert("글내용을 작성해주세요")
			frm1.content.focus();
			return false;
			}
		document.frm1.submit();
	}
	
	function back(){
		history.back();
	}
</script>
