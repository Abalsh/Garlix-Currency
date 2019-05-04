@extends('header')

@section('content')
    <div class="card">
      <div class="card-body">
        <label for="FormControlSelect1">Convert From</label>
        <div class="input-group">
          <br>
          <form action="/crypto" method="GET">
            <input type="number" step="0.01" min="0" id="Amount" name="Amount" class="form-control form-control-lg mx-3" value="">
            <select class="form-control" id="From" name="From">
              @foreach ($cryptos as $item)
                <option class="color" value="{{ $item->symbol }}">{{ $item->name }} - {{ $item->symbol }}</option>
              @endforeach
            </select>
          <br> <br>
              <select class="form-control" id="To" name="To">
                @foreach ($cryptos as $item)
                  <option class="color" value="{{ $item->symbol }}">{{ $item->name }} - {{ $item->symbol }}</option>
                @endforeach
              </select>
          <br> <br>
           <span id="result" value=""></span>
          <br> <br>
            <button class="btn btn--pill" type="submit">Convert!</button>
          </form>
          <?php
        if( isset($_GET["From"]) && isset($_GET["Amount"]) && isset($_GET["To"])) 
        {

          if (!empty($_GET["From"]) && !empty($_GET["Amount"]) && !empty($_GET["To"])) {
            $rez = \App\Http\Controllers\CryptoController::convert($_GET["From"],$_GET["Amount"],$_GET["To"]);
            if ($rez == null) {
              //Something went wrong and function wasnt run
              echo "Something went wrong!";
            }
            echo $rez;
          }

        }

      ?>
      </div>
  </div>

  @include('footer')
  @endsection