<template>
<header class="container-fluid">
    <nav class="container">
        <ul class="nav">
            <li v-for="(item,index) in menu" :key="index" class="nav-item mr-4">
            <router-link :to="{name:item.linkName}">{{item.label}}</router-link>
            </li>
        </ul>
    </nav>
</header>  
</template>

<script>
export default {
    name:'HeaderComponent',
    data(){
        return{
            menu:[
                {linkName :'home', label:'Home'},
                {linkName :'blog', label:'Blog'},
                {linkName :'who-we-are', label:'Chi siamo'}
            ]
        }
    }
}

</script>

<style>

</style>