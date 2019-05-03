@extends('header')

@section('content')
  <div class="card">
    <div class="card-body">
      <label for="FormControlSelect1">Convert From</label>
      <div class="input-group">
      <br>
      <form action="/currency" method="GET">
        <input type="number" id="Amount" name="Amount" class="form-control form-control-lg mx-3" value="">
        <select class="form-control" id="From" name="From">
          @foreach ($currencies as $item)
            <option class="color" value="{{ $item->iso }}">{{ $item->name }} - {{ $item->iso }}</option>
          @endforeach
        </select>
      <br> <br>
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
    if( isset($_GET["Amount"])) 
    {
      $value = $_GET['Amount']; 
      $one = $_GET['From'];
      $two = $_GET['To'];
      //$From = DB::table('currency')->where('iso', $_GET['From'])->pluck('rates'); 


      //$From = DB::select('Select rates from currency')->where('iso', '=', "{$one}")->get();

      $users = (DB::table('currency')->select('rates')->where('iso', '=', $one)->get())->pluck('rates');
      $From = $users[0];

      $renat = (DB::table('currency')->select('rates')->where('iso', '=', $two)->get())->pluck('rates');
      $To = $renat[0];
      //$from = DB::table('currency')
                     //->select(DB::raw('count(*) as user_count, status'))
                    // ->where('status', '<>', 1)
                    // ->groupBy('status')
                    // ->get();
    
      //$To = DB::table('currency')->where('iso', $_GET['To'])->pluck('rates');
      #$To = DB::select('Select rates from currency')->where('iso', '=', "%{$two}%")->get();
       $rez = ($value/$From) * $To;
       echo $rez;
       echo '<br>';
      echo $value;
      echo $From;
      echo '<br>';
      echo $To;
    }
    else{
      echo 'Enter value';
    }

?>
      </div>
    </div>
  </div>

  
 

  @include('footer')
  @endsection
 