<template>
    <div  class="modal fade cart-modal" id="detailElement" tabindex=-1 role="dialog" aria-labelledby="detailElementLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document">
            <div class=modal-content>
                <div class=modal-header>
                    <i class="fa fa-cart-arrow-down fa-3x animated rotateIn mb-1"></i>
                    <h4 class="modal-title font-weight-bold white-text ml-2" id=detailElementLabel>Your cart</h4>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=modal-body>

                    <div class="row">
                        <div class="col-md-6">
                            <span>Name : </span> <span v-text="select.name"></span><br>
                            <span>Superficie : </span> <span v-text="select.area"></span><br>
                            <span>Sitting place : </span> <span v-text="select.sitting_place"></span><br>
                            <span>description : </span> <span v-text="select.description"></span><br>
                        </div>
                        <div class="col-md-6">
                            <!--Carousel Wrapper-->
                            <div  v-for="(video,index) in select.videos">
                                <div class="view mb-1">

                                    <!--Video source-->
                                    <video v-if="index==0" class="video-fluid embed-responsive embed-responsive-16by9" autoplay loop controls  muted>
                                        <source class="embed-responsive-item" :src="video.url" type="video/mp4" />
                                    </video> <!--Video source-->

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div id="mdb-lightbox-ui"></div>

                            <div class="mdb-lightbox">

                                <figure class="col-md-4" v-for="image in select.images">
                                    <a :href="image.url" data-size="1600x1067">
                                        <img alt="picture" :src="image.url" class="img-fluid">
                                    </a>
                                </figure>
                            </div>

                        </div>
                    </div>



                </div>
                <div class=modal-footer>
                    <button @click="modalReservationForm" type=button class="btn btn-red btn-rounded btn-sm"  data-dismiss=modal>Reserver</button>
                    <button type=button class="btn btn-grey btn-rounded btn-sm" data-dismiss=modal>Fermer</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Vuex from "vuex";
    import {shared} from "../../../app";

    export default {
        name: "DetailElementModal",
        data(){
            return {
                select:[]
            }
        },

        computed:{
            ...Vuex.mapGetters(['bookingElementNumber','listOfRoom','listOfBedRoom']),

        },
        methods:{
            modalReservationForm:function(){
                $('document').ready(function() {
                    setTimeout(function(){
                        $('#modalReservationForm').modal('show');
                    }, 5);
                });

            }
        },
        created:function () {
            shared.$on('roomSelect',(room)=>{
                this.select = room
            });
            shared.$on('bedroomSelect',(bedroom)=>{
                this.select = bedroom
            });
        }
    }

</script>

<style scoped>

</style>
