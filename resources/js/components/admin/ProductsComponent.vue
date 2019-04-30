<template lang="html">
  <div class="card">
      <div class="card-header" data-background-color="purple">
          <h4 class="title">Products</h4>
          <button type="button" rel="tooltip" v-on:click="getProducts()" title="Reload" class="btn btn-info " >
              <i class="material-icons">cached</i>
          </button>
      </div>
  <div class="card-content table-responsive">
    <table class="table table-hover">
      <thead class="text-warning">
      <th>ID</th>
      <th>Name</th>
      <th>Image</th>
      </thead>
    <tbody>
      <tr v-for="product in products">
        <td>{{product.id}}</td>
        <td>{{product.name}}</td>
        <td>
        <img style="width:15%;"  v-bind:src="'/'+product.image" alt="">
        </td>
        <td class="td-actions text-right">
        <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-simple btn-xs">
        <i class="material-icons">edit</i>
        </button>
        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
        <i class="material-icons">close</i>
        </button>
        </td>
      </tr>
    </tbody>
    </table>
  </div>
  </div>
</template>

<script>

  export default {

    created(){
      this.getProducts();
    },
    data(){
      return{
        products:[]
      }
    },
    methods:{
      getProducts(){
        axios.get('/api/get-products').then(res=>{
          this.products = res.data;
          console.log(res.data);
        });
      }
    }

  }

</script>
