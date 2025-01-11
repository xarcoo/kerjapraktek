<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Website | PT Tambang Anugrah</title>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js" defer></script>
    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/page1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/page2.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-background">
            <div class="container-fluid navbar-item">
                <a class="navbar-brand" href="https://Wa.me/+628991118888">
                    <img src="{{ asset('assets/images/logo.png') }}" width=30, height=30,
                        class="d-inline-block align-text-top" alt="">
                    PT. Anugerah Tambang
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PT. Tambang Anugrah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('home-en') ? 'active' : '' }}"
                                    href="{{ url('/home-en') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}"
                                    href="{{ url('/about-us') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-bahasa" href="{{ url('/') }}">EN - ID</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="d-flex flex-wrap align-items-center py-3">
        <div class="col-md-4 d-flex copyright">
            <small>Copyright &copy; 2024, VAC. All Rights Reserved</small>
        </div>

        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <img data-src="{{ asset('assets/images/logo.png') }}" width=30, height=30,
                class="d-inline-block align-text-top lazyload" alt="logo">
            <span class="mb-3 mb-md-0 text-body-secondary"><b>PT. Anugerah Tambang</b></span>
        </div>

        <div class="col-md-4 d-flex justify-content-center contact">
            <div class="ms-3">
                <a class="text-body-secondary" href="https://Wa.me/+628991118888">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black"
                        class="bi bi-whatsapp icon-wa" viewBox="0 0 16 16">
                        <path
                            d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                    </svg> <b>CS - 08991118888</b>
                </a>

            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    @yield('javascript')
    <script>
        function changeLanguage() {
            var navLink = document.querySelector(".nav-bahasa");
            var currentText = navLink.innerText;

            if (currentText === "ID - EN") {
                navLink.innerText = "EN - ID";
            } else {
                navLink.innerText = "ID - EN";
            }
        }
    </script>
</body>

</html>
