<template>
    <div class="modal fade" id="modalSubmitForm" tabindex=-1 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Finalisation de réservation</h4>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <form @submit.prevent=reservationSubmit>
                        <div class="md-form mb-5">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type=text v-model=form.name @click="form.errors.clear('name')" id=form34 class="form-control validate">
                            <label for=form34>Your name</label>
                            <span class="red-text ml-5" style="font-size:.875em" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type=email @click="form.errors.clear('email')" required v-model=form.email id=form29 class="form-control validate">
                            <label for=form29>Your email</label>
                            <span class="red-text ml-5" style="font-size:.875em" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                        </div>
                        <div class="md-form mb-5">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input type=tel @click="form.errors.clear('phone')" required v-model=form.phone id=form32 class="form-control validate">
                            <label for=form32>Phone</label>
                            <span class="red-text ml-5" style="font-size:.875em" v-if="form.errors.has('phone')"  v-text="form.errors.get('phone')"></span>
                        </div>
                        <div class=float-right>
                            <button class="btn btn-info" :disabled=form.errors.any()>Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    import {Form} from "../../../Form";
    import * as cookie from "../../../Cookie";
    import Vuex from "vuex";
    import {shared} from "../../../app";

    export default {
        name: "SubmitBookingModal",
        data(){
            return {
                form : new Form({
                    name:'',
                    email:'',
                    phone:'',
                    elementReserver:[],
                    _token:''
                })
            }
        },
        methods:{
            ...Vuex.mapActions(['updateBookingElementNumber']),

            reservationSubmit(){
                this.getBookingElement()
                this.setCrsfToken()
                this.form.post('/reservation')
                    .then(response=>{
                        $('#modalSubmitForm').modal('hide');
                         this.clearBookingElement()
                         shared.$emit('clearElementReserver')
                        toastr.info('Merci pour votre confiance, Nous vous enverons un mail');
                    })
                    .catch(error=>{
                        console.log(error)
                    })
            },
            getBookingElement(){
                if(cookie.existenceCookies('nbreReservation')) {
                    this.form.elementReserver=[];
                    var nbre=parseInt(cookie.lireCookie('nbreReservation'));

                    for(var i=1;i<=nbre;i++){
                        var nom='reservation'+i;
                        if(cookie.existenceCookies(nom)){
                            var bookingElement=cookie.lireCookie(nom);
                            var splitCookie=bookingElement.split(':');
                            var cartTextElement='{"reserveable_type":"'+splitCookie[0]+'","reserveable_id":"'+splitCookie[1]+'","started_at":"'+splitCookie[2]+'","ended_at":"'+splitCookie[3]+'"}';
                            var element=JSON.parse(cartTextElement);
                            this.form.elementReserver.push(element);
                        }
                    }
                }
            },
            clearBookingElement(){
                if(cookie.existenceCookies('nbreReservation')) {
                    var nbre=parseInt(cookie.lireCookie('nbreReservation'));

                    for(var i=1;i<=nbre;i++){
                        var nom='reservation'+i;
                        if(cookie.existenceCookies(nom)){
                            cookie.supprimerCookies(nom)
                        }
                    }
                    cookie.supprimerCookies('nbreReservation')
                    this.updateBookingElementNumber(0)
                }
            },
            setCrsfToken(){
                this.form._token=$('meta[name="csrf-token"]').attr('content');
            }
        }
    }
</script>

<style scoped>

</style>
