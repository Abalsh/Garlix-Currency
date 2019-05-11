@extends('header')

@section('content')
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                        @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                        @endif
                        @if (\Session::has('failure'))
                            <div class="alert alert-danger">
                                <p>{{ \Session::get('failure') }}</p>
                            </div><br />
                        @endif
                    <h2 class="title">Subscribe to our newsletter!</h2>
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
                    <p class="paragraph">Subscribe to our Newsletter to get more information about fiat and crypto currencies. By subscribing to us, you will be receiving everyday five main news article stories to get updated on what is going on in the currency world.</p>
                    <br>

                    <form action={{url('/subscribe')}}  method="post">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-3 color" style="background-color #3C1C78;" type="email" placeholder="Email" name="email">
                        </div>
                        <div class="btn">
                            <button class="btn btn-primary" style="background-color: #3C1C78; border: none; " type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  @include('footer')
  
  @endsection
 
