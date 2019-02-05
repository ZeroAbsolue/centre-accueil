<template>
    <div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Sign In</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form @submit.prevent="login">

                    <div class="card">

                        <div class="card-body mx-4">
                            <!--Body-->
                            <div class="md-form form-sm">
                                <input type="text" v-model="form.email" id="Form-email1" @keydown="form.errors.clear('email')" required class="form-control" >
                                <label for="Form-email1">Your email</label>

                            </div>

                            <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('email')" v-text="form.errors.get('email')"></span>
                            <span class="red-text ml-5" style="font-size: .875em" v-if="form.errors.has('password')" v-text="form.errors.get('password')"></span>

                            <div class="md-form form-sm">
                                <input type="password" v-model="form.password" @keydown="form.errors.clear('password')" id="Form-pass1" required  class="form-control">
                                <label for="Form-pass1">Your password</label>
                                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1"> Password?</a></p>

                            </div>

                            <div class="text-center mb-3">
                                <button type="submit" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
                            </div>

                        </div>

                    </div>
                    <!--/Form without header-->
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {Form} from "../../../Form";
    export default {
        name: "AuthentificationModal",
        data() {
            return{
            form : new Form({
                _token:$('meta[name="csrf-token"]').attr('content'),
                email:'',
                password:'',
            })
            }
        },
        methods:{
            login(){
                this.setCrsfToken()
                this.form.post('/login')
                    .then(response=>{
                        window.location.replace("/Admin");
                        toastr.info("Succes de l'authentification");
                    })
                    .catch(error=>{
                        console.log(error)
                        toastr.error("Vérifier vos informations svp");
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
