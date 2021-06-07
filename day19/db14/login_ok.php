<?
	session_start();
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from blog where id='$id' and pw='$pw'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
	if($row["id"]){
		//세션변수에 값을 할당하고 인덱스 화면으로 돌아간다.
		$_SESSION["id"]=$row["id"];
		echo("<meta http-equiv='refresh' content='0;url=index.php'>");
	}
	else{
		?>
		<script>
			alert("아이디와 패스워드가 올바르지 않습니다.");
			history.back();
		</script>
		<?
	}
?>