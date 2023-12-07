<template>
    <navchuxe/>
   <div class="container-fluid">
       <div class="row">
           <router-view></router-view>
       </div>
   </div>

</template>

<script>
//    import TheHeader from '../components/TheHeader.vue';
    import navchuxe from '../components/navchuxe.vue';    


   export default{

       provide() {
           return {
           route: this.$route,
           };
       },
       components:{
        navchuxe
       }
               
   }
</script>


