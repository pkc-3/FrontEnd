<? session_start();?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>부트스트랩 101 템플릿</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>   /*<!-- 스마트폰 모드에서는 1,3,5는 안보이게 2(글제목),4(작성일)만 보이게하기 -->*/
      @media (max-width:767px){
        .table tr:not(:nth-last-child(-n+1))>td:nth-child(4n-3){
          display:none;
        }
      }  /*끝에서(-n) 두번째까지(+2)는 display:none하지마라 => 공지사항추가와 페이지 부분*/
    </style>

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <!-- 네비게이션바 시작 -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="imgs/logo.png"></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#" onclick="$('#about').animatescroll();">About</a></li>
              <li><a href="#" onclick="$('#portfolio').animatescroll();">Portfolio</a></li>
              <li><a href="#" onclick="$('#contact').animatescroll();">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
        <div class="container logbar" align="right">
        <? if(isset($_SESSION["id"])){
          $id = $_SESSION["id"];
        ?>
        <h4><?=$id?> 님 로그인 중입니다.</h4>
        <a href="logout.php">Logout</a>     |
        <a href="member_edit.php">Edit</a>     |
        <a href="javascript:delete1()">Delete account</a>
        <? }
        else{ ?>
        <a href="login.php">Login</a>     | 
        <a href="newmember.php">SignUp</a>     | 
        <a href="idpw.php">Search Id/Pw</a> <? } ?>
      </div>
      <div class="contentner"></div>
      </nav>
      <!-- 네비게이션바 끝 -->
      
      <div class="container">
        <h4>공지사항 리스트</h4>
        <table class="table table-bordered">
          <tr>
          <td><b>글번호</b></td>
          <td><b>글제목</b></td>
          <td><b>글쓴이</b></td>
          <td><b>작성일</b></td>
          <td><b>조회수</b></td>
          </tr>
<?
      if(isset($_GET["page"])){
        $page=$_GET["page"];
        $group=ceil($page/5);//1~5:1 6~10:2
      }
      else{
        $page=1;
        $group=1;
      }
      $conn=mysqli_connect("localhost","root","autoset","mydb");
      $sql2="select count(*) as cnt from notice";
      $rs2=mysqli_query($conn,$sql2);
      $row2=mysqli_fetch_array($rs2);
      $cnt=$row2["cnt"];
      $pageCount=ceil($cnt/10);
      $groupCount=ceil($pageCount/5);
      $startRow=($page-1)*10;
      $sql="select * from notice order by no desc limit $startRow, 10";
      $rs=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($rs)){
?>   
          <tr>
            <td><?=$row["no"]?></td>
            <td><a href="notice_content.php?no=<?=$row["no"]?>"><?=$row["title"]?></a></td>
            <td><?=$row["writer"]?></td>
            <td><?=$row["writeday"]?></td>
            <td><?=$row["hit"]?></td>
          </tr>
<? } ?>   
          <tr><td colspan="5" align="center">
            <?
            if($group>1){
              $firstPage=1;
            echo"<a href='notice.php?page=$firstPage'>FIRST </a>";
            }
            if($group>1){
              $prevPage=(($group-2)*5)+1;//6,11,17
            echo"<a href='notice.php?page=$prevPage'>Prev </a>";
            }
            $startPage=($group-1)*5+1;
            $endPage=$startPage+4;
            for($i=$startPage;$i<=$endPage;$i++){
            if($i>$pageCount){break;}
            if($page==$i){
            echo"<a href='notice.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
            }
            else{
            echo"<a href='notice.php?page=$i'>[$i]</a>";
            }
          }
        $nextPage=($group*5)+1;
        if($group<$groupCount){
          echo"<a href='notice.php?page=$nextPage'>NEXT </a>";
          $lastPage=$pageCount;
          echo"<a href='notice.php?page=$lastPage'>LAST </a>";
        }
      ?>  <!-- 페이징 기법으로 만들기 -->
          </td></tr>
      <?
          if(isset($_SESSION["id"])){
            if($_SESSION["id"]=="admin"){
          ?>
            <tr><td colspan="5" align="center">
              <input type="button" class="btn btn-primary" value="공지사항추가" onclick="location.href='notice_write.php'">
            </td></tr>
    <? }} ?>  
        </table>
      </div>
        <!-- footer start -->
        <div class="gap"></div>
        <header class="content1">
          <div class="container">
            All rights reserved by 9pixelstudio since 2021.
          </div>
        </header>
        <!-- footer end -->
 
 <!-- 안녕얘들아
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      잘 있었니....<br>
      화이팅!! -->

    </div> <!-- container-fluid -->

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
  
    <!-- <script src="js/jquery.fancybox.js"></script> -->
    <script src="js/animatescroll.min.js"></script>
    <script>
      $(".carousel").carousel({
        interval:2000
      });
      function delete1() {
      if(confirm("ID를 삭제하시겠습니까?")){
        location.href="delete.php";
      }
    }
      function del(no){
        if(confirm("삭제하시겠습니까?")){
        location.href="notice_del.php?no="+no;
        document.value.submit();
        }
      }
    </script>
  </body>
</html>