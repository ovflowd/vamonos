<!DOCTYPE html>
<html data-ng-app="App">
<head>
    <meta charset="utf-8">
    <title>Makkah - ease and horripilent</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('styles')
</head>
<body ng-controller="AppController">
<section class="web-app">
    @yield('content')
</section>
<script type="application/javascript" src="/js/vendor.js"></script>
<script type="application/javascript" src="/js/foundation.js"></script>
<script type="application/javascript">
    jQuery(document).foundation();

    angular.module("App", ['ui.router', 'ngStorage', @yield('angular')]);
</script>
<script type="application/javascript" src="/js/angular/app.js"></script>
@yield('scripts')
</body>
</html>