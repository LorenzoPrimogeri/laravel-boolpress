<template>
  <div>
    <!-- dettaglio di {{post.title}} -->
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

   console.log(id);
    window.axios.get('http://127.0.0.1:8000/api/posts/'+ id).then(result=>{
        console.log/('sono nel mounted');
        this.post=result.data;
    })
}
}

</script>

<style>

</style>