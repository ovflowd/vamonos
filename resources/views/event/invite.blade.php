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
                    <i class="material-icons float-left arrow">arrow_back</i>
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
                    <li ng-click="selectFriend(1)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(2)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(3)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(4)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(5)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(6)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(7)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(8)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
                        </span>
                    </li>
                    <li ng-click="selectFriend(9)">
                        <div class="img float-left" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')">
                            <i class="material-icons">check</i>
                        </div>
                        <span class="float-left">
                            Funk é Ruim
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