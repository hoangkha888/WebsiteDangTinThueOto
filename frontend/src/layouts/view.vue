<template>
     <TheHeader v-if="!(this.$route.path === '/views/dangnhap' || this.$route.path === '/views/dangky')" />
    <Nav v-if="!(this.$route.path === '/views/dangnhap' || this.$route.path === '/views/dangky')" />
    <div class="container-fluid p-0">
        <div class="row">
            <router-view></router-view>
        </div>
    </div>
        <TheFooter v-if="!(this.$route.path === '/views/dangnhap' || this.$route.path === '/views/dangky')" />
</template>

<script>
    import TheHeader from '../components/TheHeader.vue';
    import TheFooter from '../components/TheFooter.vue';
    import Nav from '../components/nagative.vue';
    // import  abc from '../pages/views/login/dangnhap.vue'


    export default{

        provide() {
            return {
            route: this.$route,
            };
        },
        components:{
        TheHeader,
        TheFooter,
        Nav
        }
                
    }
</script>


