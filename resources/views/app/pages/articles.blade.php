@extends('layouts.app_ua', ['title' => 'Статті', 'description' => 'Опис для розділу статті'])
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
                <h1>Статті</h1>
                    <div class="panel panel-default">
                        @foreach ($articles as $article)
                        <div class="panel-heading">
                            <h3 class="panel-title"><a
                                    href="{{ route('article.more', $article->slug) }}">{{ $article->title }}</a></h3>
                        </div>
                        <div class="panel-body">
                            {!! $article->description !!}
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>

    <div class="dash"></div>
@endsection
