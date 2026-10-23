<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ANILAB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="{{ asset('page.css') }}">
</head>

<body>

    <header class="m-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary m-0">
            <div class="container-fluid header mt-0">

                <a class="navbar-brand text-white"
                   href="{{ route('homepage') }}">
                    ANILAB
                </a>

                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"
                     id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active text-white"
                               aria-current="page"
                               href="{{ route('homepage') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white"
                               href="{{ route('info') }}">
                                Chi Siamo
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white"
                               href="{{ route('servizi') }}">
                                Servizi
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <main>

        <!-- HERO SECTION -->
        <section class="container-fluid p-0">
            <div class="heroSection d-flex align-items-center justify-content-end">

                <h1 class="text-white fs-1 fw-bold me-5 px-3">
                    Welcome to ANILAB
                </h1>

            </div>
        </section>

        
        <section class="container py-4 list">

            <h2 class="text-center mb-4 text-white">
                Top 10 Anime List
            </h2>

            <div class="row g-4">

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 1]) }}">
                            <img src="{{ asset('/images/Attack on titans.jpg') }}"
                                 class="card-img-top anime-img"
                                 alt="Attack on Titan">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Attack on Titan</h5>

                            <p class="card-text">
                                Humanity fights for survival behind massive walls against giant, man-eating Titans in a dark, twist-filled war story.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 2]) }}">
                            <img src="{{ asset('/images/full-metal-alchemist-brotherhood-wallpaper-preview.jpg') }}"
                                 class="card-img-top anime-img"
                                 alt="Fullmetal Alchemist Brotherhood">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Fullmetal Alchemist: Brotherhood</h5>

                            <p class="card-text">
                                Two brothers use alchemy to search for a Philosopher's Stone to restore their bodies after a failed ritual.
                            </p>
                        </div>

                    </div>
                </div>

               
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 3]) }}">
                            <img src="{{ asset('/images/onepiece.png') }}"
                                 class="card-img-top anime-img"
                                 alt="One Piece">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">One Piece</h5>

                            <p class="card-text">
                                Monkey D. Luffy and his pirate crew sail across the ocean to find the ultimate treasure and become King of the Pirates.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 4]) }}">
                            <img src="{{ asset('/images/hunterXhunter.jpg') }}"
                                 class="card-img-top anime-img"
                                 alt="Hunter x Hunter">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Hunter x Hunter (2011)</h5>

                            <p class="card-text">
                                Gon sets out to pass the dangerous Hunter Exam and find his long-lost father.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 5]) }}">
                            <img src="{{ asset('/images/DeathNote.png') }}"
                                 class="card-img-top anime-img"
                                 alt="Death Note">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Death Note</h5>

                            <p class="card-text">
                                A high school student discovers a supernatural notebook that kills anyone whose name is written inside.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 6]) }}">
                            <img src="{{ asset('/images/cowboy bepop.jpg') }}"
                                 class="card-img-top anime-img"
                                 alt="Cowboy Bebop">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Cowboy Bebop</h5>

                            <p class="card-text">
                                A crew of bounty hunters travels across the solar system, chasing targets while escaping their own pasts.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 7]) }}">
                            <img src="{{ asset("/images/wallpapersden.com_frieren-hd-frieren-beyond-journey-s-end_4500x2761.jpg") }}"
                                 class="card-img-top anime-img"
                                 alt="Frieren">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Frieren: Beyond Journey's End</h5>

                            <p class="card-text">
                                An elven mage outlives her heroic companions and begins a journey to understand human life and emotions.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 8]) }}">
                            <img src="{{ asset('/images/DragonBallZ.jpg') }}"
                                 class="card-img-top anime-img"
                                 alt="Dragon Ball Z">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Dragon Ball Z</h5>

                            <p class="card-text">
                                Goku and his friends defend Earth against powerful enemies in epic battles that push their strength to the limit.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 9]) }}">
                            <img src="{{ asset('/images/vinland saga.jpeg') }}"
                                 class="card-img-top anime-img"
                                 alt="Vinland Saga">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Vinland Saga</h5>

                            <p class="card-text">
                                Thorfinn, a young Viking, seeks revenge for his father's death while discovering a path toward peace.
                            </p>
                        </div>

                    </div>
                </div>

                
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">

                        <a href="{{ route('article', ['id' => 10]) }}">
                            <img src="{{ asset('/images/steins gate.jpg') }}"
                                 class="card-img-top anime-img"
                                 alt="Steins;Gate">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title">Steins;Gate</h5>

                            <p class="card-text">
                                A scientist and his friends discover a way to send messages into the past, triggering dangerous timeline changes.
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-4 mt-5">

        <div class="container">

            <h5 class="fw-bold">ANILAB</h5>

            <p class="mb-3 fst-italic">
                "Great stories stay with us forever."
            </p>

            <p class="small text-secondary mb-0">
                &copy; 2026 ANILAB. All rights reserved.
            </p>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"></script>

</body>
</html>