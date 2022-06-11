<template>
<div class="container">
  <div class="row py-2 ">
        <div class="col-3 border-bottom">
            <h4>{{id}}</h4>
        </div>
        <div class="col-3 border-bottom">
            <h4>{{title}}</h4>
        </div>
        <div class="col-3 border-bottom">
            <h4>{{content}}</h4>
        </div>
        <div class="col-3 border-bottom">
            <router-link :to="{ name: 'single-post', params:{slug} }">>Visualizza</router-link>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name:'PostCardComponent',
    props:['title','content','slug','id'],
}
</script>

<style>

</style>