@extends('layouts.app_ua', ['title' => $mains->seo_title, 'description' => $mains->description])
@section('content')
    @include('app.includes.navua')
    @include('app.includes.headerua')
    @include('app.includes.servicesua')
    <div class="text-center">
        {!! $mains->content !!}
    </div>
@endsection
