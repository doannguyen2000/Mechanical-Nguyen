<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between ">
        <a class="navbar-brand d-none d-md-block" href="{{ route('home') }}">{{ 'Nguyen-App' }} </a>
        <a class="navbar-brand d-block d-md-none" href="{{ route('home') }}">{{ 'N' }} </a>

        @if (Route::is('login'))
            <a class="btn btn-outline-success" href="{{ route('register') }}">{{ 'Đăng kí' }} </a>
        @else
            <a class="btn btn-outline-success" href="{{ route('login') }}">{{ 'Đăng nhập' }} </a>
        @endif
    </div>
</nav>
