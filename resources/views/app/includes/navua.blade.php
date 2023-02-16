<nav class="navbar-default"
    style="background-color: rgba(53, 152, 219, .5);position: relative; z-index: 1; min-height: 80px; text-align: right;padding: 15px 55px;">
    <ul class="lang" style="position: absolute;right: 10px;">
        <li>
            <a href="{{ route('en') }}">EN</a>
        </li>
        <li>
            <a href="{{ route('de') }}">DE</a>
        </li>
    </ul>
</nav>
<div class="mainmenu">
    <div id="mySidebar" class="sidebar text-uppercase">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ route('main') }}">головна</a>
        <a href="/ua/vidperkl.html">послуги перекладу</a>
        <a href="/ua/tsiny.html">ціни</a>
        <a href="{{ route('articles') }}">статті</a>
        <a href="/ua/perekladacham.html">перекладачам</a>
        <a href="/ua/kontakt.html">контакти</a>
    </div>
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
    </div>
</div>
