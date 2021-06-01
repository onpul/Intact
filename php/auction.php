<!-- 경매 메인 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intact</title>
	<link rel="stylesheet" href="css/auction.css?ver=1">
	<link rel="stylesheet" href="css/layout.css?ver=1">
	<link rel="stylesheet" href="css/default.css?ver=1">
</head>
<body>
	<div class="main-container">
		<!-- 헤더 시작 -->
		<header class="header">
			<!-- 로고 -->
			<div class="logo">
				<a href="./index.html">
				<img src="./images/main_logo.png" alt="Intact">
				</a>
			</div>
			<!-- 네비게이션1 -->
			<nav class="nav">
				<ul class="mainmenu">
					<li><a href="auction.html" class="menu-link">경매
						<ul class="submenu">
							<li><a href="#">그래픽</a></li>
							<li><a href="#">회화</a></li>
						</ul>
					</a></li>
					<li><a href="exhibit.html" class="menu-link">전시회
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
				<li><a href="login.html" class="menu-link">로그인</a></li>
				<li><a href="join.html" class="menu-link">회원가입</a></li>
			</nav>
		</header>
		<!-- 헤더 끝 -->
		<!-- 메인 시작 -->
		<div class="main">
			<div class="slide">
				<input type="radio" name="slide" id="slide01" checked>
				<input type="radio" name="slide" id="slide02">
				<input type="radio" name="slide" id="slide03">
				<!-- 슬라이드 영역 -->
				<div class="slidewrap">
					<ul class="slidelist">
						<li class="slideitem">
							<a><img src="./images/ex1.jpg"></a>
						</li>
						<li class="slideitem">
							<a><img src="./images/ex2.jpg"></a>
						</li>
						<li class="slideitem">
							<a><img src="./images/ex3.jpg"></a>
						</li class="slideitem">
						<!-- 좌, 우 슬라이드 버튼 -->
						<div class="slide-control">
							<div>
								<label for="slide03" class="left"></label>
								<label for="slide02" class="right"></label>
							</div>
							<div>
								<label for="slide01" class="left"></label>
								<label for="slide03" class="right"></label>
							</div>
							<div>
								<label for="slide02" class="left"></label>
								<label for="slide01" class="right"></label>
							</div>
						</div>
					</ul>
				</div>
			</div>
			<!-- icon1 -->
			<div class="icon1">
				<a href="#">
				<img src="./images/scroll.png" alt="더 많은 추천작을 보려면">
				<p>스크롤</p>
				</a>
			</div>
			<!-- 경매 컨테이너 -->
			<div class="auction-container">
				<div class="auction-pre">
					<p>진행 예정 경매</p>
	        <ul class="auction-pre-img">
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex1.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex1.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex1.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex1.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
  				</ul>
				</div>
				<div class="auction-ing">
        <p>진행 중인 경매</p>
					<ul class="auction-ing-img">
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex2.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex2.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex2.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  				<li><a href="auction-ing.html" class="art-img"><img src="./images/ex2.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
	  			</ul>
				</div>
        <div class="auction-last">
				<p>지난 경매</p>
					<ul class="auction-last-img">
						<li><a href="auction-ing.html" class="art-img"><img src="./images/ex3.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
						<li><a href="auction-ing.html" class="art-img"><img src="./images/ex3.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
						<li><a href="auction-ing.html" class="art-img"><img src="./images/ex3.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
						<li><a href="auction-ing.html" class="art-img"><img src="./images/ex3.jpg" alt=""><div class="hover_text">
							<ul class="art-info"><li>작품명</li><li>작가명</li><li>작품기간</li></ul></div></a></li>
						</ul>
        </div>
      </div>
		</div>
		<!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<div class="footer">
			<div class="content">
				<!-- <address>(14097)경기도 안양시 만안구 성결대학로 53 TEL (031)467-8114</address> -->
				<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
			</div>
		</div>
		<!-- 푸터 끝-->
	</div>
</body>
</html>
