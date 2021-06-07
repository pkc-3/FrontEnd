<? session_start(); 
	$id = $_SESSION["id"];
	$conn = mysqli_connect("localhost","root","autoset","mydb");
	$query="select * from members where id=$id";
	$rs=mysqli_query($conn,$query);
?>
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
      <li style="background-color:orange"><a href="inc.php">INC</a></li>
      <li><a href="book.php">Link</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
    </ul>
    </div>
    <div class="content">
    <form enctype="multipart/form-data" name="frm1" method="post" action="inc_write_ok.php">
	<br><br>
	<table class="table1">
		<tr>
			<td width="25%">글제목</td>
			<td><input type="text" name="title" size="50"></td>
		</tr>
		<tr>
			<td>작성자</td>
			<td><input type="text" name="writer" size="20" value="<?=$id?>" readonly>
				</td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><textarea name="content" rows="15" cols="75"></textarea></td>
		</tr>
		<tr>
			<td>첨부파일</td>
			<td><input type="file" name="fname"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" class="bt" value="업로드" onclick="send()">
				<input type="button" class="bt" value="리스트" onclick="location.href='inc.php'">
			</td>
		</tr>
	</table>
	</form></div>
    <div class="foot">
      Design & coded by jys since 2021.5.4
    </div>
  </div>
</body>
<body>
	
</body>
</html>
<script type="text/javascript">
	function send() {
		if(frm1.title.value==""){
          alert("제목을 입력하세요")
          frm1.title.focus()
          return false;
        }
        if(frm1.content.value==""){
          alert("내용을 입력하세요")
          frm1.content.focus()
          return false;
        }
		document.frm1.submit();
	}
	function delete1() {
    if(confirm("ID를 삭제하시겠습니까?")){
      location.href='delete.php';
    }
  }
</script>