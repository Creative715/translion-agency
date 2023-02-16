@extends('layouts.app_ua', ['title' => "Сторінка 404", 'description' => "Рекомендуємо повернутися на головну сторінку"])
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
                <h1 style="text-align: center;"><strong><span style="font-size: 24pt; color: #ff6600;">Сторінка 404</span></strong></h1>
<p style="text-align: center;"><em style="margin: 0px; padding: 0px; color: #363636; font-family: Arial, Helvetica, sans-serif; font-size: 14px; line-height: 21px; text-align: justify;">Такої сторінки немає, можливо, Ви неправильно набрали адресу сторінки або перейшли по невірному посиланню на наш сайт, або такої сторінки ніколи не було.</em></p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset('/images/404.png') }}" alt="Ошибка 404" /></p>
<p> </p>
<p style="font-size:20px;text-align: center;">Рекомендуємо повернутися на головну сторінку <a href="{{ route('main') }}">www.translion.net</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
            </div>
        </div>
    </div>

    <div class="dash"></div>
@endsection