<template>
  <div>
    <div v-for="(post,index) in posts" :key="index">
        <PostCardComponent :title='post.title' :id='post.id' :content='post.content' :slug='post.slug'/>

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