<?
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writeday=date("Y-m-d");
	$step = 0;

	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$query="select ifnull(max(f_no),0)+1 as f_no from qna";
	$rs=mysqli_query($conn,$query);
	$row=mysqli_fetch_array($rs);
	$f_no=$row["f_no"];

	$query="insert into qna(writer,title,content,writeday,step,f_no) values('$writer','$title','$content','$writeday',$step,$f_no)";
	mysqli_query($conn,$query);
?>
<script type="text/javascript">alert("새 글이 작성되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=qna.php">

