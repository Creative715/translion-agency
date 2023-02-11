@extends('layouts.app_en', ['title' => $mains->seo_title, 'description' => $mains->description])
@section('content')
    @include('app.includes.naven')
    @include('app.includes.headeren')
    <div class="text-center">
        {!! $mains->content !!}
    </div>
@endsection
