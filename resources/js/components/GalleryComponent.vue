<template>
<div class="row">
  <div class="col-md-3">
  <ul class="lista-categorias">
  <a href="#"  v-on:click.prevent="getProduct(category.id)" v-for="category in categories" ><li>{{category.name}}</li></a>
  </ul>
  </div>
  <div class="col-md-9">
    <img class="img-galerry" v-for="(image, i) in images" :src="image" :key="i" @click="index = i">
    <vue-gallery-slideshow :images="images" :index="index" @close="index = null"></vue-gallery-slideshow>

    <!-- <div  id="aniimated-thumbnials">
        <a href="img/gallery/1.jpg">
        <img class="img-galerry" src="img/gallery/1.jpg" />
        </a>
        <a  href="img/gallery/1.jpg">
        <img class="img-galerry" src="img/gallery/1.jpg" />
        </a>
        <a v-for="product in products"  :href="product.image">
        <img class="img-galerry" :src="product.image" />
        </a>
    </div> -->
  </div>
</div>
</template>

<script>

// import 'lightgallery.js/dist/css/lightgallery.css'
// import 'lightgallery.js'
import VueGallerySlideshow from 'vue-gallery-slideshow';


    export default {
        mounted() {
            // const el = document.getElementById('aniimated-thumbnials'),
            //  window.lightGallery(el)


        },
        components: {
          VueGallerySlideshow
        },
        created(){
          this.getCategories(),
          this.getProducts()
        },
        data (){
          return{
             categories:[],
             images:[],
             index: null
          }
        },
        methods:{
          getCategories (){
              axios.get('api/get-categories').then(res=>{
                this.categories = res.data;

              });
          },
          getProducts(){
            axios.get('api/get-products').then(res=>{
                this.images = res.data.map(
                      function(images){
                          return images.image;
                      }
                  );
            });
          },
          getProduct: function(id){
          var url = 'api/get-product/' + id;
          axios.get(url).then(res => {
            this.images = res.data.map(
                  function(images){
                      return images.image;
                  }
              );
          });
        },

        }
    }
</script>
