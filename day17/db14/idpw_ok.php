<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="topmenu">
			<? if(isset($_SESSION["id"])){
				?>
			<a href="logout.php">Logout</a>
			|
			<a href="member_edit.php">Edit</a>
			| 
			<a href="javascript:dcount()">Delete account &nbsp;&nbsp;</a>
			<? }
			else{ ?>
			<a href="login.php">Login</a>
			|
			<a href="member.php">Signup</a>
			| 
			<a href="idpw.php">Search Id/Pw &nbsp;&nbsp;</a> <? } ?>
		</div>
		<br><a href="index.php">Welcome!!!</a>
	</header>
	<div id="wrap">
		<div class="menu">
			<ul class="menubar">
				<li>첫번째메뉴</li>
				<li>두번째메뉴</li>
				<li>세번째메뉴</li>
				<li>네번째메뉴</li>
				<li>다섯번째메뉴</li>
			</ul>
		</div>
		<div class="content">
			<? if($_POST["id"]){
				$name=$_POST["name"];
				$tel=$_POST["tel"];
				$id=$_POST["id"];
				$sql="select pw as result from blog where name='$name' and tel='$tel' and id='$id'";
			 } 
			else{
				$name=$_POST["name"];
				$tel=$_POST["tel"];
				$sql="select id as result from blog where name='$name' and tel='$tel'";
			}
			$conn=mysqli_connect("localhost","root","autoset","mydb");
			$rs=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($rs);
			?>
			<table class="table1">
				<tr>
					<th>원하는 결과값은?</th>
				</tr>
				<tr>
					<td><?=$row["result"]?></td>
				</tr>
			</table>
		</div>
	</div>
	<footer>
		푸터부분
	</footer>
</body>
</html>
<script>
	function dcount() {
		if(confirm("회원 탈퇴를 하시겠습니까?")){
			location.href="dcount.php";
		}
	}
</script>