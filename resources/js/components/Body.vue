<template>
    <div class="container">
       <Leftside />
       <Rightside />
    </div>
</template>

<script>
import Leftside from '../components/Leftside.vue';
import Rightside from '../components/Rightside.vue';
export default {

    components:{
         Leftside,
         Rightside
    },
    data(){

        return{
            message:"This is from my body component",
        }
    }
}
</script>

<style scoped>

</style>