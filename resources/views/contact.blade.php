@extends('header')

@section('content')
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                @if(session('message'))
                    <div class='alert alert-success'>
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                  <h2 class="title lead">Contact Us</h2>
                  <br>
                    <h3>
                        <small class="text-muted"><span id="color">Get in Touch with us!</span></small>
                    </h3>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                         @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                   </div>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="container">
                <form id="form" class="topBefore" action="{{ url('contact/send')}}" method="POST">
                        {{ csrf_field() }}
                    <div class="input-group">
                        <input class="input--style-3 color" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="input-group">
                         <input type="text" class="input--style-3 color" name="email" placeholder="E-MAIL">
                    </div>
                    <div class="input-group">
                         <textarea type="text" class="input--style-3 color" name="message" placeholder="MESSAGE"></textarea>
                    </div>
                    <div class="input-group">
                         <input id="submit" class="input--style-3 color" type="submit" name="send" value="Submit">
                    </div>
                    
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</main>
   @include('footer')
@endsection

