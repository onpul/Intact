<!-- 전시회 진행 페이지 2 상세 정보 페이지 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/default.css?ver=1">
  <!-- <link rel="stylesheet" href="css/layout.css"> -->
  <style>
    html {
      height: 100%;
      margin: 0;
      overflow: hidden;
    }
    body {
      height: 100vh;
      background-image: url("./images/space-right.jpg");
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    /* 메인 컨테이너는 area로 나눔 */
    .container {
			width: 100%;
    	height: 100%;
    	display: grid;
			grid-template-columns: repeat(18, 1fr);
    }

    /* 왼쪽 사이드바 구역 */
    .area:nth-child(1) {
      grid-column: 1 / 4;
    }
    .sidebar-left {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(10, 1fr);
    }
    .area1:nth-child(1) {
      grid-column: 1 / 1;
      grid-row: 1 / 1;
    }
    .area1:nth-child(2) {
      grid-column: 1 / 1;
      grid-row: 5 / 10;
    }
    .area1:nth-child(3) {
      grid-column: 1 / 3;
      grid-row: 5 / 10;
      justify-self: end;
    }
    #logo {
      margin-top: 13px;
      margin-left: 20px;
      width: 17px;
      box-shadow: 0px 3px 6px lightgray;
    }
    #prev{
      /* margin-left: 25px; */
    }
    .prev {
      opacity: 0;
    }
    .prev:hover {
      opacity: 1;
    }

    /* 메인 구역 */
    .area:nth-child(2) {
			grid-column: 4 / 16;
		}
    .main {
			text-align: center;
			position: relative;
      display: grid;
    	grid-template-columns: repeat(4, 1fr);
      align-items: center;
      justify-content: center;
      /* margin-bottom: 50px; */
		}
    /* 작품 그림  */
    .area2:nth-child(1) {
      grid-column: 1 / 4;
      /* grid-row: 1 / 3; */
      align-self: center;
      justify-self: start;
      position: relative;
      width: 100%;
      height: 100%;
    }
    .art{
      width: 100%;
      height: 100%;
      position: relative;
      overflow: hidden;
    }
    .art-img{
      position: relative;
      width: 500px;
      height: 300px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    #art-img{
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: scale-down;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      box-shadow: 0px 0px 15px gray;
    }
    /* 작품 정보 */
    .area2:nth-child(2) {
      grid-column: 4 / 5;
      align-self: center;
      justify-self: start;
    }
    .info {
      position: relative;
      overflow: hidden;
    }
    .art-info {
      position: relative;
      width: 200px;
      height: 300px;
      box-shadow: 0px 0px 10px gray;
    }
    #art-info{
      position: absolute;
      width: 90%;
      height: 50%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -10%);
      background: #ffffff;
      box-shadow: 0px 0px 10px gray;
    }
    .info ul li{
      margin-bottom: 5px;
    }
    .info #content{
      height: 50px;
    }
    /* 오른쪽 사이드바 구역 */
    .area:nth-child(3) {
      grid-column: 16 / 19;
    }
    .sidebar-right {
      display: grid;
			grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(10, 1fr);
    }
    /* 작가 프로필 */
    .area3:nth-child(1) {
      grid-column: 1 / 3;
      grid-row: 1 / 4;
      place-self: center center;
    }
    /* 저장 아이콘 */
    .area3:nth-child(2) {
			grid-column: 2 / 2;
      grid-row: 3 / 5;
      justify-self: end;
      margin-top: 10px;
      margin-right: 10px;
		}
    .area3:nth-child(3) {
      grid-column: 1 / 3;
      grid-row: 5 / 10;
      justify-self: start;
    }
    #next{
      margin-left: 0;
    }
    .next {
      opacity: 0;
    }
    .next:hover {
      opacity: 1;
    }
    .author {
      padding: 3px;
      margin: 20px;
      width: 150px;
      height: 50px;
      background-color: white;
      border-radius: 26px;
      box-shadow: 0px 3px 6px lightgray;
      position: relative;
    }
    .author > a > ul {
      display: block;
      position: absolute;
      left: 40%;
      top: 50%;
      transform: translate(-50%, -50%);
    }
    .author > a > .profile{
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 80%;
      width: 35px;
      height: 35px;
      border-radius: 70%;
      overflow: hidden;
    }
    .profile-img{
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    #heart {
      margin-top: 10px;
      margin-right: 20px;
      margin-bottom: 20px;
      background: url("./images/like_1@2x.png") no-repeat;
      border: none;
      cursor: pointer;
      width: 24px;
      height: 24px;
    }
    #scrap {
      margin-right: 20px;
      background: url("./images/scrap_1@2x.png") no-repeat;
      border: none;
      cursor: pointer;
      width: 24px;
      height: 24px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- 왼쪽 사이드바 -->
    <div class="sidebar-left area">
      <!-- 왼쪽 사이드바 안에 그리드는 area1로 나눔 -->
      <div class="area1">
        <a href="./index.html">
        <img id="logo" src="./images/small_logo.png" alt="Intact">
        </a>
      </div>
      <!-- <div class="area1 move2" OnClick="location.href='exhibit-view-1st.html'" style="cursor:pointer;">
      </div>
      <div class="area1 prev" OnClick="location.href='exhibit-view-1st.html'" style="cursor:pointer;">
        <img id="prev" src="./images/previous@2x.png" alt="">
      </div> -->
    </div>
    <!-- 메인 -->
    <div class="main area">
      <!-- 메인 안에 그리드는 area2로 나눔 -->
      <div class="art area2">
        <!-- 작품 이미지 -->
        <div class="art-img">
          <img id="art-img" src="./images/sample6.jpg" alt="작품 이미지">
        </div>
      </div>
      <!-- 작품 정보 -->
      <div class="info area2" OnClick="location.href='exhibit-view-1st-info.html'" style="cursor:pointer;">
        <div class="art-info">
          <div id="art-info">
            <ul>
              <li id="name">작품 제목</li>
              <li id="content"><div>작품 설명</div></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- 오른쪽 사이드바 -->
    <div class="sidebar-right area">
      <!-- 메인 안에 그리드는 area3로 나눔 -->
      <div class="author area3">
        <a href="#">
          <ul>
            <li>작가명</li>
            <li>작가 소개글</li>
          </ul>
          <ul class="profile">
            <li><img class="profile-img" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" alt="프로필 사진"></li>
          </ul>
        </a>
      </div>
      <div class="save area3">
        <form class="" action="" method="post">
          <li><input id="heart" type='button' name="heart"></li>
          <li><input id="scrap" type='button' name="scrap"></li>
        </form>
      </div>
      <div class="next area3" OnClick="location.href='exhibit-view-2nd.html'" style="cursor:pointer;">
        <img id="next" src="./images/next@2x.png" alt="">
      </div>
    </div>
  </div>
</body>
</html>
