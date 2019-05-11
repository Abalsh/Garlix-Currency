<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Currency Exchange Website">
        <meta name="author" content="Florian Shllaku, Hakeem Shrief">
        <title>Currency Exchange</title>
        <!-- Connecting with Google Material for websit's logo/icon autorenew-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Setting up BootstrapCDN -->
        
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
        
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        

        <!-- Main Custom styles for the website  -->
        <link href="css\main.css" rel="stylesheet">
        @if(\Request::is('currency')) <script src="{{ URL::to('js/main.js') }}"></script> @endif
        @if(\Request::is('contact')) <link href="css\contact.css" rel="stylesheet">  @endif
        @if(\Request::is('crypto'))<link href="css\crypto.css" rel="stylesheet"> @endif
        @if(\Request::is('currency'))<link href="css\crypto.css" rel="stylesheet"> @endif
        @if(\Request::is('subscribe')) <link href="css\subscribe.css" rel="stylesheet"> @endif
        @if(\Request::is('crypto')) <script src="{{ URL::to('js/crypto.js') }}"></script> @endif
  

     </head>
    <body class="text-center" background="img\background.jpg">
      
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <a href="/" >
      <i class="material-icons masthead-brand img-fluid">autorenew</i>
      <h3 class="masthead-brand">XCHANGE</h3>
      </a>
      
      <nav class="nav nav-masthead justify-content-center">
        
        <a class="nav-link @if(\Request::is('/')) active @endif" href="/">Home</a>
        <a class="nav-link @if(\Request::is('currency')) active @endif" href='/currency'>Currency</a>
        <a class="nav-link @if(\Request::is('crypto')) active @endif" href='/crypto'>Crypto</a>
        <a class="nav-link @if(\Request::is('contact')) active @endif" href='/contact'>Contact</a>
        <a class="nav-link @if(\Request::is('subscribe'))) active @endif" href='/subscribe'>Subscribe</a>
      </nav>
    </div>
  </header>
  
    @yield('content')

    
  </body>
  </html>