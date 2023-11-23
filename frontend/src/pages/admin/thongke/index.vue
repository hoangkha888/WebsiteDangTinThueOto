<template>
        đây là trang thống kê

</template>

<script>
import { useMenu } from '../../../stores/use-menu';

export default {
        setup(){
                useMenu().onSelectedKey(["admin-thongke"]);
        },
}
</script>