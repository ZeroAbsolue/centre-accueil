<template>
    <!--Section: Offers-->
    <section id="offers" class="section pt-2 mt-3 pb-3 container">

        <div class="divider-new">
        <h5 class="text-center text-uppercase font-weight-bold spacing my-5 py-4 wow fadeIn" data-wow-delay="0.2s">
            <strong>top offers</strong>
        </h5>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-4">

                <!--Card-->
                <div class="card card-personal mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="/img/Chambre/IMG_0607.jpg" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <a>
                            <h5 class="font-weight-bold spacing text-uppercase">
                                <strong>CHAMBRE 101</strong>
                            </h5>
                        </a>
                        <a>
                            <span class="badge badge-info py-2 px-2">XAF 15 000</span>
                        </a>

                        <!--Text-->
                        <p class="grey-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-hotel dark-grey-text" aria-hidden="true"></i> 1 beds
                                </p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-cutlery dark-grey-text" aria-hidden="true"></i> Launches</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-wifi dark-grey-text" aria-hidden="true"></i> Wi-Fi</p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                        </p>
                        <hr>
                        <!--Grid column-->
                        <div class="col-12 text-center">
                            <a class="btn btn-info btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=0"  data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                                <strong>Reserver</strong>
                            </a>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Card content-->
                </div>

                <!--Card-->
                <!--Section: Offers-->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-4">

                <!--Card-->
                <div class="card card-personal mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="/img/Chambre/IMG_0690.jpg" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <a>
                            <h5 class="font-weight-bold spacing text-uppercase">
                                <strong>CHAMBRE 201</strong>
                            </h5>
                        </a>
                        <a>
                            <span class="badge badge-info py-2 px-2">XAF 10 000</span>
                        </a>

                        <!--Text-->
                        <p class="grey-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-hotel dark-grey-text" aria-hidden="true"></i> 1 bed</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-cutlery dark-grey-text" aria-hidden="true"></i> Launches</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-wifi dark-grey-text" aria-hidden="true"></i> Wi-Fi</p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                        </p>
                        <hr>
                        <!--Grid column-->
                        <div class="col-12 text-center">
                            <a  class="btn btn-info btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=3"  data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                                <strong>Reserver</strong>
                            </a>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Card content-->

                </div>
            </div>

            <!--Card-->
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-12 col-lg-4">

                <!--Card-->
                <div class="card card-personal mb-4">

                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="/img/Chambre/IMG_0633.jpg" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card image-->

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <a>
                            <h5 class="font-weight-bold spacing text-uppercase">
                                <strong>CHAMBRE 102</strong>
                            </h5>
                        </a>
                        <a>
                            <span class="badge badge-info py-2 px-2">XAF 20 000</span>
                        </a>

                        <!--Text-->
                        <p class="grey-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-hotel dark-grey-text" aria-hidden="true"></i> 1 bed</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-cutlery dark-grey-text" aria-hidden="true"></i> Launches</p>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 text-center">
                                <p class="dark-grey-text">
                                    <i class="fa fa-wifi dark-grey-text" aria-hidden="true"></i> Wi-Fi</p>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                        </p>
                        <hr>
                        <!--Grid column-->
                        <div class="col-12 text-center">
                            <a  class="btn btn-info btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=1"  data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                                <strong>Reserver</strong>
                            </a>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid column-->
                </div>
            </div>
            <!--Grid row-->
            </p>
        </div>
        <!-- Grid row -->

        <!--Section: Offers-->
    </section>
    <!--Section: Offers-->
</template>

<script>
    import {shared} from "../../app";
    import Vuex from "vuex";

    export default {
        name: "TopOffer",
        data(){
            return {
                bedroomIdSelect :10,
                bedroom:{},
            }
        },
        computed:{
            ...Vuex.mapGetters(['listOfBedRoom']),
        },watch:{
            bedroomIdSelect: function (newElement, lastElement) {
                this.bedroom = this.listOfBedRoom.find((bedroom,index)=>index === newElement);
                shared.$emit('newBooking', this.bedroom);
                shared.$emit('bedroomSelect', this.bedroom);

            }
        },
        methods:{
            ...Vuex.mapActions(['loadListOfBedRoom']),

            fetchBedRooms:function(){
                this.loadListOfBedRoom()
            },

        },
        mounted:function() {
            this.fetchBedRooms();
        }
    }
</script>

<style scoped>

</style>
