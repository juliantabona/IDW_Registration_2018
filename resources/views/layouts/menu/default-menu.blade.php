<div style="display: block;border-bottom: 1px solid #f7f7f778;background:#ca2f00;">
    <ul style="width: 100%;display: inline-block;">
        <li style="float: left;">
            <a href="{{ URL::to('/') }}">
                <img src="http://www.internationaldataweek.org/sites/all/themes/eventme/logo.png" style="max-width: 200px;padding: 0px;margin: 10px 0 0 30px;">
            </a>
        </li>
        @if (Auth::check())
        <li style="float: right;">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link"> 
                LOGOUT
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </li>
        @endif
        <li style="float: right;">
            <a href="/faq" class="menu-link">FAQ</a>
        </li>
        <li style="float: right;">
            <a href="/" class="menu-link">REGISTER</a>
        </li>
        @if (Auth::check())
        <li style="float: right;">
            <a href="/overview" class="menu-link">REGISTRATIONS</a>
        </li>
        @endif
    </ul>
</div>