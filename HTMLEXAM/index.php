<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
	<title>더조은 여행 가이드</title>
</head>
<body>
	<div id="top_menu">
		<div class="menu_box">
			<div class="menu_btn">로그인</div>
			<div class="menu_btn">회원가입</div>
			<div class="menu_btn">고객센터</div>
		</div>
	</div>
	<div id="nav_tap">
		<div class="logo"><a href="index.php"><img src="logo/LOGO.png"></a></div>	
		<nav>
			<ul class="menu">
				<li>제주여행
					<ul class="submenu">
						<li>서브메뉴</li>
						<li>서브메뉴</li>
						<li>서브메뉴</li>
					</ul>
				</li>
				<li>내륙여행
					<ul class="submenu">
						<li>서브메뉴</li>
						<li>서브메뉴</li>
						<li>서브메뉴</li>
					</ul>
					
				</li>
				<li>섬여행
					<ul class="submenu">
						<li>서브메뉴</li>
						<li>서브메뉴</li>
						<li>서브메뉴</li>
					</ul>
					
				</li>
				<li>부산출발
					<ul class="submenu">
						<li>서브메뉴</li>
					</ul>
					
				</li>
				<li>
					<div class="tot_box">
						<div class="tot_btn"></div>전체메뉴
					</div>				
				</li>
			</ul>
		</nav>
	</div>

	<div id="search_tap">
		<div class="search_left">
			<div class="search_box">
				<select class="select_box">
					<option>인천/서울 출발</option>
					<option>부산 출발</option>
					<option>무안 출발</option>
					<option>제주 출발</option>
				</select>
				<input type="text" placeholder="'국가/도시' 또는 '단체번호/상품코드' 검색"
				class="search_btn">
				<div class="search_logo"><a href="#"><img src="images/search.png"></a></div>
			</div>
			<div class="recommends">
				<div class="re_btn">국내제주</div>
				<div class="re_btn">섬여행</div>
				<div class="re_btn">강원도</div>
				<div class="re_btn">부산</div>
				<div class="re_btn">기차여행</div>
			</div>
		</div>
		<div class="search_icons">
			<div class="icon">
				<a href="#"><img src="images/plane.png"></a>항공권 예약</div>
			<div class="icon">
				<a href="#"><img src="images/hotel.png"></a>호텔 예약</div>
			<div class="icon">
				<a href="#"><img src="images/tickets.png"></a>입장권 예약</div>
		</div>
	</div>
	<div id="imgslide">
		<div class="imgbtns">점 9개</div>
		<div class="imgframe">
			<img src="images/slide/images (1).jpg">
			<img src="images/slide/images (2).jpg">
			<img src="images/slide/images (3).jpg">
			<img src="images/slide/images (4).jpg">
			<img src="images/slide/images (5).jpg">
			<img src="images/slide/images (6).jpg">
			<img src="images/slide/images (7).jpg">
			<img src="images/slide/images (8).jpg">
			<img src="images/slide/images (9).jpg">
		</div>
	</div>
	<div id="board">
		<div class="board_left">
			<h2>상담문의</h2><br><hr>
			<div class="board_left_temp">
			<div class="board_left1"><h3>더조은 투어 상담문의</h3>1544-0000
				<div><h3>항공권 전용 상담</h3>1544-0000</div>
				<div><h4>1번</h4>해외항공<br>① 신규예약<br>② 변경,취소,환불<br>③ 기타</div>
				<div><h4>2번</h4>국내항공</div></div>
			<div class="board_left1"><h3>ARS 상담번호 안내</h3>
				<div><h4>1번</h4>여행상담<br> ① 해외여행 ② 국내여행 </div>
				<div><h4>2번</h4>항공권<br> ① 해외항공 ② 국내항공</div>
				<div><h4>3번</h4>호텔,현지투어,패스문의<br> ① 해외호텔 ② 국내호텔 ③ 현지투어,패스</div>
				<div><h4>0번</h4>ARS 결제</div>	</div>
			<div class="board_left1"><h3>상담 시간 안내</h3>
				<div><h4>해외여행 예약상담</h4>평일 10:00 ~ 14:30<br>(토/일요일 및 공휴일 휴무)<br></div>
				<div><h4>실시간해외항공권/호텔, 국내여행, 제휴카드 상담</h4>
				평일 10:00 ~ 14:30<br>(토/일요일 및 공휴일 휴무)</div>
				<div><h4>국내항공권 문의</h4> 평일 10:00 ~ 14:30<br>(주말 및 공휴일 휴무)</div>
				<div><h4>기업단체 문의</h4>https://biz.modetour.com</div></div>
			</div>
		</div>
		<div class="board_right">
			<h2>이용안내</h2><br><hr>
			<table class="table1">
			<tr>
				<td onClick="location.href='#'">고객센터</td>
				<td onClick="location.href='#'">여행정보</td>
			</tr>
			<tr>
				<td onClick="location.href='#'">자주 묻는 질문</td>
				<td onClick="location.href='#'">ARS 카드 결제</td>
			</tr>
			<tr>
				<td onClick="location.href='#'">예약 취소 안내</td>
				<td onClick="location.href='#'">베스트파트너 <br>대리점안내</td>
			</tr>
			<tr>
				<td onClick="location.href='#'">회원탈퇴</td>
				<td onClick="location.href='#'">모두투어 <br>플러스친구</td>
			</tr>
			</table>
		</div>
	</div>
	<footer>
		<div class="bottom_menu">
			<ul>
				<li>
					회사소개
				</li>
				<li>
					개인정보처리방침
				</li>
				<li>
					여행약관
				</li>
				<li>
					이용약관
				</li>
				<li>
					여행보험
				</li>
				<li>
					온라인제휴안내
				</li>
				<li>
					여행플래너
				</li>
				<li>
					대리점개설안내
				</li>
			</ul>
		</div>
	</footer>
</body>
</html>