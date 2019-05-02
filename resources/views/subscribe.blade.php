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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Main Custom styles for the website  -->
    <link href="css\main.css" rel="stylesheet">
    <link href="css\subscribe.css" rel="stylesheet">
  </head>
  <body class="text-center" background="img\background.jpg">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <i class="material-icons masthead-brand img-fluid">autorenew</i>
      <h3 class="masthead-brand">XCHANGE</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href='/'>Home</a>
        <a class="nav-link" href='/currency'>Currnecy</a>
        <a class="nav-link" href='/crypto'>Crypto</a>
        <a class="nav-link" href='/contact'>Contact</a>
        <a class="nav-link active" href='/subscribe'>Subscribe</a>
      </nav>
    </div>
  </header>
    <br> <br>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                        @if (Session::has('failure'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('failure') }}
                            </div>
                        @endif
                  <h2 class="title">Subscribe to our newsletter!</h2>
                  <br>
                  <p class="paragraph">Subscribe to our Newsletter to get more information about fiat and crypto currencies. By subscribing to us, you will be receiving everyday five main news article stories to get updated on what is going on in the currency world.</p>
                  <br> 
                    <form action={{url('/subscribe/newsletter')}}  method="POST">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="btn">

                            <button class="btn btn--pill" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Develeoped and Designed by <a href="#">&#169;Garlix</a>.</p>
        </div>
      </footer>
    </div>
    </body>
    </html>
