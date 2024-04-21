<div class="container-fluid">
<nav
    class="nav justify-content-evenly">
    <a class="nav-link {{ request()->is('/') ? 'bg-active' : ''}}" href="{{route('index')}}" aria-current="page">Home</a>
    <a class="nav-link {{ request()->is('about') ? 'bg-active' : ''}}" href="{{route('about')}}">About</a>
    <a class="nav-link {{ request()->is('contacts') ? 'bg-active' : ''}}" href="{{route('contacts')}}">Contacts</a>
</nav>
</div>

