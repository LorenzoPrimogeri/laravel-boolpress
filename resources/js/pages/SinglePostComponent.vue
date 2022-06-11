<template>
  <div v-if="post" class="text-center">
    <div>
    dettaglio di {{post.title}}
    </div>
      <div>
    <img :src="'/storage/'+post.cover" :alt=" post.title">
    </div>
     <div>
     {{post.content}}
    </div>
    <div>
     {{post.category.name}}
    </div>
    <div>
     <ul>
      <li v-for="tag in post.tags" :key="tag.id">
        {{tag.name}}
      </li>
     </ul>
    </div>
  </div>
  <div v-else>
   caricament oin corso
  </div>
</template>

<script>
export default {
name:'SinglePostComponent',
data(){
    return {
        post:undefined
    }
},
props:[],
 mounted(){
    const slug= this.$route.params.slug;
    const url='/api/posts/'+slug;
    window.axios.get(url).then(result=>{
        console.log('ciao');
        this.post=result.data.results;
    })
}
}

</script>

<style>
ul{
  list-style-type: none;
}
</style>