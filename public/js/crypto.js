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
        $('#Form').on("change",function(){
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

