$(document).ready(function() {

    $('#resultado').hide();

    // assuming the controls you want to attach the plugin to
    // have the "datepicker" class set
    $('#check-in').Zebra_DatePicker({
        format: 'Y-m-d H:i',
        default_position: 'below',
        first_day_of_week: '0',
        direction: '0'
    });
    $('#check-out').Zebra_DatePicker({
        format: 'Y-m-d H:i',
        default_position: 'below',
        first_day_of_week: '0',
        direction: '0'
    });

    /**
     * This function get the values from the check in and the check out text inputs.
     */




     
    $("#reserva").click(function(){

        if($("#check-in").val() == "" || $("#check-out").val() == ""){
            swal("No podemos cotizar","Debes llenar los campos para poder continuar. Gracias¡","error");
            return;
        }
        //alert($("#check-in").val());
        //alert($("#check-out").val());
        //Get 1 day in milliseconds
        var one_day = 1000*60*60*24;

        //Get 1 hour in milliseconds
        var one_hour = 1000*60*60;

        //Get the check in date
        var checkin = new Date($("#check-in").val());

        //Get the check out date
        var checkout = new Date($("#check-out").val());

        // Calculate the difference in milliseconds
        var difference_ms = checkout - checkin;
            
        // Convert back to days and return
        var estancia = Math.round(difference_ms/one_day);

        // Convert back to hours and return
        var estanciaHoras = Math.ceil(difference_ms/one_hour);

        var horasExtra = estanciaHoras - (estancia*24);

        //List of prices.
        var prices = [
            0, 109, 218, 327, 436, 545, 600, 
            600, 709, 818, 927, 1036, 1150
        ];

        //List of the cost for extra hours.
        var extra = [0, 11, 22, 33, 44, 55, 66, 77, 88,99];

        var minuteIn = checkin.getMinutes();
        var hourIn = checkin.getHours();
        var minuteOut = checkout.getMinutes();
        var hourOut = checkout.getHours();

        var dayIn = checkin.getDate();
        var monthIn = checkin.getMonth()+1; 
        var yearIn = checkin.getFullYear();

        var dayOut = checkout.getDate();
        var monthOut = checkout.getMonth()+1; 
        var yearOut = checkout.getFullYear();
        // Variables that we use when estancia > 28 
        var diferencia = estancia - 28;
        var month = 12;
        var estanciaProlongada = (prices[month]+prices[diferencia]);
        var estanciaProlHoras= (estanciaProlongada+extra[horasExtra]);

        if(dayIn < 10) 
        {
            dayIn = '0' + dayIn;
        } 
        if(monthIn < 10) 
        {
            monthIn = '0' + monthIn;
        }
        if(dayOut < 10) 
        {
            dayOut = '0' + dayOut;
        } 
        if(monthOut < 10) 
        {
            monthOut = '0' + monthOut;
        }
        if(minuteIn < 10) 
        {
            minuteIn = '0' + minuteIn;
        }
        if(minuteOut < 10) 
        {
            minuteOut = '0' + minuteOut;
        }
        if(hourIn < 10) 
        {
            hourIn = '0' + hourIn;
        }
        if(hourOut < 10) 
        {
            hourOut = '0' + hourOut;
        }



        checkin = dayIn + '/' + monthIn + '/' + yearIn;
        checkout = dayOut + '/' + monthOut + '/' + yearOut

        $('#cotizador').hide();
        $('#resultado').show();
        $('#titulo').text("Encontramos algo para ti");
        $('#spanFechaLlegada').text(checkin);
        $('#spanHoraLlegada').text(hourIn + ':' + minuteIn);
        $('#spanFechaSalida').text(checkout);
        $('#spanHoraSalida').text(hourOut + ':' + minuteOut);
        $('#spanEstancia').text(estancia + ' días');

        $('#inFechaLlegada').val(checkin);
        $('#inHoraLlegada').val(hourIn + ':' + minuteIn);
        $('#inFechaSalida').val(checkout);
        $('#inHoraSalida').val(hourOut + ':' + minuteOut);
        $('#inEstancia').val(estancia + ' días');

        if(estancia > 11 && estancia <= 28){

            $('#spanTotal').text("$" + (prices[12]) + ".00");
            $('#inTotal').val("$" + (prices[12]) + ".00");
            $('#spanRestante').text('$'+ (prices[12] - prices[1]) + ".00")
        }
        else{
            if(horasExtra > 0 && horasExtra < 10){
                $('#spanTotal').text("$" + (prices[estancia] + extra[horasExtra]) + ".00");
                $('#inTotal').val("$" + (prices[estancia] + extra[horasExtra]) + ".00");
                $('#spanRestante').text('$'+ (prices[estancia] - prices[1]) + ".00")
            }
            if(horasExtra>= 5 && estancia == 5 || estancia==6 || estancia==7 && horasExtra < 1  ){
                $('#spanTotal').text("$" + "600" + ".00");
                $('#inTotal').val("$" + "600" + ".00");
                $('#spanRestante').text('$'+ (prices[estancia] - prices[1]) + ".00")
            }
            if(horasExtra > 9){
                $('#spanTotal').text("$" + (prices[estancia + 1]) + ".00");
                $('#inTotal').val("$" + (prices[estancia + 1]) + ".00");
                $('#spanRestante').text('$'+ (prices[estancia] - prices[1]) + ".00")
            }
            if(horasExtra < 1){
                $('#spanTotal').text("$" + (prices[estancia]) + ".00");
                $('#inTotal').val("$" + (prices[estancia]) + ".00");
                $('#spanRestante').text('$'+ (prices[estancia] - prices[1]) + ".00")
            }  
            
    

    // What to do in case of estancia<28
            if(estancia>39 && estancia<=56){
                $('#spanTotal').text("$" + (prices[month]*2) + ".00");
                $('#inTotal').val("$" + (prices[month]*2) + ".00");
                $('#spanRestante').text('$'+ (prices[month]*2 - prices[1]) + ".00")
                           }
                           if( estancia>=29&&estancia<=39){
                            $('#spanTotal').text("$" + (estanciaProlongada) + ".00");
                            $('#inTotal').val("$" + (estanciaProlongada) + ".00");
                            $('#spanRestante').text('$'+ (estanciaProlongada - prices[1]) + ".00");

                                         if(horasExtra > 0 && horasExtra < 10){
                                             $('#spanTotal').text("$" + (estanciaProlHoras) + ".00");
                                             $('#inTotal').val("$" + (estanciaProlHoras) + ".00");
                                             $('#spanRestante').text('$'+ (estanciaProlHoras - prices[1]) + ".00")
                                         } 
                                         if(horasExtra>= 5 && diferencia == 5 || diferencia==6 || diferencia==7 && horasExtra < 1  ){
                                             $('#spanTotal').text("$" + (prices[12]+600) + ".00");
                                             $('#inTotal').val("$" + (prices[12]+600) + ".00");
                                             $('#spanRestante').text('$'+ (prices[12]+600 - prices[1]) + ".00");
                                         }
                                             if(horasExtra > 9){
                                                     $('#spanTotal').text("$" + (prices[month]+prices[diferencia + 1]) + ".00");
                                                     $('#inTotal').val("$" + (prices[month]+prices[diferencia + 1]) + ".00");
                                                     $('#spanRestante').text('$'+ (prices[month]+prices[diferencia] - prices[1]) + ".00");
                         
                                                 }
                                                     if(horasExtra < 1){
                                                             $('#spanTotal').text("$" + (estanciaProlongada) + ".00");
                                                             $('#inTotal').val("$" + (estanciaProlongada) + ".00");
                                                             $('#spanRestante').text('$'+ (estanciaProlongada - prices[1]) + ".00");
                         
                                                         }
                                                        
                           }            else{
                          
                                                    

                            }
    // Ends the time from 39 days to 56  
            
        };

        $('#spanApartado').text('$'+(prices[1])+ ".00")
        


        return false;
    });
});