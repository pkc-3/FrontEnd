<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>


	<?
		$no= $_GET["no"];
		$conn=mysqli_connect("localhost","root","autoset","mydb");
		$query="update qna set hit=hit+1 where no=$no";
		mysqli_query($conn,$query);
		$query="select * from qna where no=$no";
		$rs=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($rs);
	?>
	<br><br>
	<table class="table1">
		<tr>
			<td>글쓴이</td>
			<td><?=$row["writer"]?></td>
		</tr>
		<tr>
			<td>글제목</td>
			<td><?=$row["title"]?></td>
		</tr>
		<tr>
			<td>글내용</td>
			<td><?=$row["content"]?></td>
		</tr>
		<tr>
			<td>작성일</td>
			<td><?=$row["writeday"]?></td>
		</tr>
		<tr>
			<td>조회수</td>
			<td><?=$row["hit"]?></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<? if($row["step"]==0){?>
					<input type="button" class="bt" value="답변하기" onclick="send(<?=$row["f_no"]?>)">
				<? } ?>
				<input type="button" class="bt" value="수정하기" onclick="location.href='qna_edit.php?no=<?=$no?>'">
				<input type="button" class="bt" value="삭제하기" onclick="del(<?=$no?>)">
				<input type="button" class="bt" value="목록가기" onclick="back()">
			</td>
		</tr>
	</table>

</body>
</html>
<script type="text/javascript">
	function send(f_no) {
		location.href="qna_write_re.php?f_no="+f_no;
	}
	function del(){
		if(confirm("삭제하시겠습니까?")){
			location.href="qna_del?no="+no;
		}
	}
	function back(){
		history.back();
	}
</script>