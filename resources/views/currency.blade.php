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
            <option class="color" id="first" value="{{ $item->rates }}">{{ $item->name }} - {{ $item->iso }}</option>
          @endforeach
        </select>
      
      <input type="number" id="num" class="form-control form-control-lg mx-3" value="3">
      <br> <br>
          <select class="form-control" id="FormControlSelect2">
            @foreach ($currencies as $item)
              <option class="color" id="second" value="{{ $item->rates }}">{{ $item->name }} - {{ $item->iso }}</option>
            @endforeach
          </select>
       <input type="number" id="rez" value="" class="form-control form-control-lg mx-3" value="">
      <br> <br>
        <button class="btn btn--pill" type="submit" onclick="myFunction()">Convert!</button>
      </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
      var value = document.getElementById("num").value;
      var first = document.getElementById("first").value;
      var second = document.getElementById("second").value;
      function myFunction() {
        rez = valuesecond;
        alert(rez);
      }
  </script>

  @include('footer')
  @endsection