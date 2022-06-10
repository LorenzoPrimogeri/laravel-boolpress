<template>
  <div>
    {{title}}
    <div>
        {{content}}
    </div>
  </div>
</template>

<script>
export default {
    name:'PostCardComponent',
    props:['title','content'],
}
</script>

<style>

</style>