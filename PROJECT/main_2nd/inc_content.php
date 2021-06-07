<?
	session_start();
	$id = $_SESSION["id"];
	$no = $_GET["no"];
	$conn =mysqli_connect("localhost","root","autoset","mydb");
	$query ="update inc set hit=hit+1 where no=$no";
	mysqli_query($conn,$query);
	$query="select * from inc where no=$no";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
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
	<br><br>
	<form name="frm1" method="post" action="inc_content_re.php">	
	<table class="table1" width="500px">
		<tr>
			<td>글번호</td>
			<td><?=$row["no"]?></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><?=$row["title"]?></td>
		</tr>
		<tr>
			<td>작성자</td>
			<td><?=$row["writer"]?></td>
		</tr>
		<tr>
			<td>작성일</td>
			<td><?=$row["writeday"]?></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><?=nl2br($row["content"])?></td>
		</tr>
		<tr>
			<td>파일명</td>
			<td><a href="down.php?fname=<?=$row["fname"]?>"><?=$row["fname"]?></a></td>
		</tr>
		<tr>
			<td>조회수</td>
			<td><?=$row["hit"]?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="button" value="삭제하기" class="bt" onclick="del(<?=$no?>,'<?=$row["fname"]?>')">
				<input type="button" value="목록보기" onclick="location.href='inc.php'" class="bt">
			</td>
		</tr>
	</table>
	<table class="table1" width="500px">
		<tr>
			<td colspan="2">
			<input type="hidden" name="no" value="<?=$no?>">
			<input type="textarea" name="content" style="width:400px" placeholder="15자 이내로 적어주세요">
			<input type="button" value="댓글작성" onclick="send()" class="bt" >
			</td>
		</tr>

			<?
				$sql2="select * from inc_re where p_no=$no";
				$rs2=mysqli_query($conn,$sql2);
				while($row2=mysqli_fetch_array($rs2)){
			?>

			<tr>
				<td style="font-weight:bold;width: 100px"><?=$row2["writer"]?>
				
				</td>
				<td >
					<?=nl2br($row2["content"])?>
					<? 
			   if(isset($_SESSION["id"])){ 
			   	   if($_SESSION["id"]==$row2["writer"]){
				?>
				<a href="inc_content_del.php?no=<?=$row2["no"]?>&p_no=<?=$no?>" style="color: red"> ⨂ </a>
				<? 
					}
				} 
				?>
				</td>
			</tr>

			<?
		}
			?>
	</table>
	</form>
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
  	function del(no,fname){
	  	if("<?=$id?>"=="<?=$row["writer"]?>"){
		  	if(confirm("이글을 삭제하시겠습니까?")){
		      location.href="inc_del.php?no="+no+"&fname="+fname;
		    }
		    else{
				alert("작성자가 아닙니다.")
			}
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