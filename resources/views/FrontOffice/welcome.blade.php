<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/mdb.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/png" href="/img/favicon.png"  />
    <title>Welcome</title>
{{--<style>--}}
    {{--#mdb-preloader{position:fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(255,255,255,0.2);z-index:9998;height:100%;width:100%}--}}
{{--</style>--}}
</head>
<body style="background-color: #F4F4F4;">
{{--<div id="mdb-preloader" class="flex-center">--}}
    {{--<div id="preloader-markup">--}}
    {{--</div>--}}
{{--</div>--}}
<div id="app">
    <en-tete></en-tete>
    <main>
        <about-us></about-us>
        <room></room>
        <facilities></facilities>
        <bedroom></bedroom>
        <unforgettable></unforgettable>
        <top-offers></top-offers>
        <contact-us></contact-us>
    </main>
    <new-booking-form-modal></new-booking-form-modal>
    <show-booking-element-modal></show-booking-element-modal>
    <submit-booking-modal></submit-booking-modal>
    <detail-element-modal></detail-element-modal>
    <authentification-modal></authentification-modal>
    <pied></pied>
</div>
<script src="/js/app.js"></script>
<script>
    $('#cart-modal-ex').on('hidden.bs.modal', function (e) {
        setTimeout(function(){
            $(document.body).css("padding-right",0)
            body.setAttribute("style","padding-right:0;")
            $(document.body).css("background-color","#F4F4F4")
        },500)
    });
    $('#modalSubscriptionForm').on('hidden.bs.modal', function (e) {

        setTimeout(function(){
            $(document.body).css("padding-right",0)
            $(document.body).css("background-color","#F4F4F4")
        },50);
    });
</script>
{{--<script src="/js/preloading.js"></script>--}}
<script src="/js/mdb.min.js"></script>
</body>


</html>
