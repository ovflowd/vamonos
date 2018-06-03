@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
    <script type="application/javascript" src="/js/angular/event.js"></script>
@endsection

@section('content')
    <section class="login" ng-controller="EventController">
        <div class="background"></div>
        <div class="grid-x content">
            <center>
                <div class="cell logo">
                    <img src="/assets/colored_logomark.png" alt="Logo Aplicativo"/>
                    <h1>vamonos</h1>
                </div>
            </center>
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
                    <a ng-href="@{{ loginFacebook() }}">
                        <img src="assets/facebook.png" class="facebook-login" alt="Facebook Login"/>
                    </a>
                </center>
            </div>
        </div>
    </section>
@endsection