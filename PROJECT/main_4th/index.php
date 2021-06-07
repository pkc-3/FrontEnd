<? session_start();?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animatescroll.min.js"></script>
    <script type="text/javascript">
      $(".carousel").carousel({
        interval:3000})
      
    </script>
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

  <div id="home"></div>
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
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/slide/img2.jpg" alt="...">
        </div>
         <div class="item">
        <img src="images/slide/img3.jpg" alt="...">
        </div>
         <div class="item">
        <img src="images/slide/img4.jpg" alt="...">
        </div>
        <div class="item">
        <img src="images/slide/img5.jpg" alt="...">
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
<!-- ======================================================================================================== -->
  <!-- 아이콘부분 시작 -->
      <br><br>
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#about" onclick="$('#about').animatescroll();">
              <span class="glyphicon glyphicon-fast-backward">
              </span>
              <h4>여행 이야기</h4>
              <p>국내와 해외 여행의 기록</p>
            </a>
          </div>
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#about" onclick="$('#about').animatescroll();">
              <span class="glyphicon glyphicon-play">
              </span>
              <h4>생활의 지혜</h4>
              <p>일상생활 속에서 문제들 해결 방법 기록</p>
            </a>
          </div>
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#about" onclick="$('#about').animatescroll();">
              <span class="glyphicon glyphicon-pause">
                </span>
              <h4>맛있는 식당</h4>
              <p>이곳저곳 주인장이 다녀온 맛있는 식당들</p>
            </a>
          </div>
          <div class="col-xs-6 col-md-3 icontxt">
            <a href="#about" onclick="$('#about').animatescroll();">
              <span class="glyphicon glyphicon-fast-forward">
                </span>
              <h4>인생 영화</h4>
              <p>재밌게 보았던 영화 추천 및 소감</p>
            </a>
          </div>
        </div>
      </div>
  <!-- 아이콘부분 끝 -->
<!-- ======================================================================================================== -->
    <div id="about"></div>
      <br><br>
      <header class="content1">
        <div class="container" align="center">
          <h1>About</h1>
          <p>GG 블로그는 주인장이 직접 체험한 것의 기록 공간</p>
        </div>
      </header>
      <br><br>
      <div class="container" id="content_1">
        <div class="row">
          <div class="col-md-6">
            <h3 style="font-family: 'Hi Melody', cursive;">GG 블로그에서 좋은 정보 얻어가세요</h3>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: 'Hi Melody', cursive;font-weight: bold;color: brown;font-size: 20px">
                        여행 이야기
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="font-family: 'Nanum Pen Script', cursive; font-size: 25px;font-weight: bold">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-family: 'Hi Melody', cursive;font-weight: bold;color: brown;font-size: 20px">
                        생활의 지혜
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body"  style="font-family: 'Nanum Pen Script', cursive; font-size: 25px;font-weight: bold;">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-family: 'Hi Melody', cursive;font-weight: bold;color: brown;font-size: 20px">
                        맛있는 식당
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body"  style="font-family: 'Nanum Pen Script', cursive; font-size: 25px;font-weight: bold;">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="font-family: 'Hi Melody', cursive;font-weight: bold;color: brown;font-size: 20px">
                        인생 영화
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body" style="font-family: 'Nanum Pen Script', cursive; font-size: 25px;font-weight: bold">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-md-6">
            <h3 style="font-family: 'Hi Melody', cursive;">여행과 음식 그리고 영화</h3>
            <div class="col-md-12">
              <table class="table table-bordered">
              <tr>
                <td>
                  <img src="images/content/1.jpg" class="img-responsive book1">
                </td>
                <td>
                  <img src="images/content/2.jpg" class="img-responsive book1">
                </td>
              </tr>
              <tr>
                <td>
                  <img src="images/content/3.jpg" class="img-responsive book1">
                </td>
                <td>
                  <img src="images/content/4.jpg" class="img-responsive book1">
                </td>
              </tr>
              </table>
            </div>
          </div>
        </div>
      </div>      
