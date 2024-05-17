<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Soume Computing</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        <x-nav></x-nav>
        <span style="font-size: 20px;">Commissioned by Dern Support &#8482;</span>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col">
                            <h1><i>Welcome</i></h1>
                            <ul>
                                <li><p>We provide on-site support for business customers. Daily working times from <b>Sunday to Thursday</b>, From <b>8 AM to 2 PM</b>.</li>
                                <li>Individuals must either drop their computer off at one of the company’s offices or arrange for it to be delivered by a courier.
                            <b>Our Office Address at</b> 17 El Mesaha Square, El Dokki, Daily working times from <b>Sunday to Thursday</b>, From <b>3 PM to 9 PM</b>.</li>
                            </ul>
                            <div class="d-flex justify-self-center">
                            <p class=""><b>Your satisfaction is our goals</b></p>
                            </div>


                            <br>Please make an <b>Individual</b> or <b>Business</b> Account and submit a support request</p>
                        </div>

                        <div >
                        @if (Route::has('login'))
                        @auth
                            <a
                                href="{{ route('order.index') }}"
                                class="rounded-md px-3 py-2 btn btn-primary
                                    text-white ring-1 ring-transparent transition
                                    hover:text-black/70 focus:outline-none
                                    focus-visible:ring-[#FF2D20] dark:text-white
                                    dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                        <h1 class="h1">Make an Account</h1>
                            <div class="btn-group">
                            <a
                                href="{{ route('login') }}"
                                class="btn btn-primary"
                            >
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{route('register')}}" class="btn btn-success">Register</a>
                            @endif
                            </div>
                        @endauth
                        @endif
                    </div>
                    </div>
                </div>
                <footer class="text-center text-sm text-black dark:text-white/70">
                Soume Computing <?php echo date('Y') ?> &trade;
                </footer>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
</html>
