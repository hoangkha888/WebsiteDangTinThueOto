<template>
  <nav>
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Feedback</a></li>
    </ul>
  </nav>
  <!-- slice show -->
  <div class="slide">
    <Splide :options="options" aria-label="My Favorite Images">
      <SplideSlide>
        <img
          src="https://png.pngtree.com/thumb_back/fh260/background/20210205/pngtree-car-banner-background-image_547203.jpg"
          alt="Sample 1">
      </SplideSlide>
      <SplideSlide>
        <img
          src="https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-atmospheric-car-trade-fair-poster-background-image_138223.jpg"
          alt="Sample 2">
      </SplideSlide>
    </Splide>
  </div>

  <!-- khu vực -->
  <div class="title" style="padding-top:20px ;margin-left: 18px;">
    <h2 style="color: #F83F3F;">Khu vực</h2>
  </div>
  <div class="khuvuc">
    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Hải Châu</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Sơn Trà</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Thanh Khê</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Cẩm Lệ</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Liên Chiểu</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Ngũ Hành sơn</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <a href="#">
        <img src="../../../assets/img/Toyota-vios-2019.jpg" alt="Google logo">
      </a>
      <div class="card-body">
        <a href="#" class="btn btn-primary">Hòa Vang</a>
      </div>
    </div>


  </div>

  <!-- tin xe nổi bật -->
  <div class="title" style="padding-top:20px ;margin-left: 18px;">
    <h2 style="color: #F83F3F;">XE CHO THUÊ NỔI BẬT</h2>
  </div>

  <div class="content">
    <div class="left">
      <div class="xe1">
        <div class="avt">
          <div class="rank">
            <h5 style="color: white;font-size: larger;">02</h5>
          </div>
          <img src="../../../assets/img/xe-dich-vu-4-cho-da-nang.jpg" alt="">
        </div>
        <div class="inforxe">
          <h3>Cho thuê xe honda giá rẻ</h3>
          <p>Thủ tục thuê xe nhanh gọn </p>
          <h3>2.999.999đ</h3>
          <button>Thuê xe ngay</button>
        </div>
      </div>

      <div class="xe1" style="padding-top: 10px;">
        <div class="avt">
          <div class="rank">
            <h5 style="color: white;font-size: larger;">03</h5>
          </div>
          <img src="../../../assets/img/xe-dich-vu-4-cho-da-nang.jpg" alt="">
        </div>
        <div class="inforxe">
          <h3>Cho thuê xe honda giá rẻ</h3>
          <p>Thủ tục thuê xe nhanh gọn </p>
          <h3>2.999.999đ</h3>
          <button>Thuê xe ngay</button>
        </div>
      </div>

      <div class="xe1" style="padding-top: 10px;">
        <div class="avt">
          <div class="rank">
            <h5 style="color: white;font-size: larger;">04</h5>
          </div>
          <img src="../../../assets/img/xe-dich-vu-4-cho-da-nang.jpg" alt="">
        </div>
        <div class="inforxe">
          <h3>Cho thuê xe honda giá rẻ</h3>
          <p>Thủ tục thuê xe nhanh gọn </p>
          <h3>2.999.999đ</h3>
          <button>Thuê xe ngay</button>
        </div>
      </div>

    </div>
    <div class="right">
      <div class="xe2">
        <div class="inforxe2" style="padding-left:10px ;">
          <h3>Cho thuê xe Audi A6 Đời mới nhất</h3>
          <h3 style="color: #F83F3F;">2.999.999đ</h3>
        </div>

        <div class="avt2">
          <div class="rank2">
            <h5 style="font-size: xx-large;color: white;">01</h5>
          </div>
          <img src="../../../assets/img/xe-dich-vu-4-cho-da-nang.jpg" alt="">
        </div>

        <button>Thuê xe ngay</button>

      </div>
    </div>
  </div>
</template>

<style>
nav {
  background: #F83F3F;
  height: 57px;
  width: 100%;
}

nav ul {
  margin-right: 20px;

}

nav ul li {
  display: inline-block;
  line-height: 57px;
  margin: 0 5px;
}

nav ul li a {
  color: white;
  font-size: 17px;
  padding: 7px 13px;
  border-radius: 3px;
  text-transform: uppercase;
}

a.active,
a:hover {
  background: #1b9bff;
  transition: .5s;
}

.checkbtn {
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}

@media (max-width: 952px) {
  label.logo {
    font-size: 30px;
    padding-left: 50px;
  }

  nav ul li a {
    font-size: 16px;
  }
}

@media (max-width: 858px) {
  .checkbtn {
    display: block;
  }

  ul {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #2c3e50;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }

  nav ul li {
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }

  nav ul li a {
    font-size: 20px;
  }

  a:hover,
  a.active {
    background: none;
    color: #0082e6;
  }

  #check:checked~ul {
    left: 0;
  }

}

/* splide show */
.slide {
  width: 100%;
  height: auto;
  padding: 0;
}

.splide__slide img {
  height: 300px;
  width: 100%;
  object-fit: cover;
  display: block;
}

/* khu vụcư */

.khuvuc {
  width: 100%;
  height: auto;
  display: flex;
}

.khuvuc .card {
  padding: 0.5em;
}

.khuvuc .card img {

  height: 225px;
  width: 165px;
  object-fit: cover;
  border-radius: 15px;
}

.card-body {
  margin-top: 20px;
  text-align: center;
}

.card-body a {
  color: #F83F3F;
}


/* tin nổi bật */

.content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  height: auto;
}

.content .left {
  display: flex;
  justify-content: space-between;
  flex-direction: column;
}

.content .left .xe1 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  height: auto;
  /* border: 1px solid silver; */
}

.content .left .xe1 .avt .rank {
  height: 35px;
  width: 40px;
  background-color: #F83F3F;
  position: absolute;
  text-align: center;
}


.content .left .xe1 .avt img {
  height: 190px;
  width: 350px;
}


.content .left .xe1 .inforxe {
  padding-left: 50px;
}

.content .left .xe1 .inforxe button {
  background-color: #F83F3F;
  color: aliceblue;
}

.content .right {
  width: 670px;
  height: 390px;
}

.content .right .xe2 button{
  position: absolute;
  left: 70%;
  background-color: #F83F3F;
  color: aliceblue;
  margin-top: 10px;
}


.content .right .xe2 .avt2 .rank2{
  height: 55px;
  width: 60px;
  background-color: #F83F3F;
  position: absolute;
  text-align: center;
}



</style>



<script>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { defineComponent } from 'vue';

export default defineComponent({
  components: {
    Splide,
    SplideSlide,
  },

  setup() {
    const options = {
      rewind: true,
      gap: '1rem',
    };

    return { options };
  },
});
</script>