<!-- ======================================================================================================== -->
      <div id="portfolio"></div>
        <br><br>
        <header class="content1">
          <div class="container" align="center">
            <h1>Portfolio</h1>
            <p>직접 다녀온 식당 그리고 추천 영화</p>
          </div>
        </header>
        <br><br>
      <!-- carousel2 start -->
      <div class="container pics">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
      <!--portfolio 첫번째 사진들 배치시작-->
            <div class="row">
              <div class="col-xs-3 col-lg-3 pic">
                <div class="thumbnail site"><img src="images/portfolio/site1.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">태국 레스토랑 반짠</h4>
                <p>맛있는 팟타이, 고기 듬뿍 소고기 쌀국수 현지 느낌 레스토랑</p>
                </div>
              </div>
              <div class="col-xs-3 col-lg-3">
                <div class="thumbnail site"><img src="images/portfolio/site2.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">아리한정식</h4>
                <p>부모님 모시고 가기 딱 좋은 한정식 코스요리 전문점</p>
                </div>
              </div>
              <div class="col-xs-3 col-lg-3">
                <div class="thumbnail site"><img src="images/portfolio/site3.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">아임타이</h4>
                <p>호불호 없이 입맛에 맞는 팟타이 요리 전문점</p>
                </div>
              </div>
              <div class="col-xs-3 col-lg-3">
              <div class="thumbnail site"><img src="images/portfolio/site4.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">군자대한곱창</h4>
                <p>가격이 비싼 요리지만 먹어보면 후회하지 않을 식당</p>
                </div>
              </div>
            </div>
          </div>
          <!--portfolio 첫번째 사진들 배치끝-->
          <!--portfolio 두번째 사진들 배치시작-->
          <div class="item">
            <div class="row">
              <div class="col-xs-3 col-lg-3">
                <div class="thumbnail site"><img src="images/portfolio/site5.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">영화 355</h4>
                <p>각국의 여성 스파이가 펼치는 익스트림한 액션 영화</p>
                </div>
              </div>
              <div class="col-xs-3 col-lg-3">
                <div class="thumbnail site"><img src="images/portfolio/site6.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">영화 언힌지드</h4>
                <p>사소한 사건으로 주인공 가족이 위협당하는 스릴러 영화</p>
                </div>
              </div>
              <div class="col-xs-3 col-lg-3">
                <div class="thumbnail site"><img src="images/portfolio/site7.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">영화 미나리</h4>
                <p>희망으로 하루하루 뿌리 내리며 살아가는 어느 가족의 아주 특별한 이야기</p>
                </div>
              </div>
              <div class="col-xs-3 col-lg-3">
              <div class="thumbnail site"><img src="images/portfolio/site8.jpg"> <!-- thumbnail site 넣고 안넣고 해보기 -->
                <h4 class="thumbnail_title">영화 소울</h4>
                <p>예기치 못한 사고로 영혼이 된 주인공의 좌충우돌 이야기</p>
                </div>
              </div>
            </div>
          <!--portfolio 두번째 사진들 배치끝-->
          </div>
        </div><!--carousel-inner end-->
      </div><!--carousel-example end-->
        </div>  <!-- carousel2 end -->
        <div class="pics_tag">
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">태국 레스토랑 반짠</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">아리한정식</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">아임타이</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">군자대한곱창</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">영화 355</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">영화 언힌지드</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">영화 미나리</a>
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">영화 소울</a>
          <div class="collapse" id="collapseExample1"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">반짠<br> 가게는 크지않고 한식으로따지자면 가정식백반집? 같은느낌의 가게입니다. 음식 하나하나 다 맛있고 인태리어나 소품들도 아기자기하니 이쁘고 깔끔함이 좋습니다.</div></div>
          <div class="collapse" id="collapseExample2"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">아리한정식<br>깔끔하고 한식과 현대를 조화한 음식, 가격은 만만찮은 수준이나, 나 자신의 호사를 위해 가볼만한 곳입니다.</div></div>
          <div class="collapse" id="collapseExample3"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">아임타이<br>태국요리를 제대로 소개하는데 중점을 두고 있는 타이 누들 전문점입니다. 다양한 태국음식 및 동남아 요리를 합리적인 가격으로 소개하고 있습니다. 누들뿐만 아니라 대중적인 태국요리도 같이 선보이고 있는데요. 메뉴는 시즌마다 업데이트 됩니다.</div></div>
          <div class="collapse" id="collapseExample4"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">군자대한곱창입니다<br>나혼자산다 화사 때문에 유명해진 곱창집. 맛과 서비스, 가격은 다른 곱창집과 비슷합니다.잡내 없는 소곱창에 불향을 입혀내 불쇼 보는 재미도 있으며 맛은 고소하고 느끼함이 덜한 편!! 그리고 마무리로 깍두기볶음밥이 별미입니다.</div></div>
          <div class="collapse" id="collapseExample5"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">영화 355<br>이때까지의 첩보물 영화 주인공이 남자였지만 이 영화는 여성 첩보원들이 주인공으로 신선하고 색다른 액션을 보여줍니다.</div></div>
          <div class="collapse" id="collapseExample6"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">영화 언힌지드<br>월요일 아침, 학교에 늦은 아들을 데려다 주고 출근을 해야하는 레이첼. 꽉 막힌 도로, 직진 신호가 되었는데도 앞 차가 움직일 생각을 하지 않는다. 짜증이 난 레이첼은 필요 이상으로 경적을 크게 울리고, 앞 차의 운전자는 그녀의 무례한 행동에 사과를 요구한다. 이를 무시한 채 그녀는 황급히 자리를 벗어나지만, 앞에 있던 차가 그녀를 따라오기 시작한다.</div></div>  
          <div class="collapse" id="collapseExample7"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">영화 미나리<br>1980년대 미국으로 이민간 한국 이민자 가족이 시골에서 농장을 만드는 아메리카 드림 이야기를 다룬 영화다.</div></div>
          <div class="collapse" id="collapseExample8"><div class="well" style="font-family: 'Noto Serif KR', cursive;font-size: 25px;">영화 소울<br>조 가드너는 뉴욕시의 재즈 뮤지션이며, 한 중학교에서 시간제 교사로 밴드를 가르치고 있다.조는 시간제 교사가 아닌 정직원이 될 것을 제안 받아 안정된 직업을 가질 기회가 있지만 직업 연주자의 길을 선호한다. 한편 옛 제자로부터 유명 재즈음악가인 도로시 윌리엄스의 밴드에 피아니스트가 비어 있다는 연락을 받은 오디션에 응모한다.</div></div>
        </div>
      </div>
