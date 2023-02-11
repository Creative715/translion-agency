@extends('layouts.app_en', ['title' => $enpages->seo_title, 'description' => $enpages->description])
@section('content')
    @include('app.includes.mobile')
    @include('app.includes.naven')
    @include('app.includes.headeren')
    <div class="container">
        <div class="row">
            <aside class="col-md-4 hidden-xs">
                <h3>Бюро перекладів Translion пропонує наступні види перекладу:</h3>
                @include('app.includes.sidebaren')
            </aside>
            <div class="col-md-8">
                {!! $enpages->content !!}
            </div>
        </div>
    </div>
    <div class="dash"></div>
@endsection