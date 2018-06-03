@extends('layouts.app')

@section('angular')'page.home'@endsection

@section('scripts')
<script type="application/javascript" src="/js/angular/home.js"></script>
@endsection

@section('content')
    <section class="home" ng-controller="HomeController">
        <div class="background"></div>
        <div class="grid-x">
            <div class="cell content">
                <h2 class="text-center">
                    O que você pretente fazer hoje?
                </h2>
                <input class="float-center" type="text" ng-model="searchFriends" placeholder="Ex: jogar futebol com os amigos"/>
                <a class="search-button button small float-center">Criar evento</a>
            </div>
        </div>
    </section>
@endsection