<!-- 경매 진행 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intact</title>
	<link rel="stylesheet" href="css/index.css?ver=1">
	<link rel="stylesheet" href="css/layout.css?ver=1">
	<link rel="stylesheet" href="css/default.css?ver=1">
	<link rel="stylesheet" href="css/auction-ing.css">
</head>
<body>
	<div class="main-container">
    <!-- 헤더 시작 -->
  	<header class="header">
  		<!-- 로고 -->
  	  <div class="logo">
  			<a href="./index-login.html">
  			<img src="./images/main_logo.png" alt="Intact">
  			</a>
  	  </div>
  	  <!-- 네비게이션1 -->
  		<nav class="nav">
  			<ul class="mainmenu">
  				<li><a href="auction-login.html" class="menu-link">경매
  					<ul class="submenu">
  						<li><a href="#">그래픽</a></li>
  						<li><a href="#">회화</a></li>
  					</ul>
  				</a></li>
  				<li><a href="exhibit-login.html" class="menu-link">전시회
  					<ul class="submenu">
  						<li><a href="#">그래픽</a></li>
  						<li><a href="#">회화</a></li>
  					</ul>
  				</a></li>
  			</ul>
  	  </nav>
  	  <!-- 검색창 -->
  	  <form class="search-form" action="search.php">
  	  <input type="search">
  	  </form>
  	  <!-- 네비게이션2 -->
  	  <nav class="nav">
  	  	<li><a href="mypage.html" class="menu-link">마이페이지</a></li>
  	  </nav>
  	</header>
  	<!-- 헤더 끝 -->
		<!-- 메인 시작 -->
		<div class="main">
			<div class="auction-container">
				<!-- 상단 정보 -->
				<div class="info">
					<ul>
						<li>
							<img src="./images/live@2x.png" alt="">
						</li>
					</ul>
					<ul class="info-text">
						<li id="art-name">NK (Syracuse Line-Up) (2014)</li><!--작품제목-->
						<li id="exh-name">Rose Wylie 作</li><!--전시회 이름-->
						<li id="size">100호 162.2×130.3㎝</li><!--작품규격-->
					</ul>
				</div>
				<!-- 타이머 -->
				<div class="timer">
					<div class="">
						타이머
					</div>
				</div>
				<!-- 경매 기간 -->
				<div class="date">
					<ul class="start">
						<li>경매시작일</li>
						<li>2021년 04월 16일 (금)</li><!-- 경매시작일 -->
						<li>|</li><!-- 구분선 -->
						<li>AM 10:00</li><!-- 경매시작시간 -->
					</ul>
					<ul class="end">
						<li>경매마감일</li>
						<li>2021년 04월 29일 (목)</li><!-- 경매시작일 -->
						<li>|</li><!-- 구분선 -->
						<li>PM 02:00</li><!-- 경매시작시간 -->
					</ul>
				</div>
				<!-- 작품 사진, 작가 정보 -->
				<div class="art">
					<div class="art-img area">
						<img src="./images/sample6.jpg" alt="작품 이미지">
					</div>
					<div class="author-info area">
		        <a href="#">
		          <ul>
		            <li>작가명</li>
		          </ul>
		          <ul class="profile">
		            <li><img class="profile-img" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" alt="프로필 사진"></li>
		          </ul>
		        </a>
		      </div>
				</div>
				<!-- 가격, 응찰 -->
				<div class="price">
					<div class="price-box area1">
						<ul class="starting">
							<li>시작가(원)</li>
							<li>100,000</li>
						</ul>
						<ul class="unit">
							<li>응찰단위(원)</li>
							<li>50,000</li>
						</ul>
						<ul class="now-price">
							<li>현재 응찰가(원)</li>
							<li>1,000,000</li>
						</ul>
					</div>
					<ul class="peddle area1">
						<li class="bidding-button">
							<!-- <img src="./images/paddle@2x.png" alt="응찰하기"> -->
							<img id="finish" src="./images/finish@2x.png" alt="응찰하기">
							<div class="bidding">
								<form action=""><label for="bidding" id="modal-btn" style="cursor:pointer"><span style="font-size:15px">응찰 종료</span><br>결과 확인</label>
								</form>
							</div>
						</li>
					</ul>
				</div>
        <div class="modal-bg"></div>
        <div class="modal-wrap">
          <div class="modal-close"><a href="#">close</a></div>
            <div class="modal-content">
              <ul>
                <li id="title">응찰 결과</li>
                <li id="content">낙찰을 축하합니다.</li>
                <li id="purchase"><a href="purchase-login.html">구매하기</a></li>
              </ul>
            </div>
        </div>
				<!-- 실시간 경매 현황 -->
				<div class="status">
					<ul class="status-ul">
						<li id="status-text">실시간 경매 현황</li>
						<li><p>응찰자는 가장 먼저 응찰 버튼을 누른 응찰자의 닉네임이 보여집니다.<p></li>
					</ul>
					<ul class="status-table">
						<li id="up"><img src="./images/up@2x.png" alt="up"></li>
						<li>
							<table>
								<thead>
									<tr>
										<th>응찰 단계</th><th>현재 응찰가(원)</th><th>응찰자 닉네임</th>
									</tr>
								</thead>
								<tbody>
									<tr id="top">
										<td>15</td><td>1,000,000</td><td>Miso</td>
									</tr>
									<tr>
										<td>14</td><td>950,000</td><td>닉네임A</td>
									</tr>
									<tr>
										<td>13</td><td>900,000</td><td>닉네임B</td>
									</tr>
									<tr>
										<td>12</td><td>850,000</td><td>닉네임C</td>
									</tr>
									<tr id="bottom">
										<td>11</td><td>800,000</td><td>닉네임D</td>
									</tr>
								</tbody>
							</table>
						</li>
					</ul>
				</div>
				<!-- 경매 참여 및 진행 방법 -->
				<div class="description">
					<div class="rule">
						<ul>
							<li id="title">경매 참여 및 진행 방법</li>
							<li id="content">경매 작품 응찰 버튼을 클릭할 시 현재 응찰가의 응찰이 됩니다.<br>
								그런 뒤 바로 다음 응찰가 버튼이 생성되고 이런 식으로 계속 응찰을 진행합니다.<br>
								경매가 종료되면 마지막 응찰가로 낙찰이 되고 구매가 가능합니다.</li>
						</ul>
					</div>
					<!-- 경매 작품 상세 -->
					<div class="detail">
						<ul>
							<li id="title">경매 작품 상세</li>
							<li id="art-detail">
								<img src="./images/sample6.jpg" alt="작품 이미지"><!--작품 이미지-->
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<div class="footer">
			<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
		</div>
		<!-- 푸터 끝-->
	</div>
  <script type="text/javascript">
    // 모달창 노출 js
    window.onload = function() {

    function onClick() {
        document.querySelector('.modal-wrap').style.display ='block';
        document.querySelector('.modal-bg').style.display ='block';
    }
    function offClick() {
        document.querySelector('.modal-wrap').style.display ='none';
        document.querySelector('.modal-bg').style.display ='none';
    }

    document.getElementById('modal-btn').addEventListener('click', onClick);
    document.querySelector('.modal-close').addEventListener('click', offClick);

    };
  </script>
</body>
</html>
