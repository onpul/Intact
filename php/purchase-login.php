<!-- 로그인 후 구매 페이지 -->
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
    /* 마이페이지 상단 메뉴 스타일 속성 */
    .menu {
    	display: flex;
      background: #ffffff;
      height: 50px;
      align-items: center;
			box-shadow: 0px 1px 10px gray;
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

    /* 구매 페이지 스타일 속성 */
    .container {
      padding: 50px;
      display: grid;
      grid-template-columns: 30px 170px auto 30px 100px;
      grid-template-rows: auto;
      row-gap: 20px;
      align-items: center;
      justify-items: start;
    }
    .item:nth-child(1) {
      height: 40px;
    	grid-column: 1 / 6;
    }
    .item:nth-child(2) {
      height: 40px;
      grid-column: 1 / 6;
    }
    .item:nth-child(18) {
      height: 40px;
      grid-column: 1 / 6;
    }
    .item:nth-child(19) {
      width: 100%;
      grid-column: 1 / 4;
      grid-row: 7 / 8;
      text-align: center;
      justify-self: center;
      justify-content: space-around;
    }
		.item:nth-child(22) {
      height: 40px;
      grid-column: 1 / 6;
			text-align: center;
      justify-self: center;
			height: 40px;
    }
    .product{
      width: 100%;
      width: 150px;
      height: 150px;
      overflow: hidden;
    }
    .product-img{
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .product-info{
      margin-left: 40px;
      width: 200px;
      text-align: left;
    }
    .total-cost{
      display: flex;
    }
    .updown { border: 0.1px solid #eee; width: 0px; height: 100px; }
		#purchase-btn {
			width: 200px;
			height: 60px;
			border-radius: 10px;
			border: 1px solid #FFD62C;
			background-color: #FFD62C;
			color: black;
			padding: 5px;
			cursor: pointer;
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
  				<a href="mypage-exhibit.html" class="menu-link">내 프로필</a>
  			</li>
  			<li class="menu-item">
  				<a href="scraping.html" class="menu-link">스크랩</a>
  			</li>
  		</ul>
      <!-- 메인 컨테이너 -->
      <div class="container">
        <div class="item">
          <ul class="count">
            <li>장바구니 총 3개</li>
          </ul>
        </div>
        <div class="item">
          <input type="checkbox" id="all_chk"><label for="all_chk">전체 상품 선택</label>
        </div>
        <div class="item">
          <div class="check">
            <input type="checkbox" id="product_chk"><label for="product_chk"></label>
          </div>
        </div>
      	<div class="item">
          <p>작가 이름</p>
          <div class="product">
            <img class="product-img" src="https://i.pinimg.com/originals/cf/34/f0/cf34f0af5496bf6eadda07c8042b9279.png" alt="상품 사진">
          </div>
        </div>
      	<div class="item">
          <div class="product-info">
            <ul>
              <li>작품명</li>
              <li>작가명</li>
              <li>작품형식</li>
            </ul>
          </div>
        </div>
      	<div class="item">
            <div class="updown"></div>
        </div>
      	<div class="item">
          <div class="cost">
            <ul>
              <li>가격</li>
              <li>작품 가격</li>
              <li>배송비</li>
            </ul>
          </div>
        </div>
        <div class="item">
          <div class="check">
            <input type="checkbox" id="product_chk"><label for="product_chk"></label>
          </div>
        </div>
        <div class="item">
          <p>작가 이름</p>
          <div class="product">
            <img class="product-img" src="https://i.pinimg.com/originals/cf/34/f0/cf34f0af5496bf6eadda07c8042b9279.png" alt="상품 사진">
          </div>
        </div>
        <div class="item">
          <div class="product-info">
            <ul>
              <li>작품명</li>
              <li>작가명</li>
              <li>작품형식</li>
            </ul>
          </div>
        </div>
        <div class="item">
            <div class="updown"></div>
        </div>
        <div class="item">
          <div class="cost">
            <ul>
              <li>가격</li>
              <li>작품 가격</li>
              <li>배송비</li>
            </ul>
          </div>
        </div>
        <div class="item">
          <div class="check">
            <input type="checkbox" id="product_chk"><label for="product_chk"></label>
          </div>
        </div>
        <div class="item">
          <p>작가 이름</p>
          <div class="product">
            <img class="product-img" src="https://i.pinimg.com/originals/cf/34/f0/cf34f0af5496bf6eadda07c8042b9279.png" alt="상품 사진">
          </div>
        </div>
        <div class="item">
          <div class="product-info">
            <ul>
              <li>작품명</li>
              <li>작가명</li>
              <li>작품형식</li>
            </ul>
          </div>
        </div>
        <div class="item">
            <div class="updown"></div>
        </div>
        <div class="item">
          <div class="cost">
            <ul>
              <li>가격</li>
              <li>작품 가격</li>
              <li>배송비</li>
            </ul>
          </div>
        </div>
      	<div class="item">
          <input type="checkbox" id="all_chk"><label for="all_chk">전체 상품 선택</label>
        </div>
        <div class="item total-cost">
          <div class="total">
            <ul>
              <li>총 상품 금액</li>
              <li>30,000원</li>
            </ul>
          </div>
          <div class="add">
            <p>+</p>
          </div>
          <div class="shipping-fee">
            <ul>
              <li>배송비</li>
              <li>0원</li>
            </ul>
          </div>
          <div class="sub">
            <p>-</p>
          </div>
          <div class="discount">
            <ul>
              <li>예상 할인 금액</li>
              <li><span style="color:#FF2600">2,000</span></li>
            </ul>
          </div>
        </div>
      	<div class="item">
            <div class="updown"></div>
        </div>
      	<div class="item">
          <div class="order-total">
            <ul>
              <li>총 주문 금액</li>
              <li><span style="color:#FF2600">28,000</span></li>
            </ul>
          </div>
        </div>
				<div class="item">
					<div class="purchase">
						<button id="purchase-btn" onclick="javascript:btn()"> 구매하기 </button>
						<!-- <p>구매하기</p> -->
				</div>
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
	<script> function btn(){ alert('구매가 완료되었습니다.'); } </script>
</body>
</html>
