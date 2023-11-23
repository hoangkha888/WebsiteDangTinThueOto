<template>
    <TheHeader/>
    <div class="container-fluid mt-3">
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

