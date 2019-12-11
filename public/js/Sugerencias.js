var TxtFechaV, TxtCorreoV, TxtNombreV, BtnEnviarV;
var txtdescV;

window.onload = function(e){

TxtFechaV = document.getElementById('txtDate');
TxtCorreoV = document.getElementById('txtCorreo');
TxtNombreV = document.getElementById('txtNombre');
txtdescV = document.getElementById('TxtLongText')
BtnEnviarV = document.getElementById('btnEnviar');

BtnEnviarV.addEventListener('click', function(e){

  e.preventDefault();
  e.stopPropagation();

  var txtnom = TxtNombreV.value;
  var txtcor = TxtCorreoV.value;
  var TxtFecha = TxtFechaV.value;
  var txtdesc = txtdescV.value;
  var notEmptyPattern = /\S+/;

  var valor = true;

  if((/^\s*$/).test(txtnom)){
    valor = false;
    alert("El nombre es requerido");
  }

  if((/^\s*$/).test(txtdesc)){
    valor = false;
    alert("Por favor ingrese una sugerencia");
  }

  if((/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/).test(txtnom)){

  }else{
    valor = false;
    alert("Nombre tiene valores incorrectos");
  }

  if((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(txtcor)){

  }else{
    valor = false;
    alert("Correo tiene valores incorrectos");
  }

  if(!notEmptyPattern.test(TxtFecha)){
      valor = false;
      alert("La Fecha no puede dejarla vacia");
  }
  var tmpDate = Date.parse(TxtFecha);
  if(isNaN(tmpDate)){
      valor = false;
      alert("La Fecha no tiene el formato adecuado");
  }

  if(!valor){
      var errorMsgs = errors.toString().replace(",","\n");
      alert(errorMsgs);
  }else {
      alert('Valores:' + txtnom + ' , ' + txtcor + ' , ' + TxtFecha);
      frmData.submit();
  }


  return false;

});

}
