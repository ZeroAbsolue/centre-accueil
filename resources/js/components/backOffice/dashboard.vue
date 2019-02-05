<template>

    <div>
        <div class="container">

            <!--Section: Intro-->
            <section class="mt-lg-5 ">

                <!--Grid row-->
                <div class="row mt-3">

                    <!--Grid column-->
                    <div class="col-xl-4  col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade cascading-admin-card">

                            <!--Card Data-->
                            <div class="admin-up">
                                <i class="fa fa-money primary-color"></i>
                                <div class="data">
                                    <p>En attente</p>
                                    <h4 class="font-weight-bold dark-grey-text" v-text="numberOfUnValidatedReservation"></h4>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--Text-->
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade cascading-admin-card">

                            <!--Card Data-->
                            <div class="admin-up">
                                <i class="fa fa-line-chart warning-color"></i>
                                <div class="data">
                                    <p>RÉSERVATION</p>
                                    <h4 class="font-weight-bold dark-grey-text" v-text="numberOfReservation"></h4>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar red accent-2" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--Text-->
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card card-cascade cascading-admin-card">

                            <!--Card Data-->
                            <div class="admin-up">
                                <i class="fa fa-bar-chart red accent-2"></i>
                                <div class="data">
                                    <p>Confirmer</p>
                                    <h4 class="font-weight-bold dark-grey-text" v-text="numberOfConfirmedReservation"></h4>
                                </div>
                            </div>
                            <!--/.Card Data-->

                            <!--Card content-->
                            <div class="card-body">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!--Text-->
                            </div>
                            <!--/.Card content-->

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Intro-->

            <div style="height: 5px"></div>

            <!--Section: Main panel-->
            <section class="mb-5">

                <!--button section-->
                <section class="ml-5" >

                    <button type="button" @click="state = 0" class="btn btn-elegant btn-rounded">All</button>
                    <button type="button" @click="state = 7" class="btn btn-danger btn-rounded  ">Proche</button>
                    <button type="button" @click="state = 4" class="btn btn-success btn-rounded ">Confirmer</button>
                    <button type="button" @click="state = 1" class="btn btn-deep-purple btn-rounded ">En attente</button>
                    <button type="button" @click="state = 2" class="btn btn-primary btn-rounded  ">Valider</button>
                    <button type="button" @click="state = 3" class="btn btn-indigo btn-rounded ">Annuler</button>
                    <!--<button type="button" @click="state = 5" class="btn btn-warning btn-rounded ">Supprimer</button>-->
                    <!--<button type="button" @click="state = 6" class="btn btn-info btn-rounded  ">Dépassé</button>-->
                    <input type="text" v-model="search" placeholder="search or yyyy-mm-dd " @keydown.enter="searchValue"/>
                </section>
                <!--button section-->

                <!--Section: Table-->
                <section class="mb-5">
                    <div class="card card-cascade narrower z-depth-0 mb-5">

                        <!--Card image-->
                        <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">
                            <a href="#" class="white-text mx-3">Liste des reservations</a>
                        </div>
                        <!--/Card image-->

                        <!-- Section: Custom table -->
                        <section class="table-responsive">
                            <table id="myTable" class="table table-hover table-striped display table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="th-sm">Name
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Phone
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <!--<th class="th-sm">Email-->
                                    <!--<i class="fa fa-sort float-right" aria-hidden="true"></i>-->
                                    <!--</th>-->
                                    <th class="th-sm">Reservation
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Date_debut
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Date_Fin
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Etat
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                    <th class="th-sm">Option
                                        <i class="fa fa-sort float-right" aria-hidden="true"></i>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(reservation,index) in paginatedData" >
                                    <td >{{reservation.user.name}}</td>
                                    <td v-text="reservation.user.phone"></td>
                                    <!--<td v-text="reservation.user.email"></td>-->
                                    <td v-text="reservation.reserveable.name"></td>
                                    <td > {{ reservation.started_at | moment("calendar") }}</td>
                                    <td >{{ reservation.ended_at | moment("calendar") }}</td>
                                    <td>{{reservation.state.name}}</td>
                                    <td>
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle btn-floating btn-sm blue-gradient">
                                            <i class="fa fa-cogs"></i>
                                        </button>

                                        <div class="dropdown-menu">
                                            <a v-for="state in listOfState" class="dropdown-item" @mouseover="form.reservation=reservation" @click="updateReservationState(state)">{{state.name}}</a>
                                        </div>

                                        <button type="button" class="btn-success btn-sm btn-floating" @click="element = reservation " data-toggle="modal" data-target="#modalMessage">  <i class="fa fa-envelope"></i></button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="paginate">
                                <button @click="prevPage" :disabled="0 == pageNumber" class="btn btn-outline-info  waves-effect mr-5 ml-5">
                                    Previous
                                </button>
                                <span>Page {{ pageCount >= 1 ? pageNumber + 1 : pageNumber}} sur {{pageCount}}</span>
                                <button @click="nextPage" :disabled="(pageNumber+1) == pageCount" class="btn btn-outline-info  waves-effect ml-5">
                                    Next
                                </button>
                            </div>
                        </section>
                        <!-- Section: Custom table -->

                    </div>
                </section>
                <!--Section: Table-->



                <!--Card-->
                <div class="card card-cascade narrower">


                    <!--Section: Chart-->
                    <section>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-xl-5 col-lg-12 mr-0">

                                <!--Card image-->
                                <div class="view gradient-card-header light-blue lighten-1">
                                    <h2 class="h2-responsive mb-0">Réservation</h2>
                                </div>
                                <!--/Card image-->

                                <!--Card content-->
                                <div class="card-body pb-0">

                                    <!--Panel data-->
                                    <div class="row card-body pt-3">

                                        <!--First column-->
                                        <div class="col-md-6">

                                            <!--Date select-->
                                            <p class="lead "><span class="badge info-color p-2">Période</span></p>
                                            <div class="dropdown ">
                                                <a class="dropdown-toggle black-text" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-text="periode"></a>

                                                <div class="dropdown-menu dropdown-info" >
                                                    <span class="dropdown-item"  type="button" @click="filterFor(0,'Today')">Today</span>
                                                    <span class="dropdown-item"  type="button" @click="filterFor(1,'Yesterday')">Yesterday</span>
                                                    <span class="dropdown-item"  type="button" @click="filterFor(7,'Last 7 days')">Last 7 days</span>
                                                    <span class="dropdown-item"  type="button" @click="filterFor(30,'Last 30 days')">Last 30 days</span>
                                                    <span class="dropdown-item"  type="button" @click="filterFor(-1,'All')">All</span>
                                                </div>
                                            </div>


                                            <!--Date pickers-->
                                            <p class="lead mt-5"><span class="badge info-color p-2">Date personnalisé</span></p>
                                            <br>
                                            <form >
                                                <div class="md-form">
                                                    <span for="date-picker-example">From</span>
                                                    <input placeholder="Selected date" v-model="form.from" type="date" required class="form-control">

                                                </div>
                                                <div class="md-form">
                                                    <span for="date-picker-example">To</span>
                                                    <input placeholder="Selected date" :min="form.from" v-model="form.to"  type="date" id="to" required class="form-control">

                                                </div>

                                                <span class="badge red accent-2 p-2 btn" @click="filterForPeriod()">Afficher <i class="fa fa-arrow-circle-up ml-1"></i></span>
                                            </form>

                                        </div>
                                        <!--/First column-->
                                    </div>
                                    <!--/Panel data-->

                                </div>
                                <!--/.Card content-->

                            </div>

                            <!--Grid column-->
                            <div class="col-xl-7 col-lg-12 mb-4">

                                <!--Card image-->
                                <div class="view gradient-card-header blue-gradient">

                                    <!-- Chart -->
                                    <canvas id="lineChart" height="175"></canvas>
                                    <!--Second column-->

                                    <!--Summary-->
                                    <p>Total réservation: <strong v-text="totalPeriodReservation"></strong>
                                        <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip" data-placement="top" title="Total sales in the given period"><i class="fa fa-question"></i></button>
                                    </p>


                                    <!--/Second column-->

                                </div>
                                <!--/Card image-->

                            </div>
                            <!--Grid column-->
                            <!--Grid column-->
                            <!--Canevas de pieChart-->
                            <!--<div class="col-xl-7 col-lg-12 mb-4">-->

                            <!--&lt;!&ndash;Card image&ndash;&gt;-->
                            <!--<div class="view">-->

                            <!--&lt;!&ndash; Chart &ndash;&gt;-->
                            <!--<canvas id="pieChart" height="100"></canvas>-->
                            <!--</div>-->
                            <!--</div>-->
                            <!--Canevas de pieChart-->
                        </div>
                        <!--Grid row-->

                    </section>
                    <!--Section: Chart-->



                    <!--section vue mdb datatable-->
                    <!--section vue mdb datatable-->

                </div>
                <!--/.Card-->
                <!-- Modal: modalAbandonedCart-->
                <div class="modal fade right" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true" data-backdrop="false">
                    <div class="modal-dialog modal-notify modal-info" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Header-->
                            <div class="modal-header">
                                <p class="heading">Send Message
                                </p>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" class="white-text">&times;</span>
                                </button>
                            </div>

                            <!--Body-->
                            <div class="modal-body">
                                <form>

                                    <div class="row">
                                        <div class="md-form col-11">
                                            <input type="text" :value="element.user.email"  id="form30" required class="form-control validate">
                                            <label  for="form30">Email</label>
                                            <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="md-form col-11 mb-3">
                                            <input type="text"  id="form29" required class="form-control validate">
                                            <label  for="form29">Subject</label>
                                            <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="md-form col-11">
                                            <textarea type="text"  id="form8" class="md-textarea required form-control" rows="4"></textarea>
                                            <label data-error="wrong" data-success="right" for="form8">Your message</label>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <a type="button" class="btn btn-info">Save</a>
                                <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancel</a>
                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!-- Modal: modalAbandonedCart-->
            </section>
            <!--Section: Main panel-->
        </div>


    </div>
