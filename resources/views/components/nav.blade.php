<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand"  href="/"><img src="{{asset('asset/SoumeLogo.png')}}" style="width:104px; border-radius:20px" alt="company logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('order.index') }}">Dashboard</a>
                </li>

                        @else
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('login')}}">Login</a>
                        </li>
                            @endif
                            </div>
                        @endauth
                        @endif


            </ul>
        </div>
    </div>
</nav>
