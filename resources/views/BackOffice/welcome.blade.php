<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 07:51:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Centre d'Accueil Polyvalent de Banka</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/img/favicon.png"  />
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/mdb_admin.min.css" rel="stylesheet">

    <style>
        #mdb-preloader{position:fixed;top:0;left:0;right:0;bottom:0;background-color:rgba(255,255,255,0.2);z-index:9998;height:100%;width:100%}
    </style>
</head>

<body class="white-skin">

<div id="app">

    <back-office-header></back-office-header>
    <main>
        <back-office-dashboard></back-office-dashboard>
    </main>
    <back-office-footer></back-office-footer>
    <back-office-show-notification-modal></back-office-show-notification-modal>

</div>

<script src="/js/app.js"></script>
<script type="text/javascript" src="/js/mdb_admin.min.js"></script>
<script type="text/javascript" src="/js/underscore.js"></script>
<script>


    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

</script>
</body>


<!-- Mirrored from mdbootstrap.com/previews/templates/admin-dashboard/html/dashboards/v-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Aug 2018 07:51:51 GMT -->
</html>

