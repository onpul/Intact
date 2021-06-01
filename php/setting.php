<!-- 마이페이지-전시회 게시물 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intact</title>
	<link rel="stylesheet" href="css/layout.css?ver=1">
	<link rel="stylesheet" href="css/default.css?ver=1">
  <style>
    /* 메인 섹션 */
    .container {
    	max-width: 900px;
    	height: 100vh;
    	margin-left: auto;
    	margin-right: auto;
    }
    /* 메뉴바 */
    .menu {
    	margin-top: 10px;
    	display: flex;
    	flex-wrap: nowrap;
      background: #ffffff;
    	max-width: 900px;
      height: 50px;
    	justify-content: space-around;
      align-items: center;
    	margin-left: auto;
    	margin-right: auto;
    	border-bottom: 1px solid #D1D1D1;
    }
    .menu-item {
    	width: 15%;
    }
    .menu-link {
    	display: block;
    	text-decoration: none;
    	text-align: center;
    }
    .menu li:hover > ul{display: block;}
    .menu li a:hover{text-decoration: underline;}

    /* 프로필 */
    .profile-set {
    	padding-bottom: 40px;
      padding-top: 40px;
      margin-left: auto;
      margin-right: auto;
    }
    .profile-set > p {
      font-weight: bold;
      margin-bottom: 40px;
    }
    .profile-img-set {
      margin-top: 20px;
      text-align: center;
    }
    .profile-img {
      width: 85px;
      height: 85px;
      border-radius: 70%;
      overflow: hidden;
      margin-left: auto;
    	margin-right: auto;
      background: #000000;
    }
    #profile-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .content-box {
      margin-top: 40px;
			margin-bottom: 100px;
      width: 900px;
    }
    .content-box input, textarea {
    	height: 20px;
      width: 800px;
    }
		.name-box, .introduce-box {
			width: 806.7px;
			margin-left: auto;
			margin-right: auto;
		}
		.name-box {
			margin-bottom: 50px;
		}
		.content-box input[type="text"],
		.content-box textarea {
			border: 0;
			border-bottom: 1px solid #000000;
		}
		.content-box #label {
			margin-bottom: 30px;
		}
		.save {
			padding-top: 50px;
			padding-left: 700px;
			text-align: center;
		}
		.save label {
			margin-left: auto;
			padding: 10px;
			padding-left: 20px;
			padding-right: 20px;
			border-radius: 10px;
			color: #ffffff;
			background: #000000;
			cursor: pointer;
			border: 0;
			border: 1px solid #000000;
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
        <div class="profile-set">
          <p>내 프로필 설정 변경</p>
          <div class="profile-img"><img id="profile-img" src="" alt="프로필 사진">
					</div>
          <form class="profile-img-set" action="" method="post">
            <label for="img-set">프로필 사진 변경</label>
            <input type="file" accept="image/*" id="img-set" style="display:none;"></input>
          </form>
          <div class="content-box">
            <form class="content" action="" method="post">
              <ul class="name-box">
                <li id="label"><label className="name" for="name">이름</label></li>
                <li><input id="name" type="text" maxlength='15' name="name" placeholder="닉네임" style="outline:none"></li>
              </ul>
              <ul class="introduce-box">
                <li id="label"><label for="introduce">자기소개</label></li>
                <li>
									<textarea id="introduce" maxlength="1000" name="content" placeholder="소개글을 입력해주세요." style="resize:none; outline:none; overflow:hidden;" onkeydown="resize(this)"></textarea>
								</li>
              </ul>
            </form>
          </div>
					<div class="save">
						<label for="save">내용 저장</label>
						<input type="submit" className="save-button" id="save" value="내용 저장" style="display:none;">
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
	<script>
		function resize(obj) {
		  obj.style.height = "1px";
		  obj.style.height = (12+obj.scrollHeight)+"px";
		}
	</script>
</body>
</html>
