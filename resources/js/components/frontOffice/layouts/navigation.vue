<template>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark special-color fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#" style="background-color: white"><img src="/img/overlays/hotel_capb_5_avec_trone.png" width="100px" height="50px" border="0"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#about" data-offset="100">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#salles" data-offset="100">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#room" data-offset="100">Bedroom</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#reservation" data-offset="100">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery" data-offset="100">Gallery</a>
                    </li>
                </ul>
                <!-- Social Icon  -->
                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item">
                        <a @click="loadBookingElement()" class="nav-link dark-grey-text font-weight-bold badge1" href="#" data-toggle="modal" :data-badge=bookingElementNumber data-target="#cart-modal-ex">
                            <i class="fa fa-shopping-cart white-text" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#modalSubscriptionForm" data-offset="100">My Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</template>

<script>
    import Vuex from "vuex";
    import {shared} from "../../../app";

    export default {
        name: "navigation",
        data(){
            return {

            }
        },
        computed:{
            ...Vuex.mapGetters(['bookingElementNumber']),

        },
        methods:{
            ...Vuex.mapActions(['updateBookingElementNumber']),
            loadBookingElement:()=>{
                shared.$emit('loadBooked');
                setTimeout(function(){
                $(document.body).css("padding-right",0)
                $(document.body).css("background-color","#F4F4F4")
                },2000)


            }
        },
    }
</script>

<style scoped>
    .badge1 {
        position:relative;
    }
    .badge1[data-badge]:after {
        content:attr(data-badge);
        position:absolute;
        top:0px;
        right:0px;
        font-size:.7em;
        background:red;
        color:white;
        width:18px;height:18px;
        text-align:center;
        line-height:18px;
        border-radius:50%;
        box-shadow:0 0 1px #333;
    }
</style>
