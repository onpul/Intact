<!-- 마이페이지-전시회 게시물 페이지 -->
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
      <!-- <ul class="menu">
  			<li class="menu-item">
  				<a href="mypage.html" class="menu-link">내 프로필</a>
  			</li>
				<li class="menu-item">
  				<a href="fav-author.html" class="menu-link">좋아하는 작가</a>
  			</li>
  			<li class="menu-item">
  				<a href="scraping.html" class="menu-link">스크랩</a>
  			</li>
  		</ul> -->
      <!-- 메인 컨테이너 -->
      <div class="container">
				<div class="profile">
					<div class="my">
						<div class="profile-img"><img id="profile-img" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" alt="프로필 사진">
						</div>
						<ul>
							<li>타 사용자 이름</li>
							<ul>
								<li>팔로워</li>
								<li>000</li>
								<li>팔로잉</li>
								<li>000</li>
							</ul>
						</ul>
					</div>
					<div class="follow">
						<button id="followButton">팔로우</button>
					</div>
				</div>
				<div class="introduce">
					<ul>
						<li id="title">소개</li>
						<li id="content">일상을 그리는 작가입니다.<br>일상을 만화로 그리며 즐거움을 전달합니다.</li>
					</ul>
				</div>
				<div class="post">
					<div class="select">
						<select class="post-menu" name="menu" onchange="location.href=this.value">
							<option value="나의 전시회"><a href="#">전시회</a></option>
							<option value="나의 판매작품"><a href="#">판매작품</a></option>
							<option value="나의 경매작품"><a href="#">경매작품</a></option>
						</select>
					</div>
					<div class="post-container">
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
						<div class="item">
							<a href="auction-ing.html"><img class="post-img" src="" alt="작품"></a>
						</div>
					</div>
				</div>
      </div>
		</div>
		<!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<!-- <div class="footer">
			<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
		</div> -->
		<!-- 푸터 끝-->
	</div>
	<!-- 팔로우 누르면 팔로잉, 다시 팔로잉 누르면 팔로우 버튼 노출 -->
  <script type="text/javascript">
    // var countF = 0;
    // var countButton = document.getElementById("followButton");
    // var displayCount = document.getElementById("followers");
    // countButton.onclick = function() {
    // if (countButton.innerText == "팔로우") {
    //     countF++;
    //     countButton.innerText = "팔로잉";
    //   } else if (countButton.innerText == "팔로잉") {
    //     countF--;
    //     countButton.innerText = "팔로우";
    //   }
    //   followers.innerHTML = countF;
    // }
  </script>
</body>
</html>
