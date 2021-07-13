<template>
    <div class="container">
        <div class="row" style="align-items: center; justify-content: center;">
            <div class="col-md-5">
                <div class="mb-5">
                    <p class="d-none">
                        <i class="icofont-google-map" style="font-size: 35px"></i>
                        Location: <small>Available at your request</small>
                    </p>

                    <p class="mb-4">
                        <i class="icofont-phone mr-3" style="font-size: 25px;"></i>
                        <a href="https://wa.me/2347036974316" class="text-color" target="_blank">{{ phone }}</a>
                    </p>

                     <p>
                        <i class="bx bxl-facebook mr-3" style="font-size: 25px;"></i>
                        <a href="https://facebook.com/be done omolade" class="text-color">bedonenetworks</a>
                    </p>
                    
                    <p>
                        <i class="icofont-instagram mr-3" style="font-size: 25px;"></i>
                        <a href="https://www.instagram.com/bedonenetworks_" class="text-color">bedonenetworks_</a>
                    </p>

                    <p>
                        <i class="icofont-envelope mr-3" style="font-size: 25px;"></i>
                        <a :href="'mailto:' + email" class="text-color">{{email}}</a>
                    </p>

                </div>

                <div>
                    <div class="media mb-4">
                        <!-- <i class="icofont-hand-power"></i> -->
                        <i class="mr-3 icofont-hand-power" style="padding: 12px; background: blue; border-radius: 10px; color: #FFF;"></i>
                        <div class="media-body">
                            <h5 class="mb-0 text-color">Vision</h5>
                            <p class="mb-0">
                               To create a quality Network that is safe and trustworthy.
                            </p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <i class="mr-3 icofont-space-shuttle" style="padding: 12px; background: blue; border-radius: 10px; color: #FFF"></i>
                        <div class="media-body">
                            <h5 class="mb-0 text-color">Mission</h5>
                            <p class="mb-0">
                                To revolutionalize crypto as a safe means of trading.
                            </p>
                        </div>
                    </div>

                    <div class="media mb-4">
                        <i class="mr-3 icofont-money-bag" style="padding: 12px; background: blue; border-radius: 10px; color: #FFF"></i>
                        <div class="media-body">
                            <h5 class="mb-0 text-color">Values</h5>
                            <p class="mb-0">
                                We pride ourselves as fast, trustworthy and Reliable
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 text-center" style="overflow: hidden;">
                 <div>
                    <slide :data="medias" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import slide from '@wyhaya/vue-slide'
    export default {
        components: { slide },
        data() {
            return {
                email: 'belloalaba6@gmail.com',
                phone: '+234 7036974316',
                medias: []
            }
        },

        methods: {
            loadPosts() {

                axios.get('https://graph.instagram.com/me/media?fields=id,caption,media_url&access_token=IGQVJYLU04NU1pczNfamNXQkJHaWdfS2l1VWVQcFl5bnZAQa3VHdHVwUGp4VWY3cHFqdi1xUHozdkVPNWRmZAUdVMVBrRnB5czlZAcWRLcFRGUGJMWmh6dXk1bHpHQmZAja1lNckNQc0k4ZAU9qUnowYTYyVzZA4M0hJVHhxcWQ0').then(response => {
                    response.data.data.forEach((row) => {
                        this.medias.push(row.media_url);
                    });
                }).catch(e => {
                    this.medias.push('/assets/logo.png');
                })
            }
        },

        mounted() {
            this.loadPosts();
        }

        // https://localhost:8000/?code=AQCbKUYZ7FpHDXJjJOtOJERt1r30YRN6bqEXWh7cxKSSBqNYRFC35WL9ujTQVgV109VPZ8wsnI7hoRMl702LeRDqF18NjZb8phs2uBmn6NFNTuXRv-jDg1TvYDCQrDICRNPg50XVS15x24IWc02cQ24a14Ez-BguEGXQ4P0H3sCWv-bvgRhZ5hXow5OZ8qFp0e2hWWiuo_H8RI-SgSLkniM3tLQOXRUHZLhqZPMExX99XQ#_
    }
</script>
