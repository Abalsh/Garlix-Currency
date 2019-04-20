@extends('header')

@section('content')
    <div class="card">
      <div class="card-body">
        <label for="FormControlSelect1">Convert From</label>
        <div class="input-group">
          <br>
            <select class="form-control" id="FormControlSelect1">
                <option>USD</option>
                <option>ETH</option>
                <option>XRP</option>
                <option>ADA</option>
                <option>LTC</option>
                <option>DASH</option>
                <option>USDT</option>
                </select>
          </div>
        <input type="number" class="form-control form-control-lg mx-3" value="">
        <label for="FormControlSelect1">To</label>
          <div class="input-group">
            <br> <br>
              <select class="form-control" id="FormControlSelect1">
                <option>BTC</option>
                <option>ETH</option>
                <option>XRP</option>
                <option>ADA</option>
                <option>LTC</option>
                <option>DASH</option>
                <option>USDT</option>
                </select>
        </div>
        <input type="number" class="form-control form-control-lg mx-3" value="">
        <br> <br>
        <div class="btn">
          <button class="btn btn--pill" type="submit">Convert!</button>
        </div>
      </div>
  </div>
  @include('footer')
  @endsection