<div class="container-fluid">
<nav
    class="nav justify-content-evenly">
    <a class="nav-link {{Route::currentRouteName() === 'index' ? 'bg-active' : ''}}" href="{{route('index')}}" aria-current="page">Home</a>
    <a class="nav-link" href="#">About</a>
    <a class="nav-link" href="#">Contacts</a>
</nav>
</div>

