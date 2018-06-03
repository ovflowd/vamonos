@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
    <script type="application/javascript" src="/js/angular/event.js"></script>
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            let js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0&appId=984964424940180&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection

@section('content')
    <section class="login" ng-controller="EventController">
        <div class="background"></div>
        <div class="grid-x content">
            <div class="cell logo">
                <img src="/assets/colored_logomark.png" alt="Logo Aplicativo"/>
                <h1>vamonos</h1>
            </div>
            <div class="cell text">
                <p class="text-center">
                    Buscamos os melhores lugares para o seu evento acontecer
                </p>
                <p class="text-center">
                    Acessar
                </p>
            </div>
            <div class="cell">
                <center>
                    <div class="fb-login-button" data-width="264" data-max-rows="1" data-size="large"
                         data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false"
                         data-use-continue-as="false" onlogin="redirectUser()"></div>
                </center>
            </div>
        </div>
    </section>
@endsection