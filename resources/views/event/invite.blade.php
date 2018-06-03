@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
    <script type="application/javascript" src="/js/angular/event.js"></script>
@endsection

@section('content')
    <section class="invite" ng-controller="EventController">
        <div class="grid-x">
            <div class="cell header">
                <div class="top">
                    <i class="material-icons float-left arrow" ng-click="goBack()">arrow_back</i>
                    <h5 class="text-center"><img src="/assets/white_logomark.png"/> vamonos</h5>
                    <i class="material-icons float-right person">person</i>
                </div>
                <div class="input-holder">
                    <input type="text" class="float-center" placeholder="Encontre os seus amigos"/>
                    <i class="material-icons">apps</i>
                </div>
            </div>
            <div class="cell">
                <div class="grid-x place">
                    <i class="material-icons">place</i>
                    <p>
                        Vamos chamar seus amigos e ir ao "@{{storage.eventName}}"
                    </p>
                </div>
            </div>
            <div class="cell content">
                <small>Recentes procurados</small>
                <ul class="menu vertical friends">
                    <li ng-repeat="(key, friend) in storage.userFriends" ng-click="selectFriend(key + 1)">
                        <div class="img float-left" ng-style="{'background-image' : 'url(' + friend.url + ')'}">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            @{{ friend.name }}
                        </span>
                    </li>
                </ul>
            </div>
            <a class="button text-center search-places" ng-click="startSearch()">
                Encontrar lugares
            </a>
        </div>
    </section>
@endsection