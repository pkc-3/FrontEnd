<?
	$writer=$_POST["writer"];
	$title=$_POST["title"];
	$content=$_POST["content"];
	$writeday=date("Y-m-d");
	$step=1;//답변글에는 1이라는 플래그값을 설정한다.
	$f_no=$_POST["f_no"];

	$conn=mysqli_connect("localhost","root","autoset","mydb");
	$query="insert into qna (writer,title,content,writeday,step,f_no) values('$writer','$title','$content','$writeday',$step,$f_no)";
	mysqli_query($conn,$query);
?>
<script type="text/javascript">alert("답변이 작성되었습니다.")</script>
<meta http-equiv="refresh" content="0;url=qna.php">

