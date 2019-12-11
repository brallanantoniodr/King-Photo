<?php
require_once('logs.model.php');

  $id = 0;
  $msj = "";
    if(isset($_POST["btnEnviar"])){
      switch ($_POST["TipoCamilla"]) {
        case 'NRM':
          $tipoCamilla = "Normal";
          break;
          case 'EMR':
            $tipoCamilla = "Emergencia";
            break;
        default:
            $tipoCamilla = "Unidades Cuidados Intensivos";
          break;
      }

      switch ($_POST["EstadoCamilla"]) {
        case 'BNO':
          $estadoCamilla = "Bueno";
          break;
          case 'DAÑ':
            $estadoCamilla = "Dañado";
            break;
            case 'BJA':
              $estadoCamilla = "Baja";
              break;
        default:
            $estadoCamilla = "Obsoleto";
          break;
      }

      if($_POST["SalaCamilla"] == "" || $_POST["CodigoBarra"] == ""){
        $msj = "Error llene los campos requeridos";
      }
        else {
            $id = agregarLog($_POST["SalaCamilla"],$_POST["CodigoBarra"],$tipoCamilla,$estadoCamilla);
        }
      }

  if(isset($_POST["btnRevisar"])){

    switch ($_POST["TipoCamilla"]) {
      case 'NRM':
        $tipoCamilla = "Normal";
        break;
        case 'EMR':
          $tipoCamilla = "Emergencia";
          break;
      default:
          $tipoCamilla = "Unidad Cuidados Intensivos";
        break;
    }

    switch ($_POST["EstadoCamilla"]) {
      case 'BNO':
        $estadoCamilla = "Bueno";
        break;
        case 'DAÑ':
          $estadoCamilla = "Dañado";
          break;
          case 'BJA':
            $estadoCamilla = "Baja";
            break;
      default:
          $estadoCamilla = "Obsoleto";
        break;
    }

    if($_POST["Id"] == ""){
      $msj = "Error ID requerida";
    }
    else
      if($_POST["Sala_Camilla"] == "" || $_POST["Codigo_Barra"] == ""){
      $msj = "Error llene los campos requeridos";
      }
    else{
      actualizarLog($_POST["Sala_Camilla"],$_POST["Codigo_Barra"], $tipoCamilla, $estadoCamilla,$_POST["Id"]);
    }
  }
  if(isset($_POST["btnEliminar"])){
    if($_POST["Id"] == ""){
      $msj = "Error ID requerida";
    }
    else {
      eliminarLog($_POST["Id"]);
    }
  }
  $logs = obtenerLogs()
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mantenimiento</title>
  </head>
  <body>
    <h1>Camillas Encontradas</h1>
    <table border="2"><tr>
      <?php
      $row = 0;
      foreach($logs as $log){
        if($row===0){
            foreach($log as $colname => $colval){
        ?>
            <th>
              <?php  echo $colname; ?>
            </th>
      <?php
                } // end for colname
              } // end if
      ?>
      <tr>
          <?php
          $colnum = 0;
          $codigo = 0;
          foreach($log as $col){ ?>
            <td>
              <?php if($colnum==0) {
                        $codigo = $col;
                        $colnum=1;
                      }
                      echo $col;
                ?>
            </td>
          <?php } //end foreach log?>
      </tr>
    <?php
          $row ++;
          } //end foreach logs
      ?>
    </table>
    <h2>Datos del Cliente</h2>
    <form action="ej1_mysqliconn.php" method="post">
      <label>Sala Camilla</label>
      <input type="number" name="SalaCamilla" value=""><br/>
      <label>Codigo de Barra</label>
      <input type="number" name="CodigoBarra" value=""><br/>

      <label>Hospital Tipo Camilla </label>
      <select name="TipoCamilla">
        <option>Normal</option>
        <option>Emergencia</option>
        <option>Unidad Cuidados Intensivos</option>
      </select><br/>

      <label>Estado Camilla</label>
      <select name="EstadoCamilla">
        <option>Bueno</option>
        <option>Dañado</option>
        <option>Baja</option>
        <option>Obsoleto</option>
      </select><br/>

      <input type="submit" value="Ingresar Camilla" name="btnEnviar"  /><br/>

      <h2>Actualizar o Eliminar un Registro</h2>
      <label>Ingrese ID</label>
      <input type="text" name="Id" value="">
      <input type="hidden" name="codigo" value="<?php echo $codigo; ?>" />
      <input type="submit" value="Actualizar" name="btnRevisar" />
      <input type="submit" value="Eliminar" name="btnEliminar" />

      <div >
        <?php echo $msj ?>
      </div>

    </form>
  </body>
</html>
