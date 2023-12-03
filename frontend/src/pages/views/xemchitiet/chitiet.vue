<template>
    <nav>
        <ul>
            <li><a href="#">TRANG CHỦ</a></li>
            <li><a href="#">GIỚI THIỆU</a></li>
            <li><a href="#">DỊCH VỤ</a></li>
            <li><a href="#">TIN TỨC</a></li>
            <li><a href="#">LIÊN HỆ</a></li>
        </ul>
    </nav>
    <!-- slice show -->
    <div class="slide">
        <Splide :options="options" aria-label="My Favorite Images">
            <SplideSlide>
                <img src="../../../assets/img/slider_1.jpeg" alt="Sample 1">
            </SplideSlide>
            <SplideSlide>
                <img src="../../../assets/img/slider_2.jpg" alt="Sample 2">
            </SplideSlide>
        </Splide>
    </div>

    <!-- chitietxe -->
    <div class="title" style="padding-top:20px ;margin-left: 18px;">
        <h2 style="color: #F83F3F;">Thông Tin Về Xe</h2>
    </div>
    <div class="detail">
        <div class="left">
            <div class="cover-car-item" style="cursor: pointer;">
                <img loading="lazy" alt="Cho thuê xe tự lái MAZDA 2 2023"
                    src="https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mazda_2_2023/p/g/2023/06/04/17/2je7c7T86i5hMImkAdg_fA.jpg">
            </div>
        </div>
        <div class="right">
            <div class="rent-box" id="cardetail" style="position: relative;">
                <div class="price">
                    <h4>746K/ngày</h4>
                </div>
                <div class="date-time-form ">
                    <div class="form-item"><label>Nhận xe </label>
                        <div class="wrap-date-time">
                            <div class="wrap-date"><span class="value">04/12/2023</span></div>
                            <div class="wrap-time"><span class="value">21:00</span></div>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-item"><label>Trả xe</label>
                        <div class="wrap-date-time">
                            <div class="wrap-date"><span class="value">05/12/2023</span></div>
                            <div class="wrap-time"><span class="value">20:00</span></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-form"><label>Địa điểm giao xe</label>
                    <div class="wrap-form "><span class="value">Quận 5, Hồ Chí Minh</span></div>
                    <p class="note">Rất tiếc. chủ xe không hỗ trợ giao xe tận nơi</p>
                </div>
                <div class="line-page"></div>
                <div class="price-container">
                    <div class="price-item">
                        <p class="df-align-center">Đơn giá thuê </p>
                        <p class="cost"><span>746 200đ/ ngày</span></p>
                    </div>
                    <div class="price-item">
                        <p class="df-align-center">Phí bảo hiểm</p>
                        <p class="cost"><span>66 950đ/ ngày</span></p>
                    </div>
                    <div class="line-page"></div>
                    <div class="price-item">
                        <p>Tổng cộng</p>
                        <p class="cost"><span>813 150đ </span>x&nbsp;1&nbsp;ngày</p>
                    </div>
                    <div class="promotion">
                        <div class="wrap-svg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M21.3 10.8394C21.69 10.8394 22 10.5294 22 10.1394V9.20938C22 5.10938 20.75 3.85938 16.65 3.85938H7.35C3.25 3.85937 2 5.10938 2 9.20938V9.67938C2 10.0694 2.31 10.3794 2.7 10.3794C3.6 10.3794 4.33 11.1094 4.33 12.0094C4.33 12.9094 3.6 13.6294 2.7 13.6294C2.31 13.6294 2 13.9394 2 14.3294V14.7994C2 18.8994 3.25 20.1494 7.35 20.1494H16.65C20.75 20.1494 22 18.8994 22 14.7994C22 14.4094 21.69 14.0994 21.3 14.0994C20.4 14.0994 19.67 13.3694 19.67 12.4694C19.67 11.5694 20.4 10.8394 21.3 10.8394ZM9 8.87938C9.55 8.87938 10 9.32938 10 9.87938C10 10.4294 9.56 10.8794 9 10.8794C8.45 10.8794 8 10.4294 8 9.87938C8 9.32938 8.44 8.87938 9 8.87938ZM15 15.8794C14.44 15.8794 13.99 15.4294 13.99 14.8794C13.99 14.3294 14.44 13.8794 14.99 13.8794C15.54 13.8794 15.99 14.3294 15.99 14.8794C15.99 15.4294 15.56 15.8794 15 15.8794ZM15.9 9.47937L9.17 16.2094C9.02 16.3594 8.83 16.4294 8.64 16.4294C8.45 16.4294 8.26 16.3594 8.11 16.2094C7.82 15.9194 7.82 15.4394 8.11 15.1494L14.84 8.41938C15.13 8.12938 15.61 8.12938 15.9 8.41938C16.19 8.70938 16.19 9.18937 15.9 9.47937Z"
                                    fill="#263D2A"></path>
                            </svg></div>
                        <p>Sử dụng mã khuyến mãi</p>
                    </div>
                    <div class="line-page"></div>
                    <div class="price-item total">
                        <p style="font-size: 1rem;font-weight: 800;">Thành tiền</p>
                        <p class="cost"><span>813 150đ</span></p>
                    </div>
                </div><a class="btn btn-primary btn--m width-100">
                    <div class="wrap-svg"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.9733 7.70015L8.46667 14.2668C8.29334 14.5268 8.01335 14.6668 7.71335 14.6668C7.62002 14.6668 7.52667 14.6535 7.43334 14.6268C7.05334 14.5068 6.79335 14.1668 6.79335 13.7735V10.0135C6.79335 9.86015 6.64667 9.72682 6.46667 9.72682L3.78001 9.6935C3.44001 9.6935 3.12668 9.50016 2.97335 9.20682C2.82668 8.92016 2.84668 8.5735 3.03335 8.30017L7.53335 1.7335C7.76001 1.40016 8.18001 1.25349 8.56668 1.37349C8.94668 1.49349 9.20668 1.83349 9.20668 2.22682V5.98683C9.20668 6.14017 9.35335 6.2735 9.53335 6.2735L12.22 6.30682C12.56 6.30682 12.8733 6.49349 13.0267 6.79349C13.1733 7.08016 13.1533 7.42682 12.9733 7.70015Z"
                                fill="#FFC634"></path>
                        </svg></div>CHỌN THUÊ
                </a>
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
    height: 430px;
    width: 100%;
    object-fit: cover;
    display: block;
}

