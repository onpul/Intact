<!-- 스크랩 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intact</title>
	<link rel="stylesheet" href="css/mypage.css?ver=1">
	<link rel="stylesheet" href="css/layout.css?ver=1">
	<link rel="stylesheet" href="css/default.css?ver=1">
	<style>
		/* 메인 스크랩 스타일 */
		.scraping {
			padding: 30px;
			display: grid;
			row-gap: 30px;
			column-gap: 20px;
			grid-template-columns: repeat(4, 1fr);
			place-items: center center;
			align-content: center;
			justify-content: center;
		}
		.item {
		  width: 200px;
		  height: 200px;
		  overflow: hidden;
			position: relative;
			cursor: pointer;
			background-color: #eee;
		}
		.scraping {
			margin-top: 70px;
			margin-bottom: 70px;
		}
		#scrap-img{
		  width: 100%;
		  height: 100%;
		  object-fit: cover;
			display:inline-block;
			position: absolute;
			bottom: 0;
			overflow: hidden;
		}
		.art-info {
			text-align: left;
			background-color: #ffffff;
			width: 100%;
			height: 60px;
			color: black;
			position: absolute;
			opacity: 0;
			bottom: 0;
			z-index: 5;
		}
		.item:hover .art-info {
			opacity: 0.8;
		}
	</style>
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
      <!-- 메뉴바 -->
			<!-- 메뉴바 -->
      <ul class="menu">
  			<li class="menu-item">
  				<a href="mypage.html" class="menu-link">내 프로필</a>
  			</li>
				<li class="menu-item">
  				<a href="fav-author.html" class="menu-link">좋아하는 작가</a>
  			</li>
  			<li class="menu-item">
  				<a href="scraping.html" class="menu-link">스크랩</a>
  			</li>
  		</ul>
      <!-- 메인 컨테이너 -->
      <div class="container">
				<div class="scraping">
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
					<div class="item"><a href="exhibit-intro.html"><img id="scrap-img" src="" alt="작품">
						<ul class="art-info">
							<li>전시회 제목</li>
							<li>작가명</li>
						</ul>
					</a></div>
				</div>
		  </div>
		<!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<!-- <div class="footer">
			<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
		</div> -->
		<!-- 푸터 끝-->
	</div>
</body>
</html>
