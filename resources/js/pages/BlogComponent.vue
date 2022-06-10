<template>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Tutti i Posts
            </h1>
        </div>
        <div v-if="posts.length>0" class="container">
            <PostCardListComponent :posts='posts'/>
        </div>
        <div v-else>
            Caricamento dei post in corso
        </div>
    </div>
</div>
</template>

<script>
import PostCardListComponent from '../components/PostCardListComponent'
export default {
 name:'BlogComponent',
 components:{
    PostCardListComponent,
 },
 data(){
    return{
          posts:[] 
    }
 },
 mounted(){
    window.axios.get('/api/posts').then(result=>{
        this.posts=result.data;
    console.log( this.posts);
})
 }
}
</script>

<style>

</style>