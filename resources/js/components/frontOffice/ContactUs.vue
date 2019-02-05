<template>
    <!--Section: Reservation-->
    <section id="reservation"  class="mb-1 pt-3 pb-5 wow fadeIn container" data-wow-delay="0.2s">

        <div class="divider-new">
            <h5 class="text-center text-uppercase font-weight-bold spacing my-5 ">
                <strong>Contact</strong>
            </h5>
        </div>
        <!--Grid row-->
        <div class=" row">
            <div class="col-md-7 view"  style="background-image: url('/img/Photos/Others/images/best-contact-us-pages-2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">

            </div>

            <div class="col-md-5 card">
                <form @submit.prevent="reservationSubmit">

                    <div class="md-form mb-3">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" v-model="form.name" @keydown="form.errors.clear('name')" id="form34" required class="form-control validate">
                        <label for="form34">Your name</label>
                        <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>

                    </div>

                    <div class="md-form mb-3">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" @keydown="form.errors.clear('email')" v-model="form.email" id="form29" required class="form-control validate">
                        <label  for="form29">Your email</label>
                        <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>

                    </div>



                    <div class="md-form mb-3">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="tel" @keydown="form.errors.clear('phone')" v-model="form.phone" id="form32" required class="form-control validate">
                        <label  for="form32">Phone</label>
                        <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('phone')" v-text="form.errors.get('phone')"></span>

                    </div>



                    <div class="md-form">
                        <i class="fa fa-pencil prefix grey-text"></i>
                        <textarea type="text" @keydown="form.errors.clear('message')" v-model="form.message" id="form8" class="md-textarea required form-control" rows="4"></textarea>
                        <label data-error="wrong" data-success="right" for="form8">Your message</label>
                    </div>

                    <div class="float-right">
                        <button class="btn btn-info" :disabled="form.errors.any()">Send <i class="fa fa-paper-plane-o ml-1"></i></button>

                    </div>

                </form>
            </div>
        </div>
        <!--Grid row-->

    </section>
    <!--/Section: Reservation-->
</template>

<script>
    import {Form} from "../../Form";
    export default {
        name: "ContactUs",
        data(){
            return {
                form : new Form({
                    name:'',
                    email:'',
                    phone:'',
                    message:'',
                    _token:''
                })
            }
        },
        methods:{
            reservationSubmit(){
                this.setCrsfToken()
                this.form.post('/message')
                    .then(response=>{
                        toastr.info('Message envoyé. Vous receverez une reponse par mail');
                    })
                    .catch(error=>{
                        console.log(error)
                    })
            },
            setCrsfToken(){
                this.form._token=$('meta[name="csrf-token"]').attr('content');
            }
        }
    }
</script>

<style scoped>

</style>
