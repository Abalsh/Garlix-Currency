@extends('header')

@section('content')
    <br> <br> <br> <br>
    <main role="main" class="inner cover">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <div class="card-body">
            <div class="card-heading"></div>
            @if(session('message'))
                <div class='alert alert-success'>
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body">
                <h3> Contact Us</h3>
                <br>
                <h2 class="lead title"> Get in-touch with us.</h2>
                <br>
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
                <div class="bs-container">
                    <form style= "alignment: center"   id="form" class="topBefore" action="{{ url('contact/send')}}" method="POST">
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
