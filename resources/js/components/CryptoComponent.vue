<template>
    <div class="container">
        <div class="row" style="justify-content: center; align-items: center; justify-items: center;">

            <div class="col-md-5 d-none d-md-block" data-aos="zoom-in" data-aos-delay="150" style="overflow: hidden;">
                <img src="/assets/bh.png" style="width: 300px;">
            </div>

            <div class=" col-md-7">
                <div class="card">
                    <table class="table table-striped">
                        <tbody>
                            <tr v-for="rate in rates">
                                <td>
                                    <img :src="rate.image" style="width: 30px; height: 30px;">
                                    <span class="px-3">{{rate.name}}</span>
                                </td>
                                <td class="text-uppercase">{{rate.symbol}}</td>
                                <td>$ {{rate.current_price}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template> 

<script>
    export default {
        
        data() {
            return {
                rates: []
            }
        },

        mounted() {
            console.log('Component mounted.')
            axios.get('/api/rates').then((response) => {
                this.rates = response.data.data.slice(0, 10);
            })
            .catch((e) => {
                
            })
        }
    }
</script>
