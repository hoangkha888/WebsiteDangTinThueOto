<template>
    <a-menu
      v-model:openKeys="openKeys"
      v-model:selectedKeys="selectedKeys"
      mode="inline"
    >
      <a-menu-item key="admin-nguoidung">
        <router-link :to = " { name: 'admin-nguoidung'}">
            <span> <i class="fa-light fa-user"></i> Tài khoản</span>
        </router-link>
      </a-menu-item>

      <a-menu-item key="admin-dangtin">
        <router-link :to = " { name: 'admin-dangtin'}">
            <span> Quản Lí Đăng Tin</span>
        </router-link>
      </a-menu-item>

      <a-menu-item key="admin-pheduyet">
        <router-link :to = " { name: 'admin-pheduyet'}">
            <span> Phê Duyệt</span>
        </router-link>
      </a-menu-item>

      <a-menu-item key="admin-thongke">
        <router-link :to = " { name: 'admin-thongke'}">
            <span> Thống Kê</span>
        </router-link>
      </a-menu-item>

      <a-menu-item key="admin-caidat">
        <router-link :to = " { name: 'admin-caidat'}">
            <span> Cài Đặt</span>
        </router-link>
      </a-menu-item>



    </a-menu>
</template>

<script>
import { defineComponent} from 'vue';
import { useMenu } from '../stores/use-menu.js';
import { storeToRefs } from 'pinia';
export default defineComponent({
  setup() {
    const store = useMenu();
    return{
      ...storeToRefs(store)
    };
  },
});
</script>