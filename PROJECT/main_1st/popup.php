<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?
		$id=$_GET["id"];
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$sql="select count(*) as cnt from members where id='$id'";
		$rs=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($rs);

		if($row["cnt"]==1){
			?>
			<script>
				alert("아이디 사용불가합니다.");
				opener.document.frm1.id.value="";
				opener.document.frm1.id.focus();
				this.close();
			</script>
			<?
		}
		else{
			?>
			<script>
				alert("아이디 사용가능합니다.");
				opener.document.frm1.pw.focus();
				this.close();
			</script>
			<?
	}
	?>
</body>
</html>