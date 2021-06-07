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
        <div class="member">
          <form name="frm1" method="post" action="idpw_pw_ok.php">
          <table class="table table-bordered" border="0" cellpadding="10" cellspacing="5">
              <?
                $name=$_POST["name"];
                $tel=$_POST["tel"];
                $job=$_POST["job"];
                $id=$_POST["id"];
                $sql="select id as result from members where name='$name' and tel='$tel' and job='$job'";
                $conn=mysqli_connect("localhost","root","autoset","mydb");
                $rs=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($rs);
              
              if($row["result"]==""){
              ?>
              <tr>
                <td align="center"><h4 class="id_title">입력하신 정보가 일치하지 않습니다.</h4></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <input type="button" value="뒤로가기" class="bt" onclick="location.href='idpw_pw.php'">
                </td>
              </tr>
              <?}
              else{?>
              <tr>
                <td>ID</td>
                <td><input type="text" name="id" value="<?=$row["result"]?>"></td>
              </tr>
              <tr>
                <td>변경할 비밀번호</td>
                <td><input type="password" name="new_pw"></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                  <input type="button" value="비밀번호 변경" class="btn btn-primary" onclick="newpw()">
                </td>
              </tr>
              <? } ?>
          </table>
          </form>
        </div>
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

    function newpw(){
    if(frm1.id.value==""){
      alert("ID를 입력하세요")
      frm1.id.focus()
      return false;
    }
    if(frm1.new_pw.value==""){
      alert("비밀번호를 입력하세요")
      frm1.new_pw.focus()
      return false;
    }
    document.frm1.submit();
  }
    </script>
  </body>
</html>
