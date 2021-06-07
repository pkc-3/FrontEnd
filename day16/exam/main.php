<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$sql="select * from main";
	$rs=mysqli_query($conn,$sql);
?>
<body>
	<table border="1" cellspacing="5" cellpadding="10">

		<tr>
			<th>no</th>
			<th>name</th>
			<th>kor</th>
			<th>eng</th>
			<th>math</th>
			<th>tot</th>
			<th>avr</th>
		</tr>
		<?
			while($row=mysqli_fetch_array($rs)){
		?>
		<tr>
				<td><?=$row["num"]?></td>
				<td><?=$row["name"]?></td>
				<td><?=$row["kor"]?></td>
				<td><?=$row["eng"]?></td>
				<td><?=$row["math"]?></td>
				<td><?=$row["tot"]?></td>
				<td><?=$row["avr"]?></td>
		</tr>	
		<? } ?>
			<tr>
				<td colspan="7" align="center">
					<input type="button" value="성적추가" onclick="location.href='write.php'">
				</td>
			</tr>
	</table>
</body>
</html>