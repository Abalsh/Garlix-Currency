@extends('header')

@section('content')
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                @if(session('message'))
                    <div class='alert alert-success'>
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                  <h2 class="title">Contact Us</h2>
                  <br>
                  <p id="contact-left">Get in-touch with us.</p> 
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
                <form id="form" class="topBefore" action="{{ url('contact/send')}}" method="POST">
                        {{ csrf_field() }} 
                    <div class="input-group">
                         <input type="text" name="name" placeholder="NAME">
                    </div>
                    <div class="input-group">
                         <input type="text" name="email" placeholder="E-MAIL">
                    </div>
                    <div class="input-group">
                         <textarea type="text" name="message" placeholder="MESSAGE"></textarea>
                    </div>
                    <div class="input-group">
                         <input id="submit" type="submit" name="send" value="Submit">
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
   @include('footer')
@endsection

