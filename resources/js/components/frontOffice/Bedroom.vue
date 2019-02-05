<template>
    <!--Section: Rooms-->
    <section id="room" class="section  mb-3 container">

        <!--Secion heading-->
        <div class="divider-new div-color-2">
        <h5 class="text-center text-uppercase font-weight-bold spacing my-5 py-4 wow fadeIn" data-wow-delay="0.2s">
            <strong>CAPB MASTER'S ROOMS</strong>
        </h5>
        </div>
        <!--Carousel Wrapper-->
        <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
                <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides and lightbox-->

            <div class="carousel-inner mdb-lightbox" role="listbox">
                <div id="mdb-lightbox-ui"></div>
                <!--First slide-->
                <div class=" carousel-item active text-center">

                    <div class="col-md-4 d-md-inline-block view zoom clearfix">
                        <img class="img-fluid rounded" src="/img/Chambre/IMG_0607.jpg" alt="Card image cap">

                        <p class="text-uppercase font-weight-bold dark-grey-text spacing mt-3 mb-0">CHAMBRE 101</p>

                        <a  class="info-text mt-1 btn btn-cyan-3 btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=0" data-toggle="modal" data-target="#detailElement">
                            <em>Check details</em>
                        </a>

                        <a class="float-right btn btn-info btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=0" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                            <strong>Reserver</strong>
                        </a>
                    </div>

                    <div class="col-md-4 d-md-inline-block view zoom clearfix">
                        <img class="img-fluid rounded" src="/img/Chambre/IMG_0617.jpg" alt="Card image cap">

                        <p class="text-uppercase font-weight-bold dark-grey-text spacing mt-3 mb-0">CHAMBRE 102</p>
                        <a  class="info-text mt-1 btn btn-cyan-3 btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=1" data-toggle="modal" data-target="#detailElement">
                            <em>Check details</em>
                        </a>
                        <a class="float-right btn btn-info btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=1" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                            <strong>Reserver</strong>
                        </a>
                    </div>

                    <div class="col-md-4 d-md-inline-block view zoom clearfix">
                        <img class="img-fluid rounded" src="/img/Chambre/IMG_0651.jpg" alt="Card image cap">

                        <p class="text-uppercase font-weight-bold dark-grey-text spacing mt-3 mb-0">CHAMBRE 103</p>
                        <a  class="info-text mt-1 btn btn-cyan-3 btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=2" data-toggle="modal" data-target="#detailElement">
                            <em>Check details</em>
                        </a>
                        <a class="float-right btn btn-info btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=2" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                            <strong>Reserver</strong>
                        </a>
                    </div>


                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item text-center">

                    <div class="col-md-4 d-md-inline-block view zoom clearfix">
                        <img class="img-fluid  rounded" src="/img/Chambre/IMG_0690.jpg" alt="Card image cap">

                        <p class="text-uppercase font-weight-bold dark-grey-text spacing mt-3 mb-0">CHAMBRE 201</p>
                        <a  class="info-text mt-1 btn btn-cyan-3 btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=3" data-toggle="modal" data-target="#detailElement">
                            <em>Check details</em>
                        </a>
                        <a class="float-right btn btn-info btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=3" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                            <strong>Reserver</strong>
                        </a>
                    </div>

                    <div class="col-md-4 d-md-inline-block view zoom clearfix">
                        <img class="img-fluid rounded" src="/img/Chambre/IMG_0665.jpg" alt="Card image cap">

                        <p class="text-uppercase font-weight-bold dark-grey-text spacing mt-3 mb-0">CHAMBRE 202</p>
                        <a  class="info-text mt-1 btn btn-cyan-3 btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=4" data-toggle="modal" data-target="#detailElement">
                            <em>Check details</em>
                        </a>
                        <a class="float-right btn btn-info btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=4" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                            <strong>Reserver</strong>
                        </a>
                    </div>

                    <div class="col-md-4 d-md-inline-block view zoom clearfix">
                        <img class="img-fluid rounded" src="/img/Chambre/IMG_0652.jpg" alt="Card image cap">

                        <p class="text-uppercase font-weight-bold dark-grey-text spacing mt-3 mb-0">CHAMBRE 203</p>
                        <a  class="info-text mt-1 btn btn-cyan-3 btn-sm font-weight-bold btn-rounded" @click="bedroomIdSelect=5" data-toggle="modal" data-target="#detailElement">
                            <em>Check details</em>
                        </a>
                        <a class="float-right btn btn-info btn-sm font-weight-bold btn-rounded"  @click="bedroomIdSelect=5" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                            <strong>Reserver</strong>
                        </a>
                    </div>

                </div>
                <!--/.Second slide-->


            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->

    </section>
    <!--/Section: Rooms-->
</template>

<script>
    import {shared} from "../../app";
    import Vuex from "vuex";

    export default {
        name: "Chambres",
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