</template>

<script>
    import Vuex from "vuex";
    import {Form} from "../../Form";
    import Chart from 'chart.js';
    import {shared} from "../../app";

    export default {
        name: "dashboard",
        data(){
            return{
                // Paginator data
                pageNumber: 0,
                size:10,

                //Search
                search:'',
                element:
                    {
                        user:
                            {
                                id: 91,
                                name: "ghjhg",
                                email: "asdasdas@sdfsdfsd.cmom",
                                phone: "123456",
                                email_verified_at: null,
                            }

                    },

                state:1000,
                chartLabels:[],
                chartValue:[],
                chartTraiteur:[],
                nbreNonValider:0,
                nbreValider:0,
                nbreConfirmer:0,
                nbreAnnuler:0,
                periode:"Select a period",
                periodReservation:[],
                resource:{},
                form : new Form({
                    _token:$('meta[name="csrf-token"]').attr('content'),
                    reservation:{},
                    state:0,
                    from:'',
                    to:'',
                }),


            }
        },
        watch:{
            state:function(newElement,lastElement){
                this.updatePeriodeReservation(newElement)
            },
            element:function(newElement,lastElement){
                this.element = newElement
            },
            search:function(newElement,lastElement){
                if(newElement != lastElement){
                    if(newElement.length == 0 ){
                        this.periodReservation = this.listOfReservation
                        this.chartTraitement();
                    }
                }
            },
            listOfUnValidatedReservation:function(newElement,lastElement){
                this.updateOnWatch(newElement,1)
            },
            listOfValidatedReservation:function(newElement,lastElement){
                this.updateOnWatch(newElement,2)
            },
            listOfConfirmedReservation:function(newElement,lastElement){
                this.updateOnWatch(newElement,4)
            },
            listOfCanceledReservation:function(newElement,lastElement){
                this.updateOnWatch(newElement,3)
            },
            listOfDeletedReservation:function(newElement,lastElement){
                this.updateOnWatch(newElement,5)
            },
            numberOfUnValidatedReservation:function(newElement,lastElement){
                if(newElement != lastElement){
                    this.nbreNonValider= newElement
                    // this.pieChart()
                }
            },
            numberOfValidatedReservation:function(newElement,lastElement){
                if(newElement != lastElement){
                    this.nbreValider= newElement
                    // this.pieChart()
                }
            },
            numberOfConfirmedReservation:function(newElement,lastElement){
                if(newElement != lastElement){
                    this.nbreConfirmer= newElement
                    // this.pieChart()
                }
            },
            numberOfCanceledReservation:function(newElement,lastElement){
                if(newElement != lastElement){
                    this.nbreAnnuler= newElement
                    // this.pieChart()
                }
            },
        },
        computed:{
            ...Vuex.mapGetters([
                'bookingElementNumber',

                'listOfRoom',
                'listOfBedRoom',
                'listOfReservation',
                'listOfUnValidatedReservation',
                'listOfValidatedReservation',
                'listOfConfirmedReservation',
                'listOfCanceledReservation',
                'listOfDeletedReservation',
                'listOfProcheReservation',

                'numberOfReservation',
                'numberOfUnValidatedReservation',
                'numberOfValidatedReservation',
                'numberOfConfirmedReservation',
                'numberOfCanceledReservation',
                'numberOfDeletedReservation',

                'listOfState'

            ]),

            totalPeriodReservation:function(){
                return this.periodReservation.length
            },

            //Pagination computed property
            pageCount(){
                let l = this.periodReservation.length,
                    s = this.size;
                return Math.ceil(l/s);
            },

            paginatedData(){
                const start = this.pageNumber * this.size,
                    end = start + this.size;
                return this.periodReservation.slice(start, end);
            }
            //Pagination computed property


        },
        methods:{
            ...Vuex.mapActions([
                'loadListOfReservation',
                'loadListOfState',
            ]),
            searchValue:function(){
                this.periodReservation = this.listOfReservation.filter(reservation =>
                    (reservation.user.name.toUpperCase().includes(this.search.toUpperCase())) ||
                    (reservation.user.phone.toUpperCase().includes(this.search.toUpperCase())) ||
                    (reservation.user.email.toUpperCase().includes(this.search.toUpperCase())) ||
                    (reservation.reserveable.name.toUpperCase().includes(this.search.toUpperCase())) ||
                    (reservation.started_at.toUpperCase().includes(this.search.toUpperCase())) ||
                    (reservation.ended_at.toUpperCase().includes(this.search.toUpperCase()))

                )
                this.chartTraitement();
            },
//Affichage des informations des utilisateurs
            showInformation:function(reservation){
                alert(reservation.id)
            },
            // Pagination function
            nextPage(){
                if(this.pageNumber < this.pageCount){
                    this.pageNumber++;
                }
            },
            prevPage(){
                if(0 < this.pageNumber){
                    this.pageNumber--;
                }
            },
            // Pagination function

            filterFor:function(numberOfDay,periode){
                var today = new Date();
                var startDay = new Date();
                if(numberOfDay == -1){
                    this.periodReservation= this.listOfReservation;

                }else{
                    startDay.setDate(today.getDate()-numberOfDay);
                    this.periodReservation= this.listOfReservation.filter(reservation=>( startDay <= (new Date(reservation.created_at))) && ((new Date(reservation.created_at)) <= (today)) );
                }

                this.chartTraitement();
                this.periode = periode;
            },
            filterForPeriod(){
                var begin = new Date(this.form.from);
                var end = new Date(this.form.to);
                this.periodReservation = this.listOfReservation.filter(reservation=> (begin <= (new Date(reservation.created_at))) && ((new Date(reservation.created_at)) <= end) );
                this.chartTraitement();
                this.dataTableTraitement()

            },

            updateReservationState:function (state) {

                this.form.reservation.state_id = state.id;
                this.form.put('/reservation/'+ this.form.reservation.id)
                    .then(response=>{
                        this.loadListOfReservation()
                        toastr.success('Etat modifié avec succes');
                    }).catch(error=>{
                    console.log(error)
                })

            },
            updatePeriodeReservation:function(newElement){
                if(newElement == 0){
                    this.periodReservation = []
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfReservation))
                }
                else if(newElement == 1){
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfUnValidatedReservation))
                }
                else if(newElement == 2){
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfValidatedReservation))
                }else if(newElement == 3){
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfCanceledReservation))
                }else if(newElement == 4){
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfConfirmedReservation))
                }else if(newElement == 5){
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfDeletedReservation))
                }else if(newElement == 6){
                }else if(newElement == 7){
                    this.periodReservation = JSON.parse(JSON.stringify(this.listOfProcheReservation))

                }
                this.chartTraitement();
                // this.pieChart()
                this.pageNumber = 0
                this.paginatedData
            },
            updateOnWatch(newElement,state_id){
                if(this.state == state_id){
                    this.periodReservation = JSON.parse(JSON.stringify(newElement))
                    this.chartTraitement();
                    this.pageNumber = 0
                    this.paginatedData
                    // this.pieChart()
                }

            },
            pieChart(){
                var ctxP = document.getElementById("pieChart").getContext('2d');
                var myPieChart = new Chart(ctxP,{
                    type: 'pie',
                    data: {
                        datasets:[{
                            data: [this.nbreNonValider, this.nbreValider, this.nbreConfirmer, this.nbreAnnuler],
                            backgroundColor: ["#F7464A", "#46BFBD", "#949FB1", "#4D5360"],
                            hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#A8B3C5", "#616774"]
                        }],
                        labels: ['En attente', 'Valider', 'Confirmer', 'Annuler']
                    },

                    options: {
                        responsive: true
                    }
                });
            },
            chart(){
                // Small chart
                $(function () {
                    $('.min-chart#chart-sales').easyPieChart({
                        barColor: "#FF5252",
                        onStep: function (from, to, percent) {
                            $(this.el).find('.percent').text(Math.round(percent));
                        }
                    });
                });
                //Main chart
                var ctxL = document.getElementById("lineChart").getContext('2d');
                var myLineChart = new Chart(ctxL, {
                    type: 'line',
                    data: {
                        labels: this.chartLabels,
                        datasets: [{
                            label: "Reservation",
                            fillColor: "#fff",
                            backgroundColor: 'rgba(255, 255, 255, .3)',
                            borderColor: 'rgba(255, 99, 132)',
                            data: this.chartValue,
                        }]
                    },
                    options: {
                        legend: {
                            labels: {
                                fontColor: "#fff",
                            }
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    display: true,
                                    color: "rgba(255,255,255,.25)"
                                },
                                ticks: {
                                    fontColor: "#fff",
                                    beginAtZero:true
                                },
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                    display: true,
                                    color: "rgba(255,255,255,.25)"
                                },
                                ticks: {
                                    fontColor: "#fff",
                                    beginAtZero:true
                                },
                            }],
                        }
                    }
                });
            },
            chartTraitement:function(){
                this.chartTraiteur = _.groupBy(this.periodReservation,(item)=>(new Date(item.created_at).toLocaleDateString()));
                this.chartLabels=[];
                this.chartValue=[];
                for(let element in this.chartTraiteur){
                    this.chartLabels.push(''+element+'');
                    this.chartValue.push(this.chartTraiteur[''+element+''].length);
                }
                this.chart();
            },

        },
        mounted:function () {

            this.loadListOfReservation();
            this.loadListOfState();
            axios.get('/reservation').then(response=>{
                this.periodReservation =  response.data;//recuperation des différents valeurs des reservation
                this.chartTraitement()
                // this.pieChart()

            });
        },

    }
</script>

<style scoped>
    .paginate {
        padding-left:30%;
    }
</style>
