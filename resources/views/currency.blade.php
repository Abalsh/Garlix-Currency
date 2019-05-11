@extends('header')

@section('content')

  <div class="card">
    <div class="card-body">
        <h3>
            <small class="text-muted"><span id="color">Fiat Currency converter</span></small>
        </h3>
      <div class="input-group">
      <br>
      <form id="Form">
        <br>
        <input style="width: 250px;" type="number" placeholder="Enter Amount to Convert" step="0.01" min="0" id="Amount" class="form-control" value="1">
        
        <br>
        <div class="row from" >
            <div class="col">
              <div id="select-from-container">
              <select name="selValue1" class="selectpicker border" data-show-subtext="true" data-live-search="true" data-size="5" id="From">
                @foreach ($currencies as $item)
                  <option  class="form-control" value="{{ $item->iso }}">{{ $item->name }} - {{ $item->iso }}</option>
                @endforeach
              </select>
            </div>
            </div>
      <button onclick="swapValues();" type="button" id="swap" style="background:none; border:none;"><i class="fa fa-exchange" style="font-size:36px; color: #3C1C78;"></i></button>

      <br>
      
      <div class="col to">
          <div id="select-from-container">
          <select name="selValue2" class="selectpicker border" data-show-subtext="true" data-live-search="true" data-size="5" id="To">
            @foreach ($currencies as $item)
              <option class="form-control" value="{{ $item->iso }}" selected>{{ $item->name }} - {{ $item->iso }}</option>
            @endforeach
          </select>
          </div>
        </div>
      </div>
      <br> <br> 
      </form>
      <div class="row" style="padding-top: 10px;">
          <div class="col">
            
      <blockquote class="blockquote">
          <h2 class="mb-0" id="color"><span id="amount">1</span> <span id="from">USD</span></h2>
      </blockquote>
          </div>
          <span  class="blockquote" id="mb-0" style="color: black;"> = </span>
          <div class="col">
      <blockquote class="blockquote">
          <h2 class="mb-0" id="color" style="margin-left: 20px;"><span id="rezult">0.89</span> <span id="to">EUR</span></h2>
      </blockquote>
          </div>
      </div>
      
      {{-- <h1 style="padding-top: 50px;" id="color">Amount:  <span id="amount"></span><span id="from"></span>:<span id="rezult"></span><span id="to"></span></h1> --}}
      <?php
        // if( isset($_GET["From"]) && isset($_GET["Amount"]) && isset($_GET["To"])) 
        // {
        //   if (!empty($_GET["From"]) && !empty($_GET["Amount"]) && !empty($_GET["To"])){

        //     $value = $_GET['Amount']; 
                      
        //     $arrFrom = (DB::table('currency')->select('rates')->where('iso', '=', $_GET['From'])->get())->pluck('rates');
        //     $From = $arrFrom[0];

        //     $arrTo = (DB::table('currency')->select('rates')->where('iso', '=', $_GET['To'])->get())->pluck('rates');
        //     $To = $arrTo[0];
            
        //     $rez = ($value/$From) * $To;
        //     echo $rez;
        //   }
        // }
      ?>
      </div>
    </div>
  </div>

  

    {{-- <script>
      function swapValues(){
        var tmp = document.getElementById("From").value;
        document.getElementById("From").value = document.getElementById("To").value;
        document.getElementById("To").value = tmp;
      }

             var request = new XMLHttpRequest()

        // Open a new connection, using the GET request on the URL endpoint

        request.open('GET', 'http://127.0.0.1:8000/api', true)
        request.onload = function() {
          // Begin accessing JSON data here
          var data = JSON.parse(this.response)

          if (request.status >= 200 && request.status < 400) {
            // for(var i = 0; i < 33; i++){
            //   console.log(data[i]['iso']);
            // }
            var From = document.getElementById("From").value;
            var To = document.getElementById("To").value;
            var Fromjs = data[0]['rates'];
            var Tojs = data[1]['rates'];
            var value = document.getElementById("Amount");
            cbootstrap dropdown downonsole.log(calculate(Fromjs, Tojs, Value));
          } 
          else{
            console.log('error')
          }

          // Send request
          request.send()

        } 
          

      function calculate(one, two, thre){
        return (three/one) * two;
      }
        
    </script> --}}
 

  @include('footer')
  
  @endsection
 