@extends('header')

@section('content')
    <div class="card">
      <div class="card-body">
        <select class="mdb-select md-form">
          <option value="" disabled selected>Choose your option</option>
          <option>USD</option>
          <option>EUR</option>
          <option>CHF</option>
          <option>NOK</option>
          <option>GBP</option>
          <option>AED</option>
          <option>SEK</option>
        </select>
        <input type="number" class="form-control form-control-lg mx-3" value="">
          <div class="form-group">
            <br> <br>
            <label for="FormControlSelect1">To</label>
            <br>
              <select class="form-control" id="FormControlSelect1">
                <option>USD</option>
                <option>EUR</option>
                <option>CHF</option>
                <option>NOK</option>
                <option>GBP</option>
                <option>AED</option>
                <option>SEK</option>
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