<template>
    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Centre Accueil Polyvalent Banka</p>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">

                <!-- Dropdown -->
                <li class="nav-item dropdown dropleft notifications-nav">
                    <a class="nav-link dropdown-toggle waves-effect"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <span class="badge red" v-text="numberOfUnReadNotification"></span> <i class="fa fa-bell"></i>
                        <span class="d-none d-md-inline-block">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-info" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" v-if="hasElement()" href="#" v-for="notification in unreadNotification" data-toggle="modal" @click="emit(notification)" data-target="#showNotificationModal">
                            <i class="fa fa-comment-o mr-2" aria-hidden="true" v-if="isMessage(notification.data.object)"></i>
                            <i class="fa fa-address-book mr-2" aria-hidden="true" v-else></i>
                            <span v-text="notification.data.object"></span>
                            <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ notification.created_at | moment("calendar")}}</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--Main Navigation-->
</template>

<script>
    import Vuex from "vuex";
    import {shared} from "../../../../app";

    export default {
        name: "enTete",
        data(){
            return {
                unreadNotification:[]
            }
        },
        watch:{
            listOfUnReadNotification:function (newElement,oldElement) {
                this.unreadNotification = JSON.parse(JSON.stringify(newElement));
            }
        },
        computed:{
            ...Vuex.mapGetters([
                'listOfNotification',
                'listOfUnReadNotification',
                'listOfReadNotification',
                'numberOfUnReadNotification',
                'numberOfReadNotification'
            ]),

        },
        methods: {
            ...Vuex.mapActions([
                'loadListOfNotification',
            ]),
            isMessage:function (element) {
                return element.includes('Message')
            },
            hasElement:function (object) {
                return this.unreadNotification.length >0
            },
            emit:function(notification){
                shared.$emit('showNotification', notification);
                axios.put('/notification/'+notification.id).then(response=>{
                    this.loadListOfNotification();
                });

            }
        },

        created:function () {
            this.loadListOfNotification();
        }
    }
</script>

<style scoped>

</style>
