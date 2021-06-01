<!-- 업로드 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Intact</title>
	<link rel="stylesheet" href="css/index.css?ver=1">
	<link rel="stylesheet" href="css/default.css?ver=1">
	<link rel="stylesheet" href="css/layout.css?ver=1">
	<style>
		.container{
			padding: 30px;
			display: grid;
			/* width: 100%; */
			grid-template-columns: 1fr 800px 1fr;
			grid-template-rows: auto;
			row-gap: 30px;
			margin-bottom: 70px;
		}
		/* 메뉴 탑 */
		.area:nth-child(1) {
			grid-column: 2 / 3;
			grid-row: 1 / 2;
			justify-content: center;
			align-items: center;
			display: flex;
			padding-top: 50px;
			padding-left: 20px;
			padding-right: 20px;
			margin-bottom: 40px;
		}
		/* 왼쪽 사이드 메뉴 */
    .area:nth-child(2) {
    	grid-column: 1 / 2;
    	grid-row: 1 / 4;
      justify-self: start;
			position: fixed;
    }
		/* 메인 */
    .area:nth-child(3) {
    	grid-column: 2 / 3;
      justify-self: center;
      text-align: center;
    }
		/* 상단 메인 이미지 업로드 박스 */
		.main-img-box form {
			border: 1px solid #000000;
			border-radius: 10px;
			margin: 5px;
			display: flex;
			justify-content: center;
			height: 50px;
		}
		.main-img-box{
			text-align: center;
			margin-right: auto;
			padding-right: 15px;
			border-radius: 10px;
			float: left;
			width: 250px;
			overflow: hidden;
			border: none;
		}
		.main-img-div{
			position: relative;
			height: auto;
			width: 150px;
		}
		.input-button{
			width: 87px;
			height: 50px;
			position: absolute;
			top: 0px;
			left: 0px;
			color: #ffffff;
			border: none;
			background-color: #000000;
      border-radius: 10px;
      cursor: pointer;
		}
		.input-hidden{
			width: 87px;
			height: 50px;
			position: absolute;
			top: 0px;
			left: 0px;
			opacity: 0;
			cursor: pointer;
		}
		.category-box {
			text-align: center;
			background: #F5F5F5;
			width: 245px;
			height: 50px;
			border-radius: 10px;

		}
		.category-box form {
			line-height: 50px;
		}
		.upload-summit input{
			height: 50px;
			width: 100px;
			cursor: pointer;
			background-color: #000000;
			border: 0;
			border-radius: 10px;
			color: #ffffff;
			margin-left: 10px;
		}
		.menu-side {
      text-align: center;
			z-index: 50;
			color: #ffffff;
    }
    .menu-side ul > li {
      margin-bottom: 10px;
      background: #ffffff;
      width: 30px;
      height: 100px;
      line-height: 100px;
      border-radius: 10px;
			box-shadow: 0px 0px 6px gray;
    }
		.menu-side a {
			color: #ffffff;
		}
		.menu-side ul > li:nth-child(1) {
			background: #FF7F00;
			color: #ffffff;
		}
		.upload-container {
      height: 400px;
      width: 700px;
      background: #FFFFFF;
      border-radius: 20px;
			box-shadow: 0px 0px 15px gray;
			margin-bottom: 40px;
			padding: 30px;
    }
		.box {
			height: 400px;
      width: 700px;
			border-radius: 20px;
			/* border: 1.5px dashed #707070; */
		}
    input:focus {outline:none;}
    textarea:focus {outline:none;}
		.img-area {
			width: 100%;
			height: 40px;
			margin-bottom: 20px;
		}
    .img-area form{
    	display: flex;
			justify-content: center;
			padding-top: 20px;
			width: 100%;
			height: 40px;
		}
		.file-input-textbox{
			text-align: right;
			margin-right: 20px;
			padding-right: 5px;
			float: left;
			width: 250px;
			overflow: hidden;
			border: none;
		}
		.file-input-div{
			position: relative;
			width: 150px;
			height: auto;
		}
		.file-input-button{
			width: 150px;
			height: 40px;
			position: absolute;
			top: 0px;
			left: 0px;
			color: #ffffff;
			border: none;
			background-color: #FF7A24;
			box-shadow: 0px 1px 10px gray;
      border-radius: 10px;
      cursor: pointer;
		}
		.file-input-hidden{
			width: 150px;
			height: 40px;
			position: absolute;
			top: 0px;
			left: 0px;
			opacity: 0;
			cursor: pointer;
		}
		.content-form form {
			padding-top: 20px;
		}
		.content-form form #name {
			width: 500px;
			border: none;
			border-radius: 10px 10px 0px 0px;
			/* background: #F5F5F5; */
			border-bottom: 1px solid #E0E0E0;
			padding: 5px;
		}
		.content-form form #content {
			width: 500px;
			border: none;
			border-radius: 0px 0px 10px 10px;
			/* background: #F5F5F5; */
			margin-top: 20px;
			padding: 5px;
			height: 250px;
		}
		.add-item {
			height: 40px;
			width: 100px;
			cursor:pointer;
			background-color: #ffffff;
			border:0;
			border-radius: 10px;
			color: #20AC20;
			box-shadow: 0px 1px 10px gray;
			margin-bottom: 10px;
		}
		.button-group {
			display: flex;
			justify-content: center;
		}
	</style>
