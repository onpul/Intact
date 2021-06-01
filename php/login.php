<!-- 로그인 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intact</title>
	<!-- <link rel="stylesheet" href="css/index.css"> -->
	<link rel="stylesheet" href="css/layout.css?ver=1">
	<link rel="stylesheet" href="css/default.css?ver=1">
  <style>
		html, body {
			width: 100%;
			height: 100vh;
		}
		.main-container {
			height: 100vh;
			position: fixed;
			overflow: hidden;
		}
		.footer {
			bottom: 0;
		}
    .textbox{
    	width: 460px;
    	text-align: left;
			padding-top: 40px;
			padding-bottom: 20px;
			font-size: 20px;
    }
    .login-container{
      padding-top: 40px;
      padding-bottom: 90px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .login-box{
      width: 460px;
      height: 48px;
      border: solid 1px #707070;
      border-radius: 10px;
      background: white;
    }
    .login-box input{
    	border: none;
    	width:440px;
    	margin-top: 8px;
    	font-size: 12px;
    	margin-left: 12px;
    	height:30px;
			outline: none;
    }
		.password-box{
			width: 460px;
			height: 48px;
			border: solid 1px #707070;
			border-radius: 10px;
			background: white;
			margin-top: 15px;
		}
		.password-box input{
			border: none;
			width:440px;
			margin-top: 8px;
			font-size: 12px;
			margin-left: 12px;
			height:30px;
			outline: none;
		}
    .login-button {
    	width: 460px;
    	height: 48px;
			margin-top: 15px;
    	font-size: 18px;
			color: white;
    	background: #FF7F00;
    	border: solid 1px #FF7F00;
      border-radius: 10px;
			cursor: pointer;
    }
		.login-etc {
			width: 460px;
		}
		.login-etc ul{
			list-style: none;

		}
		.login-etc li{
			text-decoration: underline;
			float: left;
			padding-top: 15px;
			padding-right: 10px;
		}
  </style>
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
		<main class="main">
			<div class="login-container">
				<div class="textbox">로그인</div>
				<form method="post" id="" action="">
					<div class="login-box">
						<label for="login-id"></label>
						<input type="email" id="loginid" name="loginid" placeholder="이메일 주소 예) sungkyul@naver.com">
					</div>
					<div class="password-box">
						<label for="login-pw"></label>
						<input type="password" id="loginpw" name="loginpw" placeholder="비밀번호">
					</div>
					<div class="login-botton">
						<button type="submit" class="login-button">로그인</button>
					</div>
					<div class="login-etc">
						<ul>
							<li><a href="join.html">회원가입</a></li>
						</ul>
					</div>
				</form>
			</div>
		</main>
		<!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<div class="footer">
			<!-- <address>(14097)경기도 안양시 만안구 성결대학로 53 TEL (031)467-8114
			</address> -->
			<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
		</div>
		<!-- 푸터 끝-->
	</div>
<script src="script1.js"></script>
</body>
</html>
