<!doctype html>
<html lang="en">
  <head>
    <title>Portfolio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Euphoria+Script&family=Fredoka:wght@300;400&family=Lato&family=Seaweed+Script&family=Work+Sans&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top" style="min-height: 10vh;">
      <div class="container">
        <a class="navbar-brand" href="#" style="font-family: 'Seaweed Script', cursive; font-size: 2.8rem;">My Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-list">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-3">
              <a class="nav-link single" href="{{ url('/') }}" style="font-size: 1rem;">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link single" href="#aboutme" style="font-size: 1rem;">About Me</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link single" href="#portfolio" style="font-size: 1rem;">Porfolio</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link single" href="#contact" style="font-size: 1rem;">Contact Me</a>
            </li>
          </ul>
          <a class="btn btn-primary single" href="{{ asset('file/resume.pdf') }}" download="Siti_Nur_Adilah_Resume" role="button" style="padding:8px 13px; font-size: 1rem;"><img src="https://img.icons8.com/material-outlined/24/ffffff/parse-from-clipboard.png"/>&nbsp;Resume</a>
        </div>
      </div>
    </nav>

    <main>
      <div class="container-fluid d-flex justify-content-center">
        <div class="container" style="padding-top: 22vh; min-height: 90vh;" id="home">
          @yield('content')
        </div>
      </div>
      
      <div class="container-fluid">
        <div class="container" style="padding-top: 16vh; padding-bottom: 10vh; min-height: 74vh;" id="aboutme">
          @yield('aboutme')
        </div>
      </div>
      
      <div class="container-fluid">
        <div class="container" style="padding-top: 2.8rem; padding-bottom: 2.8rem;" id="experience">
          @yield('experience')
        </div>
      </div>
      
      <div class="container-fluid">
        <div class="container" style="padding-top: 16vh; padding-bottom: 10vh; min-height: 90vh;" id="portfolio">
          @yield('portfolio')
        </div>
      </div>
      
      <div class="container-fluid">
        <div class="container" style="padding-top: 16vh; padding-bottom: 10vh; min-height: 90vh;" id="contact">
          @yield('contact')
        </div>
      </div>
    </main>

    <footer class="flex-shrink-0 py-4 bg-dark text-white-50">
      <div class="container text-center">Copyright &copy; SITINURADILAH.MY</div>
    </footer>

    <a href="#" class="d-flex align-items-center justify-content-center back-to-top" id="btn-back-to-top">
      <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>