</head>
<body>
  <!-- 메인 컨테이너 시작(바디) -->
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
			<div class="container">
				<div class="top-form area">
					<!-- 전시회 메인 사진 -->
					<div class="main-img-box">
						<form>
							<input type="text" id="fileName1" class="main-img-box" readonly="readonly" placeholder="전시회 메인 사진" />
							<div class="main-img-div" id="main-img-container">
								<input type="button" value="첨부" class="input-button" />
								<input type="file" id="main-image" accept="image/*" class="input-hidden" onchange="javascript:document.getElementById('fileName1').value = this.value.split('\\')[this.value.split('\\').length-1]"/>
							</div>
						</form>
					</div>
					<div class="category-box">
						<form name="category" method="get" action="">
							<div class="select">
								<input type="radio" id="select" name="category" value="category1" checked><label for="select" class="box-radio-input">디지털</label>
								<input type="radio" id="select2" name="category" value="category2"><label for="select2" class="box-radio-input">회화</label>
							</div>
						</form>
					</div>
					<div class="upload-summit"><p><input type="submit" value="업로드 하기" id="upload-btn" onclick="javascript:btn()"></p></div>
				</div>
				<!-- 사이드 메뉴 -->
        <div class="menu-side area">
          <ul>
            <li><a href="#main">top</a></li>
          </ul>
        </div>
				<div class="area">
					<div class="upload-container">
						<!-- 박스 시작 -->
						<div class="box">
							<div class="img-area">
								<!-- 전시회 사진(이미지) -->
								<!-- <form name="image" action="" method="post">
									<div id="image-container">
										<input type="file" id="image" accept="image/*" style="display:none">
										<label class="input-file-button" for="image">파일 선택</label>
									</div>
								</form> -->
								<form name="image" action="" method="post">
									<input type="text" id="fileName" class="file-input-textbox" readonly="readonly" placeholder="첨부된 파일이 없습니다.">
									<div class="file-input-div" id="image-container">
										<input type="button" value="파일 첨부" class="file-input-button">
										<input type="file" id="image" accept="image/*" class="file-input-hidden" onchange="javascript:document.getElementById('fileName').value = this.value.split('\\')[this.value.split('\\').length-1]">
									</div>
								</form>
							</div>

							<!-- 텍스트 아레아 시작 -->
							<div class="text-area">
								<div class="content-form">
									<!-- 전시회 내용(텍스트) -->
									<form name="content" enctype="multipart/form-data" action="" method="post">
										<ul>
											<li>
												<!-- 전시회 제목 -->
												<input id="name" type="text" name="name" placeholder="전시회 제목"></a>
											</li>
										</ul>
										<ul>
											<!-- 전시회 소개 및 목차 -->
											<li><textarea id="content" cols="70" rows="14" name="content" placeholder="전시회 소개 및 목차" style="resize:none;"></textarea></li>
										</ul>
									</form>
								</div>
							</div>
							<!-- 텍스트 아레아 끝 -->
						</div>
						<!-- 박스 끝 -->
					</div>
					<!-- 프리셋 시작 -->
					<div id="pre_set">
						<div class="upload-container">
							<!-- 박스 시작 -->
							<div class="box">
								<div class="img-area">
									<!-- 전시회 사진(이미지) -->
									<!-- <form name="image" action="" method="post">
										<div id="image-container">
											<input type="file" id="image" accept="image/*" style="display:none">
											<label class="input-file-button" for="image">파일 선택</label>
										</div>
									</form> -->
									<form name="image" action="" method="post">
										<input type="text" id="fileName" class="file-input-textbox" readonly="readonly" placeholder="첨부된 파일이 없습니다.">
										<div class="file-input-div" id="image-container">
										  <input type="button" value="파일 첨부" class="file-input-button">
										  <input type="file" id="image" accept="image/*" class="file-input-hidden" onchange="javascript:document.getElementById('fileName').value = this.value.split('\\')[this.value.split('\\').length-1]">
										</div>
									</form>
								</div>

								<!-- 텍스트 아레아 시작 -->
								<div class="text-area">
									<div class="content-form">
										<!-- 작품 내용(텍스트) -->
										<form name="content" enctype="multipart/form-data" action="" method="post">
											<ul>
												<li>
													<!-- 작품 제목 -->
													<input id="name" type="text" name="name" placeholder="작품 제목"></a>
												</li>
											</ul>
											<ul>
												<!-- 작품 소개 및 목차 -->
												<li><textarea id="content" cols="70" rows="14" name="content" placeholder="작품 소개" style="resize:none;"></textarea></li>
											</ul>
										</form>
									</div>
								</div>
								<!-- 텍스트 아레아 끝 -->
							</div>
							<!-- 박스 끝 -->
						</div>
					</div>
					<!-- 프리셋 끝 -->
					<div id="field"></div>
					<!-- <input type="button" value="삭제" onclick="remove_item(this)"> -->
					<ul class="button-group">
						<li>
							<input class="add-item" type="button" value="추가" onclick="add_item()">
						</li>
					</ul>
				</div>
				<!-- 업로드 컨테이너 끝 -->
		  </div>
			<!-- 컨테이너 끝 -->
	  </div>
	  <!-- 메인 끝 -->
		<!-- 푸터 시작 -->
		<!-- <div class="footer">
			<p>Copyright(c)2021 Intact㈜ Intact Co., Ltd. All Rights Reserved</p>
		</div> -->
		<!-- 푸터 끝-->
	</div>
	<!-- 메인 컨테이너 끝(바디 바깥 쪽) -->
		<script>
    	function add_item(){
      	// pre_set 에 있는 내용을 읽어와서 처리
        var div = document.createElement('div');
          div.innerHTML = document.getElementById('pre_set').innerHTML;
          document.getElementById('field').appendChild(div);
	     }
	     // function remove_item(obj){
	     //      // obj.parentNode 를 이용하여 삭제
	     //      document.getElementById('field').removeChild(obj.parentNode);
	     // }

			 function btn(){ alert('업로드 되었습니다.'); }
		</script>
</body>
</html>