/* detail */
.detail {
    display: grid;
    grid-template-columns: 2fr 1fr;
    height: auto;
    max-width: 1140px;
    position: relative;
    margin: 0 auto;
}

.detail .left {
    width: 100%;
    height: auto;
}

.detail .left .cover-car-item img {
    width: 100%;
    height: 600px;
    border-radius: 16px;
    object-fit: cover;
}

.detail .right {
    width: 100%;
    height: auto;
    margin-left: 1rem;
}

.detail .right .rent-box {
    padding: 16px 24px;
    background: #f7fbff;
    border: 1px solid #f4f4f4;
    border-radius: 10px;
}

.detail .right .rent-box .date-time-form {
    position: relative;
    display: flex;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    background: #fff;
    margin-bottom: 12px;
}

.detail .right .rent-box .date-time-form .form-item {
    width: 100%;
    padding: 12px;
    display: flex;
    flex-direction: column;
    grid-gap: 8px;
    gap: 8px;
    cursor: pointer;
}

.detail .right .rent-box .date-time-form .form-item .wrap-date-time {
    display: flex;
    justify-content: space-between;
    color: #000;
    font-weight: 600;
}

.detail .right .rent-box .date-time-form .line {
    border-right: 1px solid #e0e0e0;
}

.detail .right .rent-box .dropdown-form {
    position: relative;
    display: flex;
    flex-direction: column;
    grid-gap: 8px;
    gap: 8px;
    padding: 12px;
    border: 1px solid #e0e0e0;
    background: #fff;
    border-radius: 10px;
    margin-bottom: 16px;
}

.detail .right .rent-box .dropdown-form label {
    font-size: .875rem;
    font-weight: 500;
    color: #333;
}

.detail .right .rent-box .dropdown-form .wrap-form {
    position: relative;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.detail .right .rent-box .dropdown-form p.note {
    color: #767676;
    margin-bottom: 0;
    font-size: .75rem;
    font-weight: 500;
}

.line-page {
    width: 100%;
    border-bottom: 1px solid #e0e0e0;
}

.detail .right .rent-box .price-container {
    display: flex;
    flex-direction: column;
    grid-gap: 8px;
    gap: 8px;
    padding-top: 16px;
}

.detail .right .rent-box .price-container .price-item {
    display: flex;
    justify-content: space-between;
}

.detail .right .rent-box .price-container .price-item p {
    font-size: .875rem;
    color: #333;
}

.detail .right .df-align-center {
    display: flex!important;
    align-items: center!important;
}

.detail .right .rent-box .price-container .price-item p.cost {
    color:#F83F3F;
    font-weight: 800;
}


.detail .right .rent-box .price-item.total, .detail .right .rent-box .price-total {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
}

.detail .right .btn {
    position: relative;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    grid-gap: 8px;
    gap: 8px;
    vertical-align: middle;
    cursor: pointer;
    white-space: nowrap;
    font-weight: 700;
    padding: 8px 16px;
    border-radius: 8px;
    border: 1px solid #000;
    text-align: center!important;
    width: 100%!important;
    max-width: 100%!important;
    color: #fff;
    background-color: #5fcf86;
    border-color: #5fcf86;
    padding: 16px 24px;
}


.detail .right .btn .btn-primary {
    color: #fff;
    background-color: #5fcf86;
    border-color: #5fcf86;
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