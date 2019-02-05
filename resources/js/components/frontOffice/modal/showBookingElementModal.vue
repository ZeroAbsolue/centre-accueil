<template>
    <div  class="modal fade cart-modal" id="cart-modal-ex" tabindex=-1 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
        <div class="modal-dialog modal-lg" role="document">
            <div class=modal-content>
                <div class=modal-header>
                    <i class="fa fa-cart-arrow-down fa-3x animated rotateIn mb-1"></i>
                    <h4 class="modal-title font-weight-bold white-text ml-2" id=myModalLabel>Your cart</h4>
                    <button type=button class=close data-dismiss=modal aria-label=Close>
                        <span aria-hidden=true>&times;</span>
                    </button>
                </div>
                <div class=modal-body>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Start Date</th>
                            <th>Ending Date</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(item,index) in elementReserver ">
                            <th scope=row><img class="img-fluid rounded" :src="item.image" width=100px height=50px alt="Card image cap"></th>
                            <td v-text=item.name></td>
                            <td v-text=item.startDate></td>
                            <td v-text=item.endDate></td>
                            <td>
                                <a @click=deleteBookingElement(index)>
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class=modal-footer>
                    <button @click="launchSubmitModal" v-if="bookingElementNumber>0" type=button class="btn btn-green btn-rounded btn-sm" data-dismiss=modal>Finaliser</button>
                    <button type=button class="btn btn-grey btn-rounded btn-sm" data-dismiss=modal>Fermer</button>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import {shared} from "../../../app";
    import * as cookie from "../../../Cookie";
    import Vuex from "vuex";

    export default {
        name: "showBookingElementModal",
        data(){
            return {
                elementReserver:{}
            }
        },
        computed:{
            ...Vuex.mapGetters(['bookingElementNumber','listOfRoom']),

        },
        created(){
            shared.$on('loadBooked',()=>{
                this.fetchBookingElement()
            })
            shared.$on('clearElementReserver',()=>{
                this.elementReserver = []
            })
        },
        methods:{
            ...Vuex.mapActions(['updateBookingElementNumber']),

            fetchBookingElement:function(){

                if(cookie.existenceCookies('nbreReservation')) {
                    this.elementReserver=[];
                    var nbre=parseInt(cookie.lireCookie('nbreReservation'));

                    for(var i=1;i<=nbre;i++){
                        var nom='reservation'+i;
                        if(cookie.existenceCookies(nom)){
                            var bookingElement=cookie.lireCookie(nom);
                            var splitCookie=bookingElement.split(':');
                            var cartTextElement='{"name":"'+splitCookie[0]+'","id":"'+splitCookie[1]+'","startDate":"'+splitCookie[2]+'","endDate":"'+splitCookie[3]+'","image":"'+splitCookie[4]+'"}';
                            var element=JSON.parse(cartTextElement);
                            this.elementReserver.push(element);}
                    }
                }
            },
            launchSubmitModal(){
                $('#modalSubmitForm').modal('show');
            },

            deleteBookingElement(elementAsupprimer){
                var  elementReserverASupprimer = elementAsupprimer+1;
                var nom='reservation'+elementReserverASupprimer;
                cookie.supprimerCookies(nom);
                var nbre=parseInt(cookie.lireCookie('nbreReservation'));
                for(var i=elementReserverASupprimer;i<=nbre;i++){
                    var j=i+1;var nomProchainCookie='reservation'+j;
                    var nomNouveau='reservation'+i;
                    if(cookie.existenceCookies(nomProchainCookie)){
                        cookie.creerCookies(nomNouveau,cookie.lireCookie(nomProchainCookie),1);
                    }
                }
                if(nbre>0){
                    nbre=nbre-1;
                }else{
                    nbre=0;
                }
                cookie.creerCookies('nbreReservation',nbre,1);
                this.updateBookingElementNumber(nbre)
                this.elementReserver.splice(elementAsupprimer,1);
            }
        }
    }
</script>

<style scoped>

    body{
        padding-right: 0;
    }
</style>
