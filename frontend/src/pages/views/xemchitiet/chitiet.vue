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
            <div class="group-name">
                <h3 style="font-weight: 700; font-size: 2rem;">MAZDA 2 2023 đời mới nhất hiện nay</h3>
                <div class="group-action d-flex-center-btw">
                    <div class="shared">
                        <div class="wrap-svg wrap-ic share" style="border: none; display: flex;">
                            <i class="fa-solid fa-star" style="color: yellow;"></i>
                            <span class="info">5.0</span>
                        </div>
                        <div class="fav-item wrap-ic wrap-svg"><i class="fa-thin fa-heart"></i></div>
                    </div>
                </div>
            </div>
            <div class="line-page"></div>
            <div class="info-car-desc">
                <h6 style="margin-top: 24px; font-size: 1.25rem; font-weight: 600;">Đặc điểm và các tính năng</h6>
                <div class="features-car">
                    <ul>
                        <li> <i class="fa-light fa-person-seat" style="width: 24px; height: 24px; color: black;"></i> Số ghế: <span>10</span></li>
                        <li> <i class="fa-light fa-gas-pump"></i> Nhiên liệu: <span>Xăng</span></li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Bản đồ</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/bluetooth-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Bluetooth</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/dash_camera-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Camera hành trình</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/reverse_camera-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Camera lùi</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/impact_sensor-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Cảm biến va chạm</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/head_up-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Cảnh báo tốc độ</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/gps-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Định vị GPS</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/usb-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Khe cắm USB</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/spare_tire-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Lốp dự phòng</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/dvd-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Màn hình DVD</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/etc-v2.png"
                                alt="Mioto - Thuê xe tự lái"> ETC</li>
                        <li> <img loading="lazy" src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/airbags-v2.png"
                                alt="Mioto - Thuê xe tự lái"> Túi khí an toàn</li>
                    </ul>
                </div>
            </div>

            <div class="line-page"></div>

            <div class="info-car-desc" id="papers">
                <h6 class="df-align-center" style="margin-bottom: 24px;font-size: 1.25rem;font-weight: 600;">Yêu cầu</h6>
                <div class="required-papers">
                    <div class="required-papers__item">
                        <div class="type__item">
                            
                            <p class="font-12">Phải có 1 trong 2 loại</p>
                        </div>
                        <div class="type-content"><img loading="lazy"
                                src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/gplx_cccd.png">
                            <div class="type-name">
                                <p>GPLX &amp; CCCD gắn chip (đối chiếu)</p>
                            </div>
                        </div>
                        <div class="type-content"><img loading="lazy"
                                src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/gplx_passport.png">
                            <div class="type-name">
                                <p>GPLX (đối chiếu) &amp; Passport (giữ lại)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line-page"></div>

            <div class="info-car-desc">
                <h6 style="margin-bottom: 24px;font-size: 1.25rem;font-weight: 600;">Điều khoản</h6>
                <pre class="hide" style="position: relative;color: #767676;">
Quy định khác:
◦ Sử dụng xe đúng mục đích.
◦ Không sử dụng xe vào mục đích phi pháp, trái pháp luật.
◦ Không sửa dụng xe thuê để cầm cố, thế chấp.
◦ Không hút thuốc, nhả kẹo cao su, xả rác trong xe.
◦ Không chở hàng quốc cấm dễ cháy nổ.
◦ Không chở hoa quả, thực phẩm nặng mùi trong xe.
◦ Khách hàng vui lòng vệ sinh xe sạch sẽ.
                </pre>
            </div>

        </div>


        <!-- class right -->
        <div class="right">
            <div class="rent-box" id="cardetail" style="position: relative;">
                <div class="date-time-form ">
                    <div class="form-item"><label>Nhận xe </label>
                        <div class="wrap-date-time">
                            <VueDatePicker v-model="date" locale="vi" placeholder="Chọn ngày" format="dd/MM/yyyy">
                            </VueDatePicker>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-item"><label>Trả xe</label>
                        <div class="wrap-date-time">
                            <div class="wrap-date"><span class="value">
                                    <div class="wrap-date-time">
                                        <VueDatePicker v-model="date" locale="vi" placeholder="Chọn ngày"
                                            format="dd/MM/yyyy">
                                        </VueDatePicker>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-form"><label>Địa điểm giao xe</label>
                    <div class="wrap-form "><span class="value">Quận 5, Hồ Chí Minh</span></div>
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
                    <div class="line-page"></div>
                    <div class="price-item total">
                        <p style="font-size: 1rem;font-weight: 800;">Thành tiền</p>
                        <p class="cost"><span>813 150đ</span></p>
                    </div>
                </div>
                <a class="btn btn-primary btn--m width-100">CHỌN THUÊ</a>
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
    grid-template-columns: 2fr 1.1fr;
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
    height: 500px;
    border-radius: 16px;
    object-fit: cover;
}

.detail .left .group-name {
    position: relative;
    display: flex;
    justify-content: space-between;
    grid-gap: 8px;
    gap: 8px;
    margin-top: 32px;
}

.detail .left .group-name .shared {
    display: flex;
    align-items: center;
    grid-gap: 16px;
    gap: 16px;
}

.detail .left .group-name .shared .wrap-ic {
    width: 50px;
    padding: 12px;
    border-radius: 100%;
    border: 1px solid #e0e0e0;
    cursor: pointer;
    text-align: center;
}

.detail .left .info-car-desc {
    display: flex;
    flex-direction: column;
    margin: 24px 0;
    scroll-margin-top: 110px;
}

.detail .left .info-car-desc .features-car ul {
    grid-gap: 24px 16px;
    gap: 24px 16px;
    display: flex;
    flex-wrap: wrap;
}

.detail .left .info-car-desc .features-car ul li {
    width: calc(33.33% - 10.67px);
    display: flex;
    grid-gap: 16px;
    gap: 16px;
}
.detail .left .info-car-desc .features-car ul li img{
    width: 24px;
    height: 24px;
}


.detail .left .info-car-desc .df-align-center h6{
    display: flex!important;
    align-items: center!important;
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 24px;
}

.required-papers {
    display: flex;
    grid-gap: 24px;
    gap: 24px;
    align-items: flex-start;
    padding: 16px 24px;
    background: #fef7f4;
    border-left: 8px solid #f26a2b;
    border-radius: 8px;
}

.required-papers .required-papers__item {
    width: calc(50% - 12px);
    display: flex;
    flex-direction: column;
    grid-gap: 16px;
    gap: 16px;
}

.required-papers .required-papers__item .type__item {
    display: flex;
    align-items: center;
    grid-gap: 4px;
    gap: 4px;
}

.required-papers .required-papers__item .type-content {
    display: flex;
    grid-gap: 16px;
    gap: 16px;
}

.required-papers .required-papers__item .type-content img {
    width: 24px;
    height: 24px;
}



/* class right */
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
    display: flex !important;
    align-items: center !important;
}

.detail .right .rent-box .price-container .price-item p.cost {
    color: #000000;
    font-weight: 800;
}


.detail .right .rent-box .price-item.total,
.detail .right .rent-box .price-total {
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
    text-align: center !important;
    width: 100% !important;
    max-width: 100% !important;
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
    data() {
        return {
            date: null,
            
        };
    }

});
</script>

