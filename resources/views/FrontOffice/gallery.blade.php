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
    <title>Gallery</title>
</head>
<body style="background-color: #F4F4F4;">
<div id="app">
    <en-tete></en-tete>
    <gallery></gallery>
    <pied></pied>

</div>
<script src="/js/app.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/mdb.min.js"></script>

</body>
</html>
