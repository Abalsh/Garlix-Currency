$.ajax({
    url: "/api/crypto",
    dataType: 'json',
    success: function(data){
        var From;
        var To;
        var Amount;
        var From_iso_value;
        var To_iso_value;
        var rez;
        $('#Form').on("keyup change",function(){
            Amount = document.getElementById("Amount").value;
            From_iso_value = $("#From option:selected").attr('value'); 
            From = data[From_iso_value];
            To_iso_value = $("#To option:selected").attr('value');
            To = data[To_iso_value];
            rez = ((Amount/To) * From);

            document.getElementById("from").innerHTML = $("#From option:selected").attr('value');
            document.getElementById("to").innerHTML = $("#To option:selected").attr('value');
            document.getElementById("rezult").innerHTML = rez.toFixed(3);   
            document.getElementById("amount").innerHTML = Amount;            
            
        });

        

    }
  });

  $.noConflict();
  function swapValues() {
      var dropfrom = $("#From option:selected").attr('value'); 
      var dropto = $("#To option:selected").attr('value'); 
      

      if (dropfrom != dropto){
          $('#From option:selected').val(dropto).trigger('change');
          $('#To option:selected').val(dropfrom).trigger('change');
      }

      var tmp = $('#From option:selected').text();
      var tmpe = $('#To option:selected').text()

      $('#From option:selected').html(tmpe)[0].innerHTML;
      $('#To option:selected').html(tmp)[0].innerHTML;


      $('#From select').selectpicker();
      $('#To select').selectpicker();

      // $('select[name=selValue1]').val(dropto);
      // $('select[name=selValue2]').val(dropfrom);
      $('.selectpicker').selectpicker('refresh');

      console.log($('#From option:selected').html(tmpe)[0].innerHTML);
  }

