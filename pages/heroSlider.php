<!-- <link rel="stylesheet" href="./styles/heroSlider.css">

<div class="container">
	<div class="slideshow">
		<div id="slide-1" class="slide">
			<a href="#slide-7"></a>
			<a href="#slide-2"></a>
			<img src="https://c1.staticflickr.com/9/8724/16310801553_cea90ae63d_n.jpg" />
		</div>
		<div id="slide-2" class="slide">
			<a href="#slide-1"></a>
			<a href="#slide-3"></a>
			<img src="https://c2.staticflickr.com/4/3719/19819674272_2384feaaf8_n.jpg" />
		</div>
		<div id="slide-3" class="slide">
			<a href="#slide-2"></a>
			<a href="#slide-4"></a>
			<img src="https://c2.staticflickr.com/2/1627/24319275501_3ec6f36fa7_n.jpg" />
		</div>
		<div id="slide-4" class="slide">
			<a href="#slide-3"></a>
			<a href="#slide-5"></a>
			<img src="https://c2.staticflickr.com/2/1460/25194537936_e3c54faefc_n.jpg" />
		</div>
		<div id="slide-5" class="slide">
			<a href="#slide-4"></a>
			<a href="#slide-6"></a>
			<img src="https://c2.staticflickr.com/2/1460/26216238325_9c425923a7_n.jpg" />
		</div>
		<div id="slide-6" class="slide">
			<a href="#slide-5"></a>
			<a href="#slide-7"></a>
			<img src="https://c2.staticflickr.com/8/7578/26194232483_8204bf119b_n.jpg" />
		</div>
		<div id="slide-7" class="slide">
			<a href="#slide-6"></a>
			<a href="#slide-1"></a>
			<img src="https://c2.staticflickr.com/8/7106/26862741906_d5283c42ba_n.jpg" />
		</div>
	</div>
  <div class="pagination">
    <a href="#slide-1"><span>1</span></a>
    <a href="#slide-2"><span>2</span></a>
    <a href="#slide-3"><span>3</span></a>
    <a href="#slide-4"><span>4</span></a>
    <a href="#slide-5"><span>5</span></a>
    <a href="#slide-6"><span>6</span></a>
    <a href="#slide-7"><span>7</span></a>
  </div>
</div>
 -->

 <style>
 	
.card {
  position: absolute;
  height: 350px;
  width: 100%;
  max-width: 850px;
  margin: auto;
  background-color: #ffffff;
  border-radius: 25px;
  box-shadow: 10px 0 50px rgba(0, 0, 0, 0.5);
}

.card .inner_part {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 0 0 30px;
  height: 350px;
  position: absolute;
}

#slideImg:checked ~ .inner_part {
  padding: 0;
  transition: .1s ease-in;
}

.inner_part .img {
  height: 260px;
  width: 260px;
  overflow: hidden;
  flex-shrink: 0;
  border-radius: 20px;
  box-shadow: 0 10px 50px rgba(0,0,0,0.2);
}

#slideImg:checked ~ .inner_part .img {
 height: 350px;
 width: 850px;
 z-index: 99;
 transition: .3s .2s ease-in;
}

.img img {
  height: 100%;
  width: 100%;
  cursor: pointer;
  opacity: 0;
  transition: .6s;
}

#slide_1:checked ~ .inner_part .img_1,
#slide_2:checked ~ .inner_part .img_2,
#slide_3:checked ~ .inner_part .img_3 {
  opacity: 1;
  transition-delay: .2s;
}

.content {
  padding: 0 20px 0 35px;
  width: 530px;
  margin-left: 50px;
  opacity: 0;
  transition: .6s; 
}

#slideImg:checked ~ .inner_part .content {
  display: none;
}

#slide_1:checked ~ .inner_part .content_1,
#slide_2:checked ~ .inner_part .content_2,
#slide_3:checked ~ .inner_part .content_3 {
  opacity: 1;
  margin-left: 0;
  z-index: 100;
  transition-delay: .3s;
}

.content .title {
  font-size: 30px;
  font-weight: 700;
  color: #0d0925;
  margin: 0 0 20px 0;
}

.content .text {
  font-size: 19px;
  color: #4e4a67;
  margin: 0 auto 30px auto;
  line-height: 1.5em;
  text-align: justify;
}

.content button {
  padding: 15px 20px;
  border: none;
  font-size: 16px;
  color: #fff0e6;
  font-weight: 600;
  letter-spacing: 1px;
  border-radius: 50px;
  cursor: pointer;
  outline: none;
  background: #000000;
  float: right;
}

.content button:hover {
  background: #cecece;
  color: #000000;
}

.slider {
  position: absolute;
  bottom: 25px;
  left: 55%;
  transform: translateX(-50%);
  z-index: 1;
}

#slideImg:checked ~ .slider {
  display: none;
}

.slider .slide {
  position: relative;
  height: 10px;
  width: 50px;
  background: #d9d9d9;
  border-radius: 5px;
  display: inline-flex;
  margin: 0 3px;
  cursor: pointer;
}


.slider .slide:before {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  height: 100%;
  width: -100%;
  background: #000000;;
  border-radius: 10px;
  transform: scaleX(0);
  transition: transform .6s;
  transform-origin: left;
}

#slide_1:checked ~ .slider .slide_1:before,
#slide_2:checked ~ .slider .slide_2:before,
#slide_3:checked ~ .slider .slide_3:before {
  transform: scaleX(1);
  width: 100%;
}

input {
  display: none;
}
 </style>
<div class="card">
  <input type="radio" name="select" id="slide_1" checked>
  <input type="radio" name="select" id="slide_2">
  <input type="radio" name="select" id="slide_3">
  <input type="checkbox" id="slideImg">

  <div class="slider">
    <label for="slide_1" class="slide slide_1"></label>
    <label for="slide_2" class="slide slide_2"></label>
    <label for="slide_3" class="slide slide_3"></label>
  </div>

  <div class="inner_part">
    <label for="slideImg" class="img">
      <img class="img_1" src="https://c4.wallpaperflare.com/wallpaper/978/131/617/kiz-kulesi-turkey-istanbul-maiden-s-tower-wallpaper-preview.jpg">
    </label>
  </div>
  <div class="inner_part">
    <label for="slideImg" class="img">
      <img class="img_2" src="https://c4.wallpaperflare.com/wallpaper/649/96/56/ankara-cityscape-night-night-sky-wallpaper-preview.jpg">
    </label>
  </div>

  <div class="inner_part">
    <label for="slideImg" class="img">
      <img class="img_3" src="https://c4.wallpaperflare.com/wallpaper/620/34/558/turkey-izmir-mountains-wallpaper-preview.jpg">
    </label>

  </div>