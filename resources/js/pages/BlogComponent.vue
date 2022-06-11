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

            <button v-if="previusPage" @click="goPreviusPage" class="bg-danger">indietro</button>
            {{currentPage}}/{{lastPage}}
              <button v-if="nextPage" @click="goNextPage"  class="bg-success">avanti</button>
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
          posts:[],
          currentPage:1,
          previusPage:'',
          nextPage:'',
          lastPage:1,

    }
 },
 mounted(){
    this.nextOrPreviusPage('/api/posts')
},
 methods:{
    nextOrPreviusPage(url){
        window.axios.get(url).then(result=>{
       
        this.posts=result.data.results.data;
   
        this.currentPage=result.data.results.current_page;
        this.lastPage=result.data.results.last_page;
         
        this.previusPage=result.data.results.prev_page_url;
           
        this.nextPage=result.data.results.next_page_url;
              
})
    },
    goPreviusPage(){
        this.nextOrPreviusPage(  this.previusPage);
    },
       goNextPage(){
        this.nextOrPreviusPage(  this.nextPage);
    }
 }
}
</script>

<style>

</style>