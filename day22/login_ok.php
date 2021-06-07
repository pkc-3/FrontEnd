<?
	session_start();
	$id=$_POST["id"];
	$pw=$_POST["pw"];
	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from members where id='$id' and pw='$pw'";
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($rs);
	if($row["id"]){
		$_SESSION["id"]=$row["id"];
		echo("<meta http-equiv='refresh' content='0;url=index.php' charset='utf-8'>");
	}
	else{
		?>
		<script>
			alert("정보가 올바르지 않습니다.");
			history.back();
		</script>
		<?
	}
?>