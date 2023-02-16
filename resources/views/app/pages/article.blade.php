@extends('layouts.app_ua', ['title' => $articles->title, 'description' => $articles->description])
@section('content')
    @include('app.includes.mobile')
    @include('app.includes.navua')
    @include('app.includes.headerua')
    <div class="container">
        <div class="row">
            <aside class="col-md-4 hidden-xs">
                <h3>Бюро перекладів Translion пропонує наступні види перекладу:</h3>
                @include('app.includes.sidebarua')
            </aside>
            <div class="col-md-8">
                {!! $articles->content !!}
            </div>
        </div>
    </div>

    <div class="dash"></div>
@endsection
