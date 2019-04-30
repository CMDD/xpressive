<template>
  <div class="caja-carrousel">
  <carousel :navigationEnabled="true">
        <slide v-for="image in images" :key="image.id" >
        <img class="img-carrousel" :src="image.image" alt="">
      </slide>
</carousel>

</div>

</template>

<style media="screen">
  .caja-carrousel{
    width: 80%;
    margin-left: 10%;
  }
  .img-carrousel{
    width: 80%;
    margin-left: 10%;
  }
</style>

<script>


import { Carousel, Slide } from 'vue-carousel';

    export default {
        mounted() {
            // const el = document.getElementById('aniimated-thumbnials'),
            //  window.lightGallery(el)


        },components: {
            Carousel,
            Slide
          },

        created(){
          this.getProducts()
        },
        data (){
          return{
            images:[]
          }
        },
        methods:{
          getProducts(){
            axios.get('api/get-products').then(res=>{
                this.images = res.data;
            });
          },

        }
    }
</script>
