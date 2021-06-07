<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?
		$id=$_GET["id"];
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$sql="select count(*) as cnt from blog where id='$id'";
		$rs=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($rs);

		if($row["cnt"]==1){
			?>
			<script>
				alert("아이디 사용불가");
				opener.document.frm1.id.value="";
				opener.document.frm1.id.focus();
				this.close();
			</script>
			<?
		}
		else{
			?>
			<script>
				alert("아이디 사용가능");
				opener.document.frm1.pw.focus();
				this.close();
			</script>
			<?
	}
	?>
</body>
</html>