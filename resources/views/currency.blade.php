@extends('header')

@section('content')
  <div class="card">
    <div class="card-body">
      <label for="FormControlSelect1">Convert From</label>
      <div class="input-group">
      <br>
      <form action="/currency" method="GET">
        <input type="number" step="0.01" min="0" id="Amount" name="Amount" class="form-control form-control-lg mx-3" value="">
        <select class="form-control" id="From" name="From">
          @foreach ($currencies as $item)
            <option class="color" value="{{ $item->iso }}">{{ $item->name }} - {{ $item->iso }}</option>
          @endforeach
        </select>
      <br> 
      <input type="button"  id="go" onclick="swapValues()" value="Swap">
      <br>
          <select class="form-control" id="To" name="To">
            @foreach ($currencies as $item)
              <option class="color" value="{{ $item->iso }}">{{ $item->name }} - {{ $item->iso }}</option>
            @endforeach
          </select>
      <br> <br>
       <span id="result" value=""></span>
      <br> <br>
        <button class="btn btn--pill" type="submit">Convert!</button>
      </form>
      <?php
        if( isset($_GET["From"])) 
        {
          $value = $_GET['Amount']; 
                    
          $arrFrom = (DB::table('currency')->select('rates')->where('iso', '=', $_GET['From'])->get())->pluck('rates');
          $From = $arrFrom[0];

          $arrTo = (DB::table('currency')->select('rates')->where('iso', '=', $_GET['To'])->get())->pluck('rates');
          $To = $arrTo[0];
          
          $rez = ($value/$From) * $To;
          echo $rez;
        }
      ?>
      </div>
    </div>
  </div>

  <script>
    function swapValues(){
      var tmp = document.getElementById("From").value;
      document.getElementById("From").value = document.getElementById("To").value;
      document.getElementById("To").value = tmp;
    }
  </script>

  
 

  @include('footer')
  @endsection
 