<template>

    <div class="modal fade right" id="showNotificationModal" tabindex="-1" role="dialog" aria-labelledby="showNotificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showNotificationModalLabel" v-text="notification.data.object"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p><strong class="text-dark">User Information</strong></p>
                    name:{{notification.data.data.user.name}}<br>
                    phone:{{notification.data.data.user.phone}}<br>
                    email:{{notification.data.data.user.email}}<br>

                    <div v-if="isMessage(notification.data.object)">
                        <p>{{notification.data.data.content}}</p>
                    </div>
                    <div v-else>
                        <p><strong class="text-dark">Element reservé</strong>: {{notification.data.data.reserveable_type}}</p>
                        <p><strong>Nom</strong>: {{notification.data.data.reserveable.name}}</p>
                        <p><strong>Date debut </strong>: {{notification.data.data.started_at}}</p>
                        <p><strong>Date fin </strong>: {{notification.data.data.ended_at}}</p>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</template>

<script>
    import {shared} from "../../../app";
    export default {
        name: "showNotification",
        data(){
            return {
                notification: {
                    "id":"",
                    "type":"",
                    "notifiable_type":"",
                    "notifiable_id":0,
                    "data":{
                        "object":"",
                        "data":{
                            "id":0,
                            "reserveable_type": "",
                            "reserveable_id":0,
                            "reserveable":{
                                "id":0,
                                "name":"",
                                "description":"",
                                "area":"",
                            },
                            "user":{
                                "id":0,
                                "name":"",
                                "email":"",
                                "phone":"",
                            },
                            "state":{
                                "id":0,
                                "name":"",
                            }
                        }
                    },
                }
            }
        },
        created:function(){
            shared.$on('showNotification', (element) => {
                this.notification = element
            });
        },
        methods:{
            isMessage:function (object) {
                return object.includes('Message')
            },
        }
    }
</script>

<style scoped>

</style>