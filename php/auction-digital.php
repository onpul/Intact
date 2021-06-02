<!-- 로그인 전 경매 디지털 페이지 -->
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
			<div class="flex-item">
			  <!-- 네비게이션1 -->
				<nav class="nav">
					<ul class="mainmenu">
						<li id="auc"><a href="auction.html" class="menu-link">경매
						</a></li>
						<li id="exh"><a href="exhibit.html" class="menu-link">전시회
						</a></li>
					</ul>
			  </nav>
			  <!-- 검색창 -->
			  <form class="search-form" action="search.php">
				  <input type="search">
					<button type="button" name="button"></button>
			  </form>
			  <!-- 네비게이션2 -->
			  <nav class="nav">
			  	<li><a href="login.html" class="menu-link">로그인</a></li>
			  </nav>
			</div>
		</header>
		<!-- 헤더 끝 -->
		<!-- 메인 시작 -->
		<div class="main">
			<!-- 경매 컨테이너 -->
			<div class="auction-container">
				<div class="select">
					<select class="post-menu" name="menu" onchange="location.href=(this.value);">
						<option value="auction.html"><a href="auction.html">회화 작품</a></option>
						<option value="auction-digital.html" selected><a href="auction-digital.html">디지털 작품</a></option>
					</select>
				</div>
				<div class="auction-pre">
					<p>진행 예정 경매</p>
	        <ul class="auction-pre-img">
	  				<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
  				</ul>
				</div>
				<div class="auction-ing">
        <p>진행 중인 경매</p>
					<ul class="auction-ing-img">
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
	  			</ul>
				</div>
        <div class="auction-last">
				<p>지난 경매</p>
					<ul class="auction-last-img">
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
						<li>
							<a href="auction-ing.html" class="art-img">
							<img src="./images/ex1.jpg" alt="">
							<div class="hover_text">
								<ul class="art-info">
									<li>경매 전시회명</li>
									<li>경매 진행 기간</li>
									<li>작품명</li>
									<li>경매 시작가</li>
									<li>작가명</li>
								</ul>
							</div>
							</a>
						</li>
					</ul>
        </div>
				<div class="plus-button">
					<p>더보기 +</p>
				</div>
      </div>
		</div>
		<!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<!-- <div class="footer">
			<div class="content">
				<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
			</div>
		</div> -->
		<!-- 푸터 끝-->
	</div>
</body>
</html>
