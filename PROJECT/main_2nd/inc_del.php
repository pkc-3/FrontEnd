
<?
	session_start();
	$no = $_GET["no"];
	$id = $_SESSION['id'];
	$conn = mysqli_connect("localhost","root","autoset","mydb");
	$query = "select * from members where id='$id'";
	mysqli_query($conn,$query);
	$conn2 = mysqli_connect("localhost","root","autoset","mydb");
	$query2 = "select * from inc where no=$no";
	$rs2 =mysqli_query($conn2,$query2);
	$row2 =mysqli_fetch_array($rs2);
	$temp_id = $_SESSION["id"];
	$temp_writer =$row2["writer"];



	if($temp_id==$temp_writer){ ?>
	<?
		$no = $_GET["no"];
		$filename = $_GET["fname"];
		$file_dir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/".$filename;
		if(file_exists($file_dir)){?>
			<?
			unlink($file_dir); 
			?>
		<? } 
		else{?>
			<?
			echo""
			?>
		<? }
		$conn = mysqli_connect("localhost","root","autoset","mydb");
		$query = "delete from inc where no=$no";
		mysqli_query($conn,$query);
		?>
		<script type="text/javascript">alert("삭제되었습니다.")</script>
	<? }
	else{?>

		<script>alert("작성자가 아닙니다.")</script>

	<? } ?>

<meta charset="utf-8" http-equiv="refresh" content="0;url=inc.php">
