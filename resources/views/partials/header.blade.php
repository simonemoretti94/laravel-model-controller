<div class="container-fluid">
<nav
    class="nav justify-content-evenly">
    <a class="nav-link {{ request()->is('/') ? 'bg-active' : ''}}" href="{{route('index')}}" aria-current="page">Home</a>
    <a class="nav-link {{ request()->is('about') ? 'bg-active' : ''}} {{!Route::currentRouteName('/' || 'about' || 'contacts') ? 'd-none' : ''}}" href="{{route('about')}}">About</a>
    <a class="nav-link {{ request()->is('contacts') ? 'bg-active' : ''}} {{!Route::currentRouteName('/' || 'about' || 'contacts') ? 'd-none' : ''}}" href="{{route('contacts')}}">Contacts</a>
</nav>
</div>

