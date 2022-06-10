<template>
  <div v-if="post">
    dettaglio di {{post.title}}
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
    const id= this.$route.params.id;
    const url='/api/posts/'+id;
    window.axios.get(url).then(result=>{
        console.log('ciao');
        this.post=result.data.results;
    })
}
}

</script>

<style>

</style>