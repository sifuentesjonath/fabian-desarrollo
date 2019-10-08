$(document).ready(function() {

    OpenPay.setId('mxr5cuiz4h15togw5xyw');
    OpenPay.setApiKey('pk_04b526e095b44b06b8c817939ab78bf6');
    OpenPay.setSandboxMode(true);
    //Se genera el id de dispositivo

    var deviceSessionId = OpenPay.deviceData.setup("payment-form", "deviceIdHiddenFieldName");  

    $('#pay-button').on('click', function(event) {
        event.preventDefault();
        $("#pay-button").prop( "disabled", true);
        OpenPay.token.extractFormAndCreate('payment-form', sucess_callbak, error_callbak);    
    });

  

    const myAmount = document.getElementById("amount").value;

    var sucess_callbak = function(response) {   
      var token_id = response.data.id;
      var url = 'https://api.macparkk.mx:3002/api/payouts';
      var body=({token_id:response.data.id,id:deviceSessionId,nocard:response.data.card.card_number,name:response.data.card.holder_name,amount:myAmount,client_email:document.getElementById("emailV").value});
      // Variable con la información de el mail, en el metodo post  a continuación que llama a reservacion.php
      // var mail_info=({inFechaLlegada:document.getElementByName("inFechaLlegada").value,inHoraLlegada:document.getElementsByName("inHoraLlegada").value,inEstancia:document.getElementsByName("inEstancia"), inFechaSalida:document.getElementsByName("inFechaSalida"),
      // inHoraSalida:document.getElementsByName("inHoraSalida"),reservation_name:document.getElementByName("reservation_name"),reservation_email:document.getElementsByName("reservation_email"),
      // reservation_phone:document.getElementsByName("reservation_phone"),inTotal:document.getElementsByName("inTotal")});
      $.post(url,body,{headers: {'Content-Type':'application/json'}}).then(function(res)  {
        console.log(res);
        debugger
        if(res.state===true){
                  swal("Todo Salió bien","Recibirás tu comprobante a la brevedad, te esperamos.","success" ); 
                  setTimeout(() => {
                    swal("Recuerda imprimir tu comprobante","Lo necesitarás al llegar para comprobar","info");
                  }, 4000);    
                  setTimeout(()=>{
                    $('#token_id').val(token_id);
                    // función llamar a reservacion.php
                    // $.post("php/reservacion.php",mail_info);
                    $('#payment-form').submit();
                  },5000);    
        }
        else{
                  swal("Avertencia","No se logró hacer el cargo.","warning" )
        }
      });
    };

    var error_callbak = function(response) {
        var desc = response.data.description != undefined ? response.data.description : response.message;

        swal("UPS.. ocurrió un error [" + response.status + "] ",'Revisa bien tu información porfavor, disculpa las molestias. \n Todos los campos son requeridos ',"error");
        $("#pay-button").prop("disabled", false);
    };
});