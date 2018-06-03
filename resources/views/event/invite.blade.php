@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
    <script type="application/javascript" src="/js/angular/event.js"></script>
@endsection

@section('content')
    <section class="invite" ng-controller="EventController">
        <div class="background"></div>
        <div class="grid-x">
            <div class="cell header">
                <div class="top">
                    <h5 class="float-left">Mazee</h5>
                    <i class="material-icons float-right person">person</i>
                </div>
                <input type="text" class="float-center" placeholder="Encontre os seus amigos"/>
                <div class="grid-x place">
                    <div class="cell small-2">
                        <i class="material-icons">place</i>
                    </div>
                    <div class="cell small-10">
                        <p>
                            Ir ao @{{storage.eventName}} com seus amigos!
                        </p>
                    </div>
                </div>
            </div>
            <div class="cell content">
                <ul class="menu vertical">
                    <li>
                        <div class="img" style="background-image: url('https://1ofdmq2n8tc36m6i46scovo2e-wpengine.netdna-ssl.com/wp-content/uploads/2014/04/Steven_Hallam-slide.jpg')"></div>
                        <span>

                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection