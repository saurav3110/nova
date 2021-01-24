<template>
    <div>
        <heading class="mb-6">Price Tracker</heading>

        <card
            class="bg-90 flex flex-col items-center justify-center"
            style="min-height: 300px"
        >
            <h1 v-if="apiResponse.USD" class="text-white text-4xl text-90 font-light mb-6">
                INR v/s USD : {{ apiResponse.USD }}
            </h1>
            <h1 v-if="apiResponse.GBP" class="text-white text-4xl text-90 font-light mb-6">
                INR v/s GBP : {{ apiResponse.GBP }}
            </h1>
            <h1 v-if="apiResponse.EUR" class="text-white text-4xl text-90 font-light mb-6">
                NR v/s EUR : {{ apiResponse.EUR }}
            </h1>
        </card>
    </div>
</template>

<script>
export default {
    created(){
        axios.get('/nova-vendor/price-tracker/currency')
            .then( response => {
                let json = JSON.stringify(response.data);
                let parse = JSON.parse(json);
                this.apiResponse = parse[0].rates           
            })
            .catch(function (error){
                console.log(error);
            });
    },

    data() {
        return {
            apiResponse: ''
        }
    }
}
</script>

<style>
/* Scoped Styles */
</style>
