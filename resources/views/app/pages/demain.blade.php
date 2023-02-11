@extends('layouts.app_de', ['title' => $mains->seo_title, 'description' => $mains->description])
@section('content')
    @include('app.includes.navde')
    @include('app.includes.headerde')
    <div class="text-center">
        {!! $mains->content !!}
    </div>
@endsection