<!-- ======================================================================================================== -->
    <div id="contact"></div>
      <br><br>
      <header class="content1">
        <div class="container" align="center">
          <h1>Contact</h1>
          <p>추가적인 정보나 연락은 여기로 부탁드립니다.</p>
        </div>
      </header>
      <br><br>
    <div class="container">
      <div class="col-lg-6">
        <h4 style="font-family: 'Hi Melody', cursive;font-weight: bold;" align="center" >공지사항</h4>
    <table class="table table-bordered" style="margin-top: -10px;">
      <tr>
        <th>글번호</th>
        <th>글제목</th>
        <th>작성자</th>
        <th>작성일</th>
        <th>조회수</th>
      </tr>
      <?
        $conn=mysqli_connect("localhost","root","autoset","mydb");
        $sql="select * from notice order by no desc limit 0,5";
        $rs=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($rs)){
      ?>
      <tr>
        <td><?=$row["no"]?></td>
        <td>
          <? if(isset($_SESSION["id"])){ ?>
          <a href="notice_content.php?no=<?=$row["no"]?>">
              <?=$row["title"]?>
          </a>
          <? }else{ ?>
              <?=$row["title"]?>
          <? } ?>
        </td>
        <td><?=$row["writer"]?></td>
        <td><?=$row["writeday"]?></td>
        <td><?=$row["hit"]?></td>
      </tr>
    <? } ?>
    <form name="frm1" method="post" action="notice_search.php">
    <tr>
      <td colspan="5" align="center">
        <input type="button" value="공지사항 보기" onclick="location.href='notice.php'" class="btn btn-primary">
      </td>
    </tr>
    </form>
    </table>
    </div>
    <div class="col-lg-6">
      <h4 style="font-family: 'Hi Melody', cursive;font-weight: bold;" align="center">연락처</h4>
      <table class="table table-bordered" align="center" style="margin-top: -10px;">
        <tr>
          <td>
            <span class="glyphicon glyphicon-home foot"></span>
          </td>
          <td>
            <p class="foot1">&nbsp;부산광역시 해운대구 우동 마린빌딩 302호</p>
          </td>
        </tr>
        <tr>
          <td>
            <span class="glyphicon glyphicon-phone-alt foot"></span>
          </td>
          <td>
            <p class="foot1">&nbsp;051-000-0000</p>
          </td>
        </tr>
        <tr>
          <td>
            <span class="glyphicon glyphicon-envelope foot"></span>
          </td>
          <td>
            <p class="foot1">&nbsp;test@test.com</p>
          </td>
        </tr>
        <tr>
          <td>
            <span class="glyphicon glyphicon-tag foot"></span>
          </td>
          <td>
            <p class="foot1">&nbsp;ggblog.com</p>
          </td>
        </tr>
      </table>
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
    
  </body>
</html>
