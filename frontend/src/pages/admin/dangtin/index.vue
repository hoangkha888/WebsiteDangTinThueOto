<template>
        đây là trang quản lí đăng tin

</template>

<script>
import { useMenu } from '../../../stores/use-menu';

export default {
        setup(){
                useMenu().onSelectedKey(["admin-dangtin"]);
        },
}
</script>