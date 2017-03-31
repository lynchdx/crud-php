<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="public/js/jquery.min.js"></script>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<form method="POST" action="<?php echo base_url('Usuario_controller/modificarUsuarioController')?>">

   <?php foreach ($datosUsuario as $value){ ?>

   <input type="hidden" name="txtIdUsuario" value="<?php echo $value->id_usu; ?>">


           <div class="form-group">
               <label for="exampleInputEmail1">Perfil</label>

                   <?php
                   $lista = array();
                   foreach ($selectPerfilController as $registro) {
                       $lista[$registro->id_per] = $registro->nombre_per;

                   }

                   //en config, autoload, en $autoload['helper'] = array poner form
                   echo form_dropdown('optPer',$lista, $value->id_per, 'class="form-control"');
                   ?>

           </div>

   <div class="form-group">
   <label for="exampleInputPassword1">Nombre</label>
   <input type="text" name="txtNombre" class="form-control" id="exampleInputPassword1" value="<?php echo $value->nombre_usu; ?>">
 </div>

   <div class="form-group">
   <label for="exampleInputEmail1">Apellido</label>
   <input type="text" name="txtApellido" class="form-control" id="exampleInputEmail1" value="<?php echo $value->apellido_usu; ?>">
 </div>

   <div class="form-group">
   <label for="exampleInputEmail1">Correo</label>
   <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" value="<?php echo $value->correo_usu; ?>">
 </div>

   <div class="form-group">
   <label for="exampleInputEmail1">Teléfono</label>
   <input type="text" name="txtTelefono" class="form-control" id="exampleInputEmail1" value="<?php echo $value->telefono_usu; ?>">
 </div>
  <?php  }?>
<button type="submit" class="btn btn-default">Modificar</button>
</form>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>


<?php

//cargar los datos recuperados
//print_r($datosUsuario);
