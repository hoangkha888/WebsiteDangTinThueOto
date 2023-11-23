<template>
        đây là trang duyệt yêu cầu

</template>

<script>
import { useMenu } from '../../../stores/use-menu';

export default {
        setup(){
                useMenu().onSelectedKey(["admin-pheduyet"]);
        },
}
</script>