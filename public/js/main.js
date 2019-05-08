$.getJSON( "/currency.json", function( data ) {

    var From;
    var To;
    var Amount;
    var From_iso_value;
    var To_iso_value;

        // $('#From').on("change",function(){
        //     From = $("#From option:selected").attr('value'); 
        //     return data[From][0]['rates'];
        // });

        $('#Form').on("change",function(){ 
            Amount = document.getElementById("Amount").value;
            From_iso_value = $("#From option:selected").attr('value'); 
            From = data[From_iso_value][0]['rates'];
            To_iso_value = $("#To option:selected").attr('value');
            To = data[To_iso_value][0]['rates'];
            console.log((Amount/From) * To);
        });
    

  });