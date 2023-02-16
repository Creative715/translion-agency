@extends('layouts.app_de', ['title' => $depages->title, 'description' => $depages->description])
@section('content')
    @include('app.includes.mobile')
    @include('app.includes.navde')
    @include('app.includes.headerde')
    <div class="container">
        <div class="row">
            <aside class="col-md-4 hidden-xs">
                <h3>Büro der Nacherzählung Translion anbietet folgendes Äußere der Nacherzählung:</h3>
                @include('app.includes.sidebarde')
            </aside>
            <div class="col-md-8">
                {!! $depages->content !!}
            </div>
        </div>
    </div>

    <div class="dash"></div>
@endsection
