<?
  $writer=$_POST["writer"];
  $writeday=date("Y-m-d");
  $title=$_POST["title"];
  $content=$_POST["content"];
  $conn=mysqli_connect("localhost","root","autoset","mydb");
  $query="insert into notice(writer,writeday,title,content) values('$writer','$writeday','$title','$content')";
  mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=notice.php">