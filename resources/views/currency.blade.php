@extends('header')

@section('content')
  <div class="card">
    <div class="card-body">
      <label for="FormControlSelect1">Convert From</label>
      <div class="input-group">
      <br>
      <form>
        <select class="form-control" id="FormControlSelect1">
          @foreach ($currencies as $item)
            <option class="color" value="{{ $item->ID }}">{{ $item->name }} - {{ $item->iso }}</option>
          @endforeach
        </select>
      
      <input type="number" class="form-control form-control-lg mx-3" value="">
      <br> <br>
          <select class="form-control" id="FormControlSelect1">
            @foreach ($currencies as $item)
              <option class="color" value="{{ $item->ID }}">{{ $item->name }} - {{ $item->iso }}</option>
            @endforeach
          </select>
       <input type="number" class="form-control form-control-lg mx-3" value="">
      <br> <br>
        <button class="btn btn--pill" type="submit">Convert!</button>
      </form>
      </div>
    </div>
  </div>

  <script>
    
  </script>

  @include('footer')
  @endsection