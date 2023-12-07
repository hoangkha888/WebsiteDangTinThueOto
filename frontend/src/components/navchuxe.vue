<template>
    <div class="container-fuild">
        <div class="row text-white">
            <div class="nav">
                <div class="left">
                    <a-menu v-model:openKeys="openKeys" v-model:selectedKeys="selectedKeys" mode="horizontal"
                        :items="items">
                        <a-menu-item key="chuxe-dangtin">
                            <router-link :to="{ name: 'chuxe-dangtin' }">
                                <span> <i class="fa-light fa-user"></i> Đăng tin</span>
                            </router-link>
                        </a-menu-item>

                        <a-menu-item key="chuxe-danhsachxe">
                            <router-link :to="{ name: 'chuxe-danhsachxe' }">
                                <span> Danh sách Xe</span>
                            </router-link>
                        </a-menu-item>

                        <a-menu-item key="chuxe-pheduyet">
                            <router-link :to="{ name: 'chuxe-pheduyet' }">
                                <span> Phê Duyệt</span>
                            </router-link>
                        </a-menu-item>

                        <a-menu-item key="chuxe-thongke">
                            <router-link :to="{ name: 'chuxe-thongke' }">
                                <span> Thống Kê</span>
                            </router-link>
                        </a-menu-item>

                    </a-menu>

                </div>

                <div class="right">

                    <div class="dropdown" style="float:right;">
                        
                        <button class="dropbtn"><img src="https://cdn-icons-png.flaticon.com/512/147/147142.png" alt="">Hoàng Văn Khá <i class="fa-solid fa-caret-down"></i></button>
                        <div class="dropdown-content">
                            <a href="#">Thông Tin Cá Nhân</a>
                            <a href="#">Đổi Mật Khẩu</a>
                            <a href="#">Đăng Xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
body {
    font-family: "Open Sans", sans-serif !important;
    display: block;
}

.col-12 {
    width: 0%;
}

#app {
    max-width: 100%;
    margin: 0;
    padding: 0.3rem;
    text-align: unset;
}

.row {
    margin-bottom: 0;
}

.row ul {
    background-color: #F83F3F;
    border-bottom: none;
}

.row ul li span {
    color: white;
}

.nav {
    display: grid;
    grid-template-columns: 1fr 1fr;
    height: auto;
    background-color: #F83F3F;
    padding: 0;
    height: 55px;
}

.nav .left {
    height: 40px;
    width: 100%;
}

.nav .right {
    height: 40px;
    width: 100%;

}

/* drop  menu */

.dropbtn {
  background-color: #F83F3F;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 180px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}


.right .dropdown button img{
    width: 35px;
    height: 35px;
    padding-right: 5px;
}

</style>

<script>



import { defineComponent } from 'vue';
import { useMenu } from '../stores/use-menu.js';
import { storeToRefs } from 'pinia';


export default defineComponent({
    setup() {
        const store = useMenu();
        return {
            ...storeToRefs(store)
        };
    },

});


</script>