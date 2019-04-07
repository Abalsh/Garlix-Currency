@extends('header')

@section('content')
  <main role="main" class="inner cover">
    <h1 class="cover-heading">Free Currency Converter</h1>
    <p class="lead">Currency converter and exchange rate for Dollar, Pound, Euro and all other currencies. Calculate live currency and foreign exchange rates with this free currency converter.</p>
    <p class="lead">
      <a href="/currency" class="btn btn-lg btn-secondary">Convert now</a>
    </p>
  </main>
  @include('footer')
@endsection