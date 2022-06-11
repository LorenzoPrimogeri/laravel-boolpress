<template>
<div>
<div>
    <h1>
        Tutti i post
    </h1>
</div>
    <div v-if="category" class="text-center">
        <h2>{{category.name}}</h2>
        <PostCardListComponent :posts="category.posts"/>
        
    </div>
 <div v-else class="text-center">
    Caricamento in corso   
  </div>
</div>
</template>

<script>
import PostCardListComponent from '../components/PostCardListComponent'
export default {
name:'PostCategoriesComponent',
props:['id'],
data(){
    return {
        category:undefined
    }
},
components:{
PostCardListComponent
},
props:[],
 mounted(){
    const id= this.$route.params.id;
    const url='/api/categories/'+id;
    window.axios.get(url).then(result=>{
        console.log(result.data.result)
        this.category=result.data.result;
    })
}
}
</script>

<style>

</style>