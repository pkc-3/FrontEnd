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

     <div class="container">   
  <?
    $no= $_GET["no"];
    $conn=mysqli_connect("localhost","root","autoset","mydb");
    $query="update notice set hit=hit+1 where no=$no";
    mysqli_query($conn,$query);
    $query="select * from notice where no=$no";
    $rs=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($rs);
  ?>
  <br>
  <form name="frm1" method="post" action="notice_content_re.php">
  <table class="table table-bordered">
    <?
    if(empty($_SESSION["id"])){?>
          <script>alert("로그인을 하여주시기 바랍니다.");
          location.href='login.php';
          </script>
    <? } ?>
    <tr>
      <td width="13%">글쓴이</td>
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
          <td colspan="2" style="text-align: center;">
          <input type="hidden" name="no" value="<?=$no?>">
          <input type="textarea" name="content" style="width:50%;resize: none;" placeholder="15자 이내로 적어주세요">
          <input type="button" value="댓글작성" onclick="send()" class="btn btn-primary" >
          </td>
        </tr>
          <?
            $sql2="select * from notice_re where p_no=$no";
            $rs2=mysqli_query($conn,$sql2);
            while($row2=mysqli_fetch_array($rs2)){
          ?>
            </table>
          <table class="table table-bordered" style="margin:0px;">
          <tr>
            <td colspan="2" style="font-weight:bold;width: 100px"><span style="color:brown;">&nbsp;<?=$row2["writer"]?></span>
              <?=nl2br($row2["content"])?>
              <?=nl2br($row2["writeday"])?>
              <? 
             if(isset($_SESSION["id"])){ 
                 if($_SESSION["id"]==$row2["writer"]){
            ?>
            <a href="notice_content_del.php?no=<?=$row2["no"]?>&p_no=<?=$no?>" style="color: red"> ⨂ </a>
            <? }} ?>
            </td>

          </tr>
          <? } ?>
    </tr>
      <td colspan="2" align="center">
        <? if(isset($_SESSION["id"])){
            if($_SESSION["id"]=="admin"){?>
            <input type="button" class="btn btn-primary" value="삭제하기" onclick="del(<?=$no?>)">
            <input type="button" class="btn btn-primary" value="수정하기" onclick="location.href='notice_edit.php?no=<?=$no?>'">
          <? }} ?>
        <input type="button" value="뒤로가기" onclick="back()" class="btn btn-primary">
      </td>
    </tr>
    </table>

  </form>
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

      function del(no){
        if("<?=$id?>"=="<?=$row["writer"]?>"){
          if(confirm("이글을 삭제하시겠습니까?")){
            location.href="notice_del.php?no="+no;
          }
          else{
          alert("작성자가 아닙니다.");
        }
        }
      }

      function send(){
        if(frm1.content.value==""){
          alert("내용을 입력하세요");
          frm1.content.focus();
          return false;
        }
        document.frm1.submit();
      }
      function back(){
        history.back();
      }
    </script>
  </body>
</html>
