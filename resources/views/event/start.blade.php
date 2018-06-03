@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
<script type="application/javascript" src="/js/angular/event.js"></script>
@endsection

@section('content')
    <section class="start" ng-controller="EventController">
        <div class="background"></div>
        <div class="grid-x">
            <div class="cell content">
                <h2 class="text-center">
                    O que você pretente fazer hoje?
                </h2>
                <input class="float-center" type="text" ng-model="storage.eventName" placeholder="Ex: jogar futebol com os amigos"/>
                <a class="search-button button small float-center" ng-click="createEvent()">Criar evento</a>
            </div>
        </div>
    </section>
@endsection