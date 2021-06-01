<!-- 회원가입 페이지 -->
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
  <style>
    .textbox{
    	width: 460px;
    	text-align: left;
			padding-top: 40px;
			padding-bottom: 20px;
			font-size: 20px;
    }
    .join-container{
      padding-top: 40px;
      padding-bottom: 90px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
		.nickname-box{
			width: 460px;
			height: 48px;
			border: solid 1px #707070;
			border-radius: 10px;
			background: white;
		}
		.nickname-box input{
			border: none;
			width: 440px;
			margin-top: 8px;
			font-size: 12px;
			margin-left: 12px;
			height:30px;
			outline: none;
		}
    .join-box{
      width: 460px;
      height: 48px;
      border: solid 1px #707070;
      border-radius: 10px;
      background: white;
			margin-top: 15px;
    }
    .join-box input{
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
		.email-box{
			width: 460px;
			height: 48px;
			border: solid 1px #707070;
			border-radius: 10px;
			background: white;
			margin-top: 15px;
		}
		.email-box input{
			border: none;
			width:440px;
			margin-top: 8px;
			font-size: 12px;
			margin-left: 12px;
			height:30px;
			outline: none;
		}
		.join-agree{
			width: 460px;
			margin-top: 10px;
		}
    .join-button {
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
		.join-etc {
			width: 460px;
		}
		.join-etc ul{
			list-style: none;

		}
		.join-etc li{
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
		<div class="main">
			<div class="join-container">
				<div class="textbox">회원가입</div>
				<form method="post" id="" action="">
					<div class="nickname-box">
						<label for="join-nickname"></label>
						<input type="text" id="joinnickname" name="joinnickname" placeholder="닉네임">
					</div>
					<div class="join-box">
						<label for="join-id"></label>
						<input type="text" id="joinid" name="joinid" placeholder="아이디">
					</div>
					<div class="password-box">
						<label for="join-pw"></label>
						<input type="password" id="joinpw" name="joinpw" placeholder="비밀번호">
					</div>
					<div class="email-box">
						<label for="join-email"></label>
						<input type="email" id="join-email" name="join-email" placeholder="이메일 주소 예) sungkyul@naver.com">
					</div>
					<div class="join-agree">
					<label for="joinagree">
						<input type="checkbox" id="joinagree" class="inp_radio"  name="joinagree"> 개인정보 사용 동의
					</label>
					</div>
					<div class="join-botton">
						<button type="submit" class="join-button">회원가입</button>
					</div>
					<div class="join-etc">
						<ul>
							<li><a href="login.html">이미 회원가입을 했다면? 로그인</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
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
