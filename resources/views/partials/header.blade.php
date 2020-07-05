<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light-2" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">CMS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item "><a href="{{ url('admin/logout') }}" class="nav-link"><span class="icon-user"></span> {{ \Illuminate\Support\Facades\Auth::user()->name }} ( logout )</a></li>

                @else
                    <li class="nav-item "><a href="{{ url('admin/login') }}" class="nav-link"><span class="icon-user"></span> Login</a></li>

                @endif
            </ul>
        </div>
    </div>
</nav>