<html data-ng-app="App">
<head>
    <title>Makkah - ease and horripilent</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body ng-controller="AppController">
<section class="web-app">
    @yield('content')
</section>
<script type="application/javascript" src="/js/vendor.js"></script>
<script type="application/javascript" src="/js/foundation.js"></script>

<script type="application/javascript">
    jQuery(document).foundation();

    angular.module("App", ['ui.router', 'ngStorage']);
</script>

<script type="application/javascript" src="/js/angular/home.js"></script>
</body>
</html>