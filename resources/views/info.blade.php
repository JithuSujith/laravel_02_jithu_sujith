<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANILAB INFO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--CSS LINK-->
    <link rel="stylesheet" href="{{ asset('page.css') }}">
  </head>
  <body>
    <header>
       <header class="m-0">
      <nav class="navbar navbar-expand-lg bg-body-tertiary m-0 ">
  <div class="container-fluid header mt-0">
    <a class="navbar-brand text-white"  href="{{route('homepage')}}">ANILAB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('info')}}">Chi Siamo</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('servizi')}}" >Servizi</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
 </nav>
    </header>

    <main>
      <section class="container-fluid p-0 mt-5  main ">
        <div class="row d-flex justify-content-center flex-column">
          <div class="col-12 col-md 12 d-flex justify-content-start">
            <h1 class="text-white fw-bold mx-5">CHI SIAMO:</h1>
          </div>
          <div class="col-12  ">
            <p class="text-white fs-3 mt-5 mx-5">
              Benvenuto su Anilab, il tuo punto di riferimento per tutto ciò che riguarda il mondo degli anime!

              Siamo appassionati di animazione giapponese e abbiamo creato Anilab per condividere con voi le ultime novità, gli annunci più attesi e le curiosità sui vostri anime preferiti.

              Dalle nuove uscite stagionali ai grandi ritorni, dai manga che conquistano il pubblico agli aggiornamenti sui personaggi più amati, il nostro obiettivo è tenervi sempre aggiornati su tutto ciò che succede nel mondo anime.

              La nostra missione? Unire gli appassionati, raccontare le storie che ci emozionano e farvi scoprire ogni giorno qualcosa di nuovo.
            </p>
          </div>
        </div>

      </section>

    </main>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>