<template>
    <div class="container-fluid mt-1">
        <div class="row">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import TheHeader from '../components/TheHeader.vue';

    export default{
        components:{
            TheHeader,
        }
    }
</script>

