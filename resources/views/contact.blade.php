@extends('header')

@section('content')
<main role="main" class="inner cover">
            <div class="card-body">
                <div class="card-heading"></div>
                @if(session('message'))
                    <div class='alert alert-success'>
                        {{ session('message') }}
                    </div>
                @endif
                <div class="card-body">
                  <h2 class="title lead">Contact Us</h2>
                  <br>
                  <p  style="float: left; padding-left: 50px;">Get in-touch with us.</p> 
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
                         <input type="text" class="lead" name="name" placeholder="NAME">
                    </div>
                    <div class="input-group">
                         <input type="text" class="lead" name="email" placeholder="E-MAIL">
                    </div>
                    <div class="input-group">
                         <textarea type="text" class="lead" name="message" placeholder="MESSAGE"></textarea>
                    </div>
                    <div class="input-group">
                         <input id="submit" class="lead" type="submit" name="send" value="Submit">
                    </div>
                    
                    </form>
                </div>
                </div>
            </div>
</main>
   @include('footer')
@endsection

