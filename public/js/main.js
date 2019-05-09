$("#go").click( function()
                {
                    $('#From').attr('id', 'To');
                    $('#To').attr('id', 'From');

                }
                );

    $.ajax({
        url: "/api",
        dataType: 'json',
        success: function(data){
            var From;
            var To;
            var Amount;
            var From_iso_value;
            var To_iso_value;
            $('#Form').on("change",function(){
                
                Amount = document.getElementById("Amount").value;
                From_iso_value = $("#From option:selected").attr('value'); 
                From = data[From_iso_value];
                To_iso_value = $("#To option:selected").attr('value');
                To = data[To_iso_value];
                console.log((Amount/From) * To);
            });
        }
      });