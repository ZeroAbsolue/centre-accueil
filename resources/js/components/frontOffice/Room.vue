<template>
    <section class="section pt-2 mt-3 pb-3 container" id="salles">

        <!--Seciton heading-->
        <div class="row mt-5 mb-4">
            <div class="col-md-12 div-color-2">
                <div class="divider-new">
                    <h3 class="text-center text-uppercase font-weight-bold mr-3 ml-3 wow fadeIn" data-wow-delay="0.2s">CAPB VIP ROOM</h3>
                </div>
            </div>

            <p class="black-text text-center ml-3 mr-3 mt-1 mb-5">Faites la <strong> différence</strong>. Rendez vos évènements <strong>inoubliables</strong>,
                Vous souhaitez un lieu inspirant pour organiser un évènementt, finaliser votre planification stratégique, stimuler votre équipe des ventes, tenir une session de formation ou tout simplement remercier votre personnel pour les efforts fournis au cours des derniers mois?
                <br>L’Hôtel CAPB vous propose l’environnement qu’il vous faut.
            </p>

            <!-- Grid column -->
            <div class="col-md-12 col-xl-6  mb-5">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/Salle/dc0c2008801ec5964032fda9a33dd1e7.jpg" height="325" class="card-img-top" alt="card">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center mb-3">
                        <!--Title-->
                        <h4 class="card-title mt-1 pb-1"><strong>Salle de conférence</strong></h4>
                        <!--Text-->
                        <p class="card-text dark-grey-text">Finaliser votre planification stratégique, stimuler votre équipe de ventes, tenir une session de formation ou tout simplement remercier votre personnel pour les efforts fournis au cours des derniers mois?. </p>
                        <a  @click="roomIdSelect=0" class="btn btn-danger btn-rounded" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">RESERVER</a>
                        <a  @click=" roomIdSelect = 0" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#detailElement" data-title="Show detail">Détail</a>

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- /Grid column -->

            <!-- Grid column -->
            <div class="col-md-12 col-xl-6">

                <!--Card-->
                <div class="card">

                    <!--Card image-->
                    <div class="view overlay">
                        <img src="/img/Salle/fete.jpg" class="card-img-top" alt="card">
                        <a href="#">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body text-center mb-3">
                        <!--Title-->
                        <h4 class="card-title mt-1 pb-1"><strong>Salle de fête</strong></h4>
                        <!--Text-->
                        <p class="card-text dark-grey-text">Faites la différence, Immortalisé vos évènements dans un cadre spatieux, sompteux et à moindres cout. </p>
                        <a  @click=" roomIdSelect = 1" class="btn btn-danger btn-rounded" data-toggle="modal"  data-target="#modalReservationForm"  data-title="Add to Cart">Reserver</a>
                        <a  @click=" roomIdSelect = 1" class="btn btn-danger btn-rounded" data-toggle="modal"  data-target="#detailElement"  data-title="Add to Cart">Détail</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!-- /Grid column -->

        </div>

    </section>
</template>

<script>

    import {shared} from "../../app";
    import Vuex from "vuex";

    export default {
        name: "Room",
        data(){
            return {
                roomIdSelect :10,
                room:{},
            }
        },
        computed:{
            ...Vuex.mapGetters(['listOfRoom']),

        },
        watch:{
            roomIdSelect: function (newElement, lastElement) {
                this.room = this.listOfRoom.find((room,index)=>index === newElement);
                shared.$emit('newBooking', this.room);
                shared.$emit('roomSelect', this.room);

            }
        },
        methods:{
            ...Vuex.mapActions(['loadListOfRoom']),

            fetchRooms:function(){
                this.loadListOfRoom()
            },

        },
        mounted:function() {
            this.fetchRooms();
        }

    }
</script>

<style scoped>

</style>
