<template>
  <div>
    <div v-for="(post,index) in posts" :key="index" class="div">
        <PostCardComponent :title='post.title' :content='post.content'/>

    </div>
  </div>
</template>

<script>
import PostCardComponent from './PostCardComponent'
export default {
    name:'PostCardListComponent',
    props:['posts'],
    components:{
        PostCardComponent,
    }

}
</script>

<style>

</style>