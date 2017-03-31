<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<meta charset="UTF-8">
<title>Title of the document</title

</head>

<body>
    <h1>Formulario de registro</h1>
    <div>

  <!-- Nombre de tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Registrar</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Listar</a></li>

  </ul>

  <!-- Contenido de tabs -->
  <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="home">


          <form method="POST" action="<?php echo base_url('Usuario_controller/insertarUsuarioController')?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Perfil</label>
                <select name="optPer" class="form-control">
                    <!--Así se llama on ddl con datos. Los datos vienen del modelo, hacia el controller, y se llama del controlle.-->
                    <?php foreach ($selectPerfilController as $key => $value) { ?>
                        <option value="<?php echo $value->id_per?>"> <?php echo $value->nombre_per;?> </option>
                    <?php }?>
                </select>
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" name="txtNombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input type="text" name="txtApellido" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="Correo">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Teléfono</label>
    <input type="text" name="txtTelefono" class="form-control" id="exampleInputEmail1" placeholder="Teléfono">
  </div>
 <button type="submit" class="btn btn-default">Registrar</button>
</form>

      </div>


      <!--Otro trab-->

      <div role="tabpanel" class="tab-pane" id="profile">

          <table class="table table-hover ">
                <thead>
                <th>ID</th>
                <th>Perfil</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acción</th>
                <th></th>
                </thead>
                    <?php foreach ($listarUsuariosController as $value){?>
                <tr>
                            <td><?php echo $value->id_usu; ?></td>
                            <td><?php echo $value->nombre_per; ?></td>
                            <td><?php echo $value->nombre_usu; ?></td>
                            <td><?php echo $value->apellido_usu; ?></td>
                            <td><?php echo $value->correo_usu; ?></td>
                            <td><?php echo $value->telefono_usu; ?></td>
                            <td>
                                <a href="<?php echo base_url('Usuario_controller/borrarUsuarioController/').$value->id_usu?>" title="Eliminar"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                <a href="<?php echo base_url('Usuario_controller/editarUsuarioController/').$value->id_usu?>" title="Modificar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                    <?php } ?>
                <tbody>

                </tbody>
          </table>

      </div>

  </div>

</div>




<?php

/*
echo "wena watón";
print_r($selectPerfil);
*/

?>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
