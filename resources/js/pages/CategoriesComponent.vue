<template>
  <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>
                Tutti i Posts della Categoria selezionata
            </h1>
        </div>
        <div v-if="categories.length>0" class="container">
          <ul>
            <li v-for="category in categories" :key='category.id'>
                <router-link :to="{name:'post-per-category',params:{id:category.id}}">
                 {{category.name}}
                 </router-link>
            </li>
          </ul>
        
        </div>
        <div v-else>
            Caricamento dei post in corso
        </div>
    </div>
</div>
</template>

<script>
export default {

name:'CategoriesComponent',
data(){
    return{
        categories:[],
    }
},
mounted(){
    this.nextOrPreviusPage('/api/categories')
},
 methods:{
    nextOrPreviusPage(url){
        window.axios.get(url).then(result=>{
        this.categories=result.data.results;
            })
        },
    }
}
</script>

<style>

</style>