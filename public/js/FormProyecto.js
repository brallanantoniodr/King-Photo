var TxtNombreV, TxtCorreoV, BtnEnviarV;
var txtNumeroV;
window.onload = function(e){
  TxtNombreV = document.getElementById('TxtNombre');
  TxtCorreoV = document.getElementById('TxtCorreo');
  BtnEnviarV = document.getElementById('BtnEnviar');
  txtNumeroV = document.getElementById('txtNumero');

  BtnEnviarV.addEventListener('click', function(e){

    e.preventDefault();
    e.stopPropagation();
    var TxtNom = TxtNombreV.value;
    var TxtCor = TxtCorreoV.value;
    var notEmptyPattern = /\S+/;
    var txtNum = txtNumeroV.value;

    var valor = true;

    if((/^\s*$/).test(TxtNom)){
      valor = false;
      alert("El nombre es requerido");
    }

    if ((/^[9|3|2|8]{1}[\d]{7}$/).test(txtNum)){

    }else{
      valor = false;
      alert("Numero de telefono invalido");
    }

    if((/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/).test(TxtNom)){

    }else{
      valor = false;
      alert("Nombre tiene valores incorrectos");
    }

    if((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(TxtCor)){

    }else{
      valor = false;
      alert("Correo tiene valores incorrectos");
    }

    if(!valor){
        var errorMsgs = errors.toString().replace(",","\n");
        alert(errorMsgs);
    }else {
        frmData.submit();
    }

    return false;

  });

}
