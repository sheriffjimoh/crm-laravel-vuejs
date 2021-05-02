<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">change this title</div>

                    <div class="card-body">
                        {{message}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            // console.log('Component mounted.')
        },
       

        data(){
            return{
                message: "let us make magic",
            }
        },
        
      
    } 
</script>
