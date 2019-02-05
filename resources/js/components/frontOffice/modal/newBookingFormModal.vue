<template>
    <div class="modal fade" id="modalReservationForm" tabindex=-1 role="dialog" aria-labelledby="myModalReservationFormLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg cascading-modal" role="document">
            <div class=modal-content>
                <div class="modal-header primary-color white-text">
                    <h4 class=title>
                        <i class="fa fa-pencil"></i> Booking Form</h4>
                    <button type=button class="close waves-effect waves-light" data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>×</span>
                    </button>
                </div>
                <div class=modal-body>
                    <div class=container>
                        <div class=row>
                            <div class=col-md-8>
                                <form @submit.prevent=onBookingSubmit>

                                    <div class=row>
                                        <div class=col-md-6>
                                            <img v-for="(image,index) in element.images" v-if="index == 0" class="img-fluid rounded" :src="image.url" height="50px"  alt="Room or Bedroom image">
                                        </div>
                                        <div class="col-md-6 justify-content-center">
                                            <p class="text-uppercase font-weight-bold dark-grey-text" v-text="element.name" ></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=col-md-6>
                                            <div class="md-form form-sm">
                                                <span for=startingDate style=font-size:.875em>starting date</span>
                                                <input type=date v-model=form.startingDate :min=today id=startingDate @change="form.endingDate = ''" required  class="form-control form-control-sm" >
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class="md-form form-sm">
                                                <span for=endingDate style=font-size:.875em>ending date</span><br>
                                                <input type=date id=endingDate :min=form.startingDate v-model=form.endingDate required  class="form-control form-control-sm" >
                                            </div>
                                        </div>
                                        <span class="is-invalid red-text ml-3" style="font-size:.875em" ></span>
                                    </div>
                                    <input type=hidden v-model="form.reserveable_type = element.name">
                                    <input type=hidden v-model="form.reserveable_id = element.id">
                                    <div class="text-center mt-4 mb-2">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-save ml-2"></i>Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class=col-md-4 style="border-left:black solid 2px">
                                <p class="text-center white-text" style=background-color:#007bff>Suprise</p>
                                <p class="text-justify grey-text-2">
                                    Enregistrer et finaliser votre réservation et obtenez quelques tables et chaises Louis XIV gratuitement.
                                    <br><cite>Cette offre est valable pour une période bien définie</cite>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    import {shared} from "../../../app";
    import {Form} from "../../../Form";
    import * as cookie from "../../../Cookie";
    import Vuex from "vuex";

    export default {
        name: "newBookingFormModal",
        data(){
            return{
                element:[],
                today:'',
                cookieUserId:'',
                form : new Form({
                    startingDate:'',
                    endingDate:'',
                    reserveable_type:'',
                    reserveable_id:0,
                })
            }
        },
        computed:{
            ...Vuex.mapGetters(['bookingElementNumber','listOfRoom','listOfBedRoom']),
        },
        methods:{
            ...Vuex.mapActions(['updateBookingElementNumber']),

            //Methode permettant de rempplacer le caractere motif dans chaine par replace
            replaceInString:function(chaine, motif, replace){
                let result = chaine.replace(motif,replace);
                return result;
            },

            updateImagesUrl:function(){
                // Nous allons remplacer le public qui est dans l'url des images en 'img/'
                this.element.images.forEach((image,index)=>{
                    this.element.images[index].url = this.replaceInString(image.url,'public/','img/')
                })
            },

            updateVideosUrl:function(){
                // Nous allons remplacer le public qui est dans l'url des videos en ''
                this.element.videos.forEach((video,index)=>{
                    this.element.videos[index].url = this.replaceInString(video.url,'public/','')
                })
            },

            setInitDate:function(){
                var date = new Date();
                this.today  = date.getFullYear() + "-" + ("0" + (date.getMonth() + 1)).slice(-2) + "-" + ("0" + date.getDate()).slice(-2);

            },

            onBookingSubmit: function () {
                var valeur = this.form.reserveable_type + ':' + this.form.reserveable_id + ':' + this.form.startingDate + ':' + this.form.endingDate + ':' + this.loadAnImage(this.form.reserveable_type,this.form.reserveable_id) ;
                var nbre = 1;
                if (cookie.existenceCookies('nbreReservation')) {
                    nbre = parseInt(cookie.lireCookie('nbreReservation'));
                    nbre = nbre + 1;
                    var nom = 'reservation' + nbre;
                    cookie.creerCookies(nom, valeur, 1);
                    cookie.creerCookies('nbreReservation', nbre, 1);
                } else {
                    cookie.creerCookies('nbreReservation', 1, 1);
                    cookie.creerCookies('reservation1', valeur, 1);
                }
                this.updateBookingElementNumber(nbre)
                this.form.reset();
                $('.close').click();

                toastr.info('Reservation enregistré. Finaliser votre reservation en cliquant sur Finaliser mes reservations');

            },
            loadAnImage(name,id){
                var room = null
                if( name.includes('SALLE') ){
                    room = this.listOfRoom.find((room,index)=>room.id == id)
                }else {
                    room = this.listOfBedRoom.find((room,index)=>room.id == id)
                }
                if(room != null){
                    var images = room.images;
                    if(images != null){
                        return images[0].url;
                    }
                }

            },
            initCookies: function () {

                if (!cookie.existenceCookies('user_id')) {

                    var cookieUserId = cookie.generateCookieUserId();
                    cookie.creerCookies('user_id',cookieUserId,200);
                    this.cookieUserId = cookieUserId;

                }else{
                    var cookieUserId  = cookie.lireCookie('user_id');
                    this.cookieUserId = cookieUserId;
                }

            }
        },
        mounted:function(){
            this.initCookies();
        },
        created:function(){
            shared.$on('newBooking', (element) => {
                this.element = element
                this.updateImagesUrl()
                this.updateVideosUrl()
            });

            this.setInitDate();
            // MDB Lightbox Init
            $(function () {
                $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
            });
        },

    }


</script>

<style scoped>
    body{
        padding-right: 0;
    }
</style>
