<template>
  <div class="tab-content">
      <div class="tab-pane active" id="profile">
        <table class="table">
            <tbody>
                <tr v-for="category in categories" >
                    <td>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="optionsCheckboxes" checked>
                            </label>
                        </div>
                    </td>
                    <td>{{ category.name}}</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
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
      <div class="tab-pane" id="messages">
        <form @submit.prevent="storeCategory">
          <div class="row">
            <div class="col-md-12">
            <div class="form-group label-floating">
            <label class="control-label">Name</label>
            <input type="text" v-model="name"  class="form-control">
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
            <div class="form-group label-floating">
            <label class="control-label"> Description</label>
            <textarea class="form-control" v-model="description" rows="5"></textarea>
            </div>
            </div>
            </div>
          </div>
        <button type="submit"  class="btn btn-primary pull-right">CREATE</button>
        <div class="clearfix"></div>
        </form>
      </div>
      <div class="tab-pane" id="create-product">
        <form @submit.prevent="storeProduct" >
          <div class="row">
            <div class="col-md-12">
            <div class="form-group label-floating">
            <label class="control-label">Name</label>
            <input type="text" v-model="nameProduct"  class="form-control">
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
              <label class="control-label">Category</label>
             <select class="form-control" v-model="category">
               <option value="">Select</option>
              <option v-bind:value="category.id"  v-for="category in categories" >{{category.name}}</option>
            </select>
            </div>
            </div>

            <div class="col-md-12">
              <label class="control-label">Imagen</label>
            <div class="form-group label-floating">
            <input type="file" ref="file" @change="onFileSelected"  class="form-control">
            </div>
            </div>

            <div class="col-md-12">
            <div class="form-group">
            <div class="form-group label-floating">
            <label class="control-label"> Description</label>
            <textarea class="form-control" v-model="descriptionProduct"  rows="5"></textarea>
            </div>
            </div>
            </div>
          </div>
        <button type="submit"  class="btn btn-primary pull-right">CREATE</button>
        <div class="clearfix"></div>
        </form>
      </div>
  </div>

</template>


<script>

    export default {
      mounted() {

      },
      created(){
        this.getCategories()
      },
      data () {
        return {
          name:'',
          description:'',
          categories:[],
          category:'',
          nameProduct:'',
          descriptionProduct:'',
          selectedFile:null
        }
      },
      methods:{
        onFileSelected (event){
          this.selectedFile = this.$refs.file.files[0];
        },
        storeProduct:function(){
          let fd = new FormData();
          fd.append('image',this.selectedFile);
          fd.append('name',this.nameProduct);
          fd.append('category_id',this.category);
          axios.post('/api/product-create',
            fd,
              {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
              }).then(res=>{
                this.nameProduct ='';
                this.category ='';
                this.descriptionProduct='';

          });
        },
        storeCategory: function(){
          const params ={
             name: this.name,
             description: this.description,
          };
          axios.post('/api/store-category',params).then((response)=>{
            this.name ='';
            this.description='';
            this.getCategories();
          });
        },
        getCategories:function(){
          axios.get('/api/get-categories').then((response)=>{
            this.categories = response.data
          });
        }

      }

    }
</script>
