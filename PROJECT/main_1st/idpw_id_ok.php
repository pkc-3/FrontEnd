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
		<form name="frm1" method="post">
		<table class="table1" border="0" cellpadding="10" cellspacing="5">
			<?	
			$name=$_POST["name"];
			$tel=$_POST["tel"];
			$job=$_POST["job"];
			$sql="select id as result from members where name='$name' and tel='$tel' and job='$job'";
			$conn=mysqli_connect("localhost","root","autoset","mydb");
			$rs=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($rs);
			?>
				<tr>
					<th><?=$_POST["name"]?>의 ID는?</th>
				</tr>

			<?
				if($row["result"]==""){
					?> 
					<script>alert("정보가 틀립니다.");
				history.back()</script>
				<?}
				else{
					?>
				<tr>
					<td align="center">"<?=$row["result"]?>"입니다.</td>
				</tr>
				<? }
			?>
				<tr>
					<td colspan="2" align="center">
						<input type="button" value="로그인하러가기" class="bt" onclick="location.href='login.php'">
					</td>
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
	function searchid() {
		if(frm1.name.value==""){
			alert("이름을 입력하세요");
			frm1.name.focus();
			return false;
		}
		if(frm1.tel.value==""){
			alert("전화번호를 입력하세요");
			frm1.tel.focus();
			return false;
		}
		if(frm1.job.value==""){
			alert("직업을 입력하세요");
			frm1.job.focus();
			return false;
		}
		document.frm1.submit();
	}

</script>