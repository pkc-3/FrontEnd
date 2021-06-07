<?php 
$filename=$_GET["fname"];
//echo $filename;exit;
//$filename = iconv("euc-kr", "utf-8", $filename);
$file_dir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/".$filename;
//$filename = iconv("utf-8", "euc-kr", $filename);
if(file_exists($file_dir)){
 header("Content-Type: application/octet-stream;");
 header("Content-Disposition: attachment; filename=$filename");
 header("Content-Transfer-Encoding: binary"); 
 header("Content-Length: ".(string)(filesize($file_dir))); 
 header("Cache-Control: cache, must-revalidate"); 
 header("Pragma: no-cache"); 
 header("Expires: 0"); 
 
  $fp=fopen($file_dir,"rb");//대화상자 오픈 크롬은 생략
  fpassthru($fp);//download 폴더에 파일받기 진행
  fclose($fp);//파일 다 받으면 종료..
  
}else{
	echo "파일이 존재하지 않습니다.";
}
?>