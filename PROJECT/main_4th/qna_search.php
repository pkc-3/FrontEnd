<? session_start();?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>GG BLOG!!!</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hi+Melody&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@200;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cute+Font&display=swap" rel="stylesheet">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- ======================================================================================================== -->

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
          <div class="logo"><a class="navbar-brand" href="index.php"><img src="images/logo.jpg"></a></div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php#home" onclick="$('#home').animatescroll();">Home</a></li>
            <li><a href="index.php#about" onclick="$('#about').animatescroll();">About</a></li>
            <li><a href="index.php#portfolio" onclick="$('#portfolio').animatescroll();">Portfolio</a></li>
            <li><a href="index.php#contact" onclick="$('#contact').animatescroll();">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Board<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="notice.php">공지사항</a></li>
                <li><a href="qna.php">질문과 답변</a></li>
                <li><a href="inc.php">자료실</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
          <div class="container logbar" align="right" style="font-weight: bold">
            <? if(isset($_SESSION["id"])){
              $id = $_SESSION["id"];
            ?>
            <a href="logout.php"><?=$id?> 님 Logout</a>     |
            <a href="member_edit.php">Edit</a>
            <? }
            else{ ?>
            <a href="login.php">Login</a>     | 
            <a href="newmember.php">SignUp</a>     | 
            <a href="idpw.php">Search Id/Pw</a> <? } ?>
          </div>
      </div><!-- /.container-fluid -->
    </nav>
<!-- ======================================================================================================== -->

    <div class="container"><br>
  <?
    $conn = mysqli_connect("localhost","root","autoset","mydb");
    $query = "select * from qna order by no desc";
    $rs = mysqli_query($conn,$query); 
  ?>
  <table class="table table-bordered">
    <tr>
      <th>글번호</th>
      <th width="40%">글제목</th>
      <th>작성자</th>
      <th>작성일</th>
      <th>조회수</th>
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
      
      if (isset($_POST["searchString"])) {
        $search=$_POST["search"];
        $searchString=$_POST["searchString"];
      }
      else{
        $search=$_GET["search"];
        $searchString=$_GET["searchString"];
      }
      
      if(isset($_GET["no"])){
        $no= $_GET["no"];
      }
      else{
        $no=$_POST["no"];
      }
      $conn=mysqli_connect("localhost","root","autoset","mydb");
      $sql2="select count(*) as cnt from qna";
      $rs2=mysqli_query($conn,$sql2);
      $row2=mysqli_fetch_array($rs2);
      $cnt=$row2["cnt"];
      $pageCount=ceil($cnt/10);
      $groupCount=ceil($pageCount/5);
      $startRow=($page-1)*10;
      $sql="select * from qna where $search like '%$searchString%' order by no desc limit $startRow, 10";
      $rs=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($rs)){ ?>
    <tr>
      <td><?=$row["no"]?></td>
      <td><? if(isset($_SESSION["id"])){
              ?>
              <a href="qna_search_content.php?no=<?=$row["no"]?>&searchString=<?=$searchString?>&search=<?=$search?>">
              <?=$row["title"]?></a>
              <? }
            else{?>
              <?=$row["title"]?>
            <? } ?> 
      </td>
      <td><?=$row["writer"]?></td>
      <td><?=$row["writeday"]?></td>
      <td><?=$row["hit"]?></td>
    </tr>
    <? } ?>
      <tr>
        <td colspan="5" align="center">
          <?
            if($group>1){
              $firstPage=1;
            echo"<a href='qna.php?page=$firstPage'>FIRST </a>";
            }
            if($group>1){
              $prevPage=(($group-2)*5)+1;//6,11,17
            echo"<a href='qna.php?page=$prevPage'>Prev </a>";
            }
            $startPage=($group-1)*5+1;
            $endPage=$startPage+4;
            for($i=$startPage;$i<=$endPage;$i++){
            if($i>$pageCount){break;}
            if($page==$i){
            echo"<a href='qna.php?page=$i'><font color='red'><b>[$i]</b></font></a>";
            }
            else{
            echo"<a href='qna.php?page=$i'>[$i]</a>";
            }
          }
        $nextPage=($group*5)+1;
        if($group<$groupCount){
          echo"<a href='qna.php?page=$nextPage'>NEXT </a>";
          $lastPage=$pageCount;
          echo"<a href='qna.php?page=$lastPage'>LAST </a>";
        }
      ?>
        </td>
      </tr>
    <tr>
      <td colspan="5" align="center">
        <form name="frm1" method="post" action="qna_search.php">
          <input type="button" class="btn btn-success" value="검색어 : <?=$searchString?>">&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="search">
            <option value="title">제목</option>
            <option value="content">내용</option>
            <option value="writer">작성자</option>
          </select>&nbsp;&nbsp;
          <input type="text" name="searchString">
          <input type="button" value="검색" class="btn btn-primary" onclick="sendString(<?=$no?>)">
          <?
          if(isset($searchString)){?>
            <input type="button" class="btn btn-primary" value="뒤로가기" onclick="location.href='qna.php'">
          <? }
          else{?>
            <input type="button" class="btn btn-primary" value="뒤로가기" onclick="back()">
          <? } ?>
          <? if(isset($_SESSION["id"])){
            if($_SESSION["id"]=="admin"){?>
            <input type="button" class="btn btn-primary" value="새로 작성" onclick="location.href='qna_write.php'">
          <? }} ?>
        </form>
      </td>
    </tr>
  </table>
  </div>
        
<!-- =footer======================================================================================================= -->
    <div id="footer"></div>
      <br><br>
      <header class="content1">
        <div class="container" align="center">
          <h3>All rights reserved by GGBlog since 2001.</h3>
        </div>
      </header>
      <br>
<!-- ======================================================================================================== -->
    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animatescroll.min.js"></script>
    <script type="text/javascript">

    function sendString(no){
      if(frm1.searchString.value==""){
        alert("키워드를 입력하세요")
        frm1.searchString.focus();
        return false;
      }
        document.frm1.submit();
      }
    function back(){
      location.href="qna_search.php?searchString=<?=$searchString?>";
    }
    </script>
  </body>
</html>
