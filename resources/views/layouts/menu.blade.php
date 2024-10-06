<li class="{!! (Request::is('tests*') ? 'active' : '' ) !!}">
    <a href="{{ route('tests.index') }}">
        <span class="mm-text ">Tests</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('apons*') ? 'active' : '' ) !!}">
    <a href="{{ route('apons.index') }}">
        <span class="mm-text ">Apons</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('fffs*') ? 'active' : '' ) !!}">
    <a href="{{ route('fffs.index') }}">
        <span class="mm-text ">Fffs</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('files*') ? 'active' : '' ) !!}">
    <a href="{{ route('files.index') }}">
        <span class="mm-text ">Files</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

<li class="{!! (Request::is('sliders*') ? 'active' : '' ) !!}">
    <a href="{{ route('sliders.index') }}">
        <span class="mm-text ">Sliders</span>
        <span class="menu-icon"><i class="im im-icon-Structure"></i></span>
    </a>
</li>

