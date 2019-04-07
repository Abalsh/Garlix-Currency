@extends('header')

@section('content')
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                  <h2 class="title">Contact Us</h2>
                  <br>
                  <p id="contact-left">Get in-touch with us.</p> 
                    <form id="form" class="topBefore" action="" method="post">
                    <div class="input-group">
                         <input type="text" name="name" placeholder="NAME">
                    </div>
                    <div class="input-group">
                         <input type="email" name="email" placeholder="E-MAIL">
                    </div>
                    <div class="input-group">
                         <textarea type="text" name="message" placeholder="MESSAGE"></textarea>
                    </div>
                    <div class="input-group">
                         <input id="submit" type="submit" value="Submit">
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
   @include('footer')
@endsection