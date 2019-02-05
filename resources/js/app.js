/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');


import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(require('vue-moment'));


Vue.use(Vuex)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/frontOffice/ExampleComponent.vue').default);

//Front Office Component

Vue.component('enTete', require('./components/frontOffice/layouts/enTete').default);
Vue.component('pied', require('./components/frontOffice/layouts/pied').default);
Vue.component('navigation', require('./components/frontOffice/layouts/navigation').default);
Vue.component('caroussel', require('./components/frontOffice/layouts/partials/caroussel').default);
Vue.component('about-us', require('./components/frontOffice/AboutUs').default);
Vue.component('bedroom', require('./components/frontOffice/Bedroom').default);
Vue.component('room', require('./components/frontOffice/Room').default);
Vue.component('facilities', require('./components/frontOffice/Facilities').default);
Vue.component('top-offers', require('./components/frontOffice/TopOffers').default);
Vue.component('contact-us', require('./components/frontOffice/ContactUs').default);
Vue.component('gallery', require('./components/frontOffice/Gallery').default);
Vue.component('unforgettable', require('./components/frontOffice/Unforgettable').default);
Vue.component('newBookingFormModal', require('./components/frontOffice/modal/newBookingFormModal').default);
Vue.component('showBookingElementModal', require('./components/frontOffice/modal/showBookingElementModal').default);
Vue.component('SubmitBookingModal', require('./components/frontOffice/modal/SubmitBookingModal').default);
Vue.component('DetailElementModal', require('./components/frontOffice/modal/DetailElementModal').default);
Vue.component('AuthentificationModal', require('./components/frontOffice/modal/AuthentificationModal').default);


// Back office component
Vue.component('backOfficeFooter',require('./components/backOffice/layouts/partials/pied').default)
Vue.component('backOfficeHeader',require('./components/backOffice/layouts/partials/enTete').default)
Vue.component('backOfficeDashboard',require('./components/backOffice/dashboard').default)
Vue.component('backOfficeShowNotificationModal',require('./components/backOffice/modal/showNotification').default)


export const shared = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import * as cookie from "../js/Cookie";

const state = {
    bookingElementNumber:cookie.existenceCookies('nbreReservation') ? cookie.lireCookie('nbreReservation'):0,
    rooms:{},
    room:[],
    bedRoom:{},
    reservations:[],
    state:{},
    periodReservation:{},
    notifications:[]
}
const getters = {
    bookingElementNumber:state=>state.bookingElementNumber,
    listOfState:state=>{return state.state},
    listOfRoom:state=> {return state.rooms},

    listOfBedRoom:state=>{return state.bedRoom},

    listOfReservation:state=>{return state.reservations},
    listOfUnValidatedReservation:state=>{return getters.listOfReservation(state).filter(reservation=>reservation.state_id == 1)},
    listOfValidatedReservation:state=>{return getters.listOfReservation(state).filter(reservation=>reservation.state_id == 2)},
    listOfConfirmedReservation:state=>{return getters.listOfReservation(state).filter(reservation=>reservation.state_id == 4)},
    listOfCanceledReservation:state=>{return getters.listOfReservation(state).filter(reservation=>reservation.state_id == 3)},
    listOfDeletedReservation:state=>{return getters.listOfReservation(state).filter(reservation=>reservation.state_id == 5)},
    listOfProcheReservation:state=>{
        var today = new Date()
        return getters.listOfReservation(state).filter(reservation=>((new Date(reservation.started_at))  >= today) ||
            ((new Date(reservation.started_at)).getDate()  == today.getDate()))
    },

    numberOfReservation:state=>{return getters.listOfReservation(state).length},
    numberOfUnValidatedReservation:state=>{return getters.listOfUnValidatedReservation(state).length},
    numberOfValidatedReservation:state=>{return getters.listOfValidatedReservation(state).length},
    numberOfConfirmedReservation:state=>{return getters.listOfConfirmedReservation(state).length},
    numberOfCanceledReservation:state=>{return getters.listOfCanceledReservation(state).length},
    numberOfDeletedReservation:state=>{return getters.listOfDeletedReservation(state).length},

    listOfNotification:state=>{return state.notifications},
    listOfUnReadNotification:state=>{return getters.listOfNotification(state).filter(notification => notification.read_at == null)},
    listOfReadNotification:state=>{return getters.listOfNotification(state).filter(notification => notification.read_at != null)},
    numberOfUnReadNotification:state=>{return getters.listOfUnReadNotification(state).length},
    numberOfReadNotification:state=>{return getters.listOfReadNotification(state).length},


}
const mutations = {
    UPDATE_BOOKING_ELEMENT_NUMBER:(state,value)=>{
        state.bookingElementNumber = value
    },
    FETCH_ROOM_LOAD:(state,value)=>{
        state.rooms = value
    },
    FETCH_BEDROOM_LOAD:(state,value)=>{
        state.bedRoom = value
    },
    FETCH_RESERVATION:(state,value)=>{
        state.reservations = value
    },
    FETCH_STATE:(state,value)=>{
        state.state = value
    },
    FETCH_NOTIFICATION:(state,value)=>{
        state.notifications = value
    },

}
const actions = {
    updateBookingElementNumber:(store,value)=>{
        store.commit('UPDATE_BOOKING_ELEMENT_NUMBER',value)
    },
    loadListOfRoom:(store)=>{
        axios.get('/salle')
            .then((response)=>{
               store.commit('FETCH_ROOM_LOAD',response.data)})
            .catch(function (error) {
                console.log(error);
            })

    },
    loadListOfBedRoom:(store)=>{
        axios.get('/chambre')
            .then((response)=>{
               store.commit('FETCH_BEDROOM_LOAD',response.data)})
            .catch(function (error) {
                console.log(error);
            })

    },
    loadListOfReservation:(store)=>{
        axios.get('/reservation')
            .then((response)=>{
               store.commit('FETCH_RESERVATION',response.data)})
            .catch(function (error) {
                console.log(error);
            })

    },
    loadListOfState:(store)=>{
        axios.get('/state')
            .then((response)=>{
                store.commit('FETCH_STATE',response.data)})
            .catch(function (error) {
                console.log(error);
            })

    },
    loadListOfNotification:(store)=>{
        axios.get('/notification')
            .then((response)=>{
                store.commit('FETCH_NOTIFICATION',response.data)})
            .catch(function (error) {
                console.log(error);
            })

    },

}

const store = new Vuex.Store({
    state: state,
    getters:getters,
    mutations:mutations,
    actions:actions,

})




import axios from 'axios'
axios.defaults.xsrfHeaderName = "X-CSRFToken"
axios.defaults.xsrfCookieName = 'csrftoken'

export default axios
const app = new Vue({
    el: '#app',
    store,
});
