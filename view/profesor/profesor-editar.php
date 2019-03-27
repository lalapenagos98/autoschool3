<h1 class="page-header">
    <?php echo $profesor->id_profesor != null ? $profesor->nombre_profesor : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=profesor&a=Profesores">Profesor</a></li>
  <li class="active"><?php echo $profesor->id_profesor != null ? $profesor->nombre_profesor : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=profesor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_profesor" value="<?php echo $profesor->id_profesor; ?>" />
      <div class="form-group">
        <label>Cedula</label>
        <input type="text" name="cedula_profesor" value="<?php echo $profesor->cedula_profesor; ?>" class="form-control" placeholder="Ingrese cedula" required>
    </div>
    
    <div class="form-group ">
        <label>Nombre</label>
        <input type="text" name="nombre_profesor" <?php echo $profesor->id_profesor != null ? 'readonly= " "' : ''; ?> value="<?php echo $profesor->nombre_profesor; ?>" class="form-control" placeholder="Ingrese nombre" required>
    </div>
    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="date" name="fechana_profesor" value="<?php echo $profesor->fechana_profesor; ?>" class="form-control" placeholder="Ingrese fecha de nacimento" required>
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telfijo_profesor" value="<?php echo $profesor->telfijo_profesor; ?>" class="form-control" placeholder="Ingrese  apellido" required>
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="email_profesor" value="<?php echo $profesor->email_profesor; ?>" class="form-control" placeholder="Ingrese correo electrónico" required>
    </div>

     <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion_profesor" value="<?php echo $profesor->direccion_profesor; ?>" class="form-control" placeholder="Ingrese dirección" required>
    </div>

    <div class="form-group">
        <label>RH</label>
        <input type="text" name="rh_profesor" value="<?php echo $profesor->rh_profesor; ?>" class="form-control" placeholder="Ingrese rh" required>
    </div>

     <div class="form-group">
        <label>Celular</label>
        <input type="text" name="celular_profesor" value="<?php echo $profesor->celular_profesor; ?>" class="form-control" placeholder="Ingrese celular" required>
    </div>

    <div class="form-group">
        <label>Barrio</label>
        <input type="text" name="barrio_profesor" value="<?php echo $profesor->barrio_profesor; ?>" class="form-control" placeholder="Ingrese barrio" required>
    </div>

        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-profesor").submit(function(){
            return $(this).validate();
        });
    })
</script>