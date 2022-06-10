 <template>
   <div class="container">
       <div class="row">
           <div class="col-12 text-center">
               Mi Dispiace, la pagina cercata non esiste
           </div>
           <div class="col-12 text-center">
            <router-link :to="{ name: 'home' }">Ritorna alla Home</router-link>
           </div>
       </div> 
   </div>
 </template>
 
 <script>
 export default {
 name: 'NotFoundComponent'
 }
 </script>
 
 <style>
 
 </style>