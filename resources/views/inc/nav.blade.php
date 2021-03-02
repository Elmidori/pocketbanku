<nav class="sidebar">
    <ul class="sidebar__links">
        <li class="sidebar__link"><a href="/home">ACCEUIL</a></li>
        <li class="sidebar__link"><a href="/virement">VIREMENT</a></li>
        @if ( Auth::user()->lvl == 0)
            <li class="sidebar__link"><a href="/deposer">DEPOSER</a></li>
            <li class="sidebar__link"><a href="/transactions">TRANSACTIONS</a></li>
        @endif
        
    </ul>
    
    <a href="{{ route('logout') }}" class="sidebar__disconnect" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">DECONNEXION</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav> 