@extends('layouts.app')

@section('angular')'page.event'@endsection

@section('scripts')
<script type="application/javascript" src="/js/angular/event.js"></script>
@endsection

@section('content')
    <section class="login" ng-controller="EventController">
        <div class="background"></div>
    </section>
@endsection