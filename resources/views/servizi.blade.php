<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANILAB Servizi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
   
    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('page.css') }}">
  </head>


  <body>
      <header class="m-0">
      <nav class="navbar navbar-expand-lg bg-body-tertiary m-0 ">
  <div class="container-fluid header mt-0">
    <a class="navbar-brand text-white"  href="#">ANILAB</a>
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
     
    </div>
  </div>
</nav>
    </header>

    <main>
     <div class="container-fluid">
      <div class="row">
         <section class="mains">
      <h1 class="text-white text-center mb-5">Servizi:</h1>
      <ul>
      @foreach ($serviziolink as $item)
          <li>
             <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
          </li>
      @endforeach
      </ul>
      <p class="text-white text-center fs-4">
        Questi link sono stati selezionati appositamente per tutti gli appassionati di anime e manga, con l'obiettivo di aiutarvi a coltivare la vostra passione e a vivere al meglio il fantastico mondo dell'animazione giapponese. Grazie a questi siti, potrete scoprire nuovi anime da guardare, leggere i vostri manga preferiti e trovare prodotti e gadget dedicati ai personaggi che amate di più. Che siate appassionati da anni o abbiate appena iniziato questo viaggio, troverete tante risorse utili per divertirvi, esplorare nuove storie e condividere la vostra passione. ANILAB è qui per accompagnarvi in ogni avventura, un anime alla volta!
       </p>
      </section>
      </div>
     </div>
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