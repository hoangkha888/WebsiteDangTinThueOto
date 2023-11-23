<template>
        đây là trang quản lí user

</template>

<script>
import { useMenu } from '../../../stores/use-menu';

export default {
        setup(){
                useMenu().onSelectedKey(["admin-nguoidung"]);
        },
}
</script>