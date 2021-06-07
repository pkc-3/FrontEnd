<? 
	session_start();
	$id=$_SESSION["id"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from members where id='$id'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
?>
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
	<div class="member">
		
		<form name="frm1" method="post" action="member_edit_ok.php">
		<table class="table1" border="0" cellpadding="10" cellspacing="5">
			<tr><th colspan="2"><h3>회원정보 수정하기</h3></th></tr>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id" value="<?=$row["id"]?>" readonly></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="pw" value="<?=$row["pw"]?>"></td>
			</tr>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="name" value="<?=$row["name"]?>"></td>
			</tr>
			<tr>
				<td>ADDRESS</td>
				<td><input type="text" name="addr" value="<?=$row["addr"]?>"></td>
			</tr>
			<tr>
				<td>TELEPHONE NUMBER</td>
				<td><input type="text" name="tel" value="<?=$row["tel"]?>"></td>
			</tr>
			<tr>
				<td>JOB</td>
				<td><input type="text" name="job" value="<?=$row["job"]?>"></td>
			</tr>
			<tr>
				<td>GRADE</td>
				<td><input type="text" name="grade" value="<?=$row["grade"]?>"></td>
			</tr>
			<tr>
				<td>GENDER</td>
				<td><input type="radio" name="gender" value="m" checked>남성
					<input type="radio" name="gender" value="f" <?if($row["gender"]=="f"){?>checked <?}?>>여성
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="button" class="bt" value="수정하기" 
					onclick="member_edit()"></td>
			</tr>
		</table>
		</form>
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
	function member_edit() {
		if(frm1.id.value==""){
			alert("ID를 입력하세요");
			frm1.id.focus();
			return false;
		}
		if(frm1.pw.value==""){
			alert("PASSWORD를 입력하세요");
			frm1.pw.focus();
			return false;
		}
		if(frm1.name.value==""){
			alert("NAME을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.addr.value==""){
			alert("ADDRESS를 입력하세요");
			frm1.addr.focus();
			return false;
		}
		if(frm1.tel.value==""){
			alert("TELEPHONE NUMBER를 입력하세요");
			frm1.tel.focus();
			return false;
		}
		if(frm1.job.value==""){
			alert("JOB을 입력하세요");
			frm1.job.focus();
			return false;
		}
		if(frm1.grade.value==""){
			alert("GRADE를 입력하세요");
			frm1.grade.focus();
			return false;
		}
		if(frm1.gender.value==""){
			alert("GENDER를 선택하세요");
			frm1.gender.focus();
			return false;
		}
		document.frm1.submit();
	}
</script>
<script>
	function delete1() {
		if(confirm("ID를 삭제하시겠습니까?")==""){
			location.href="delete.php";
		}
	}
</script>