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
        <!-- Setting up BootstrapCDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Main Custom styles for the website  -->
        <link href="css\main.css" rel="stylesheet">
        <script src="{{ URL::to('js/main.js') }}"></script>
        @if(\Request::is('contact')) <link href="css\contact.css" rel="stylesheet">  @endif
        @if(\Request::is('crypto'))<link href="css\crypto.css" rel="stylesheet"> @endif
        @if(\Request::is('currency'))<link href="css\crypto.css" rel="stylesheet"> @endif
        @if(\Request::is('subscribe')) <link href="css\subscribe.css" rel="stylesheet"> @endif
     </head>
  <body class="text-center" background="img\background.jpg">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <i class="material-icons masthead-brand img-fluid">autorenew</i>
      <h3 class="masthead-brand">XCHANGE</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link @if(\Request::is('/')) active @endif" href="/">Home</a>
        <a class="nav-link @if(\Request::is('currency')) active @endif" href='/currency'>Currnecy</a>
        <a class="nav-link @if(\Request::is('crypto')) active @endif" href='/crypto'>Crypto</a>
        <a class="nav-link @if(\Request::is('contact')) active @endif" href='/contact'>Contact</a>
        <a class="nav-link @if(\Request::is('subscribe'))) active @endif" href='/subscribe'>Subscribe</a>
      </nav>
    </div>
  </header>
  
    @yield('content')

    
  </body>
  </html>