<h1 class="page-header">
    <?php echo $cliente->id_estu != null ? $cliente->Nom_estu : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente&a=Estudiantes">Estudiante</a></li>
  <li class="active"><?php echo $cliente->id_estu != null ? $cliente->Nom_estu : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_estu" value="<?php echo $cliente->id_estu; ?>" />
      <div class="form-group">
        <label>Cedula</label>
        <input type="text" name="cedula_estu" value="<?php echo $cliente->cedula_estu; ?>" class="form-control" placeholder="Ingrese cedula" required>
    </div>
    
    <div class="form-group ">
        <label>Nombre</label>
        <input type="text" name="Nom_estu" value="<?php echo $cliente->Nom_estu; ?>" class="form-control" placeholder="Ingrese nombre" required>
    </div>
    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="date" name="Fena_estu" value="<?php echo $cliente->Fena_estu; ?>" class="form-control" placeholder="Ingrese fecha de nacimento" required>
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Tel_estu" value="<?php echo $cliente->Tel_estu; ?>" class="form-control" placeholder="Ingrese  apellido" required>
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="Email_estu" value="<?php echo $cliente->Email_estu; ?>" class="form-control" placeholder="Ingrese correo electrónico" required>
    </div>
     <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="Direc_estu" value="<?php echo $cliente->Direc_estu; ?>" class="form-control" placeholder="Ingrese dirección" required>
    </div>
    <div class="form-group">
        <label>Nivel escolar</label>

        <select name="Nivesc_estu" class="form-control" placeholder="Ingrese categoria" required >


<?php if ($cliente->Nivesc_estu=="Ninguno") {?>
    

    <option value="">Seleccione una opcion</option>     
   <option value="Ninguno" selected="">Ninguno</option> 
   <option value="Primaria">Primaria</option>
    <option value="Secundaria">Secundaria</option> 
    <option value="Profesional">Profesional</option>  



<?php } elseif($cliente->Nivesc_estu=="Primaria") { ?>

    <option value="">Seleccione una opcion</option>     
   <option value="Ninguno" >Ninguno</option> 
   <option value="Primaria" selected="">Primaria</option>
    <option value="Secundaria">Secundaria</option> 
    <option value="Profesional">Profesional</option>
    <option value="Otro">Otro</option>  


<?php } elseif($cliente->Nivesc_estu=="Secundaria") { ?>

    <option value="">Seleccione una opcion</option>     
   <option value="Ninguno" >Ninguno</option> 
   <option value="Primaria" >Primaria</option>
    <option value="Secundaria" selected="">Secundaria</option> 
    <option value="Profesional">Profesional</option>  
    <option value="Otro">Otro</option>


<?php } elseif($cliente->Nivesc_estu=="Profesional") { ?>

    <option value="">Seleccione una opcion</option>     
   <option value="Ninguno" >Ninguno</option> 
   <option value="Primaria" >Primaria</option>
    <option value="Secundaria" >Secundaria</option> 
    <option value="Profesional" selected="">Profesional</option>  
    <option value="Otro">Otro</option>

  <?php } elseif($cliente->Nivesc_estu=="Otro") { ?>

    <option value="">Seleccione una opcion</option>     
   <option value="Ninguno" >Ninguno</option> 
   <option value="Primaria" >Primaria</option>
    <option value="Secundaria" >Secundaria</option> 
    <option value="Profesional">Profesional</option>  
    <option value="Otro" selected="">Otro</option>

<?php }else{ ?>

    <option value="">Seleccione una opcion</option>     
   <option value="Ninguno" >Ninguno</option> 
   <option value="Primaria" >Primaria</option>
    <option value="Secundaria" >Secundaria</option> 
    <option value="Profesional">Profesional</option> 
    <option value="Otro">Otro</option>

<?php } ?>

</select>
    </div>
    <div class="form-group">
        <label>RH</label>
        <input type="text" name="Rh_estu" value="<?php echo $cliente->Rh_estu; ?>" class="form-control" placeholder="Ingrese rh" required>
    </div>
     <div class="form-group">
        <label>Celular</label>
        <input type="text" name="Cel_estu" value="<?php echo $cliente->Cel_estu; ?>" class="form-control" placeholder="Ingrese celular" required>
    </div>
    <div class="form-group">
        <label>Barrio</label>
        <input type="text" name="Barrio_estu" value="<?php echo $cliente->Barrio_estu; ?>" class="form-control" placeholder="Ingrese barrio" required>
    </div>
    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="Cat_estu" value="<?php echo $cliente->Cat_estu; ?>" class="form-control" placeholder="Ingrese categoria" required>
    </div>
    <div class="form-group">
        <label>Certificado medico</label>
       
<select name="Certimedico_estu" class="form-control"  required >


<?php if ($cliente->Certimedico_estu==1) {?>
    

    <option value="">Seleccione una opcion</option>     
   <option value="1" selected="">Si</option> 
   <option value="0">No</option> 

<?php } elseif($cliente->Certimedico_estu==0) { ?>

    <option value="">Seleccione una opcion</option>     
   <option value="1" >Si</option> 
   <option value="0" selected="">No</option> 

<?php } ?>

</select>

 <div class="form-group ">
        <label>Numero de recibo de caja</label>
        <input type="text" name="recibodecaja_estu" value="<?php echo $cliente->recibodecaja_estu; ?>" class="form-control" placeholder="Ingrese N° recibo de caja" required>
    </div>

    <div class="form-group">
        <label>numero de remisión</label>
        <input type="text" name="remision_estu" value="<?php echo $cliente->remision_estu; ?>" class="form-control" placeholder="Ingrese N° de revisión" required>
    </div>


        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-Cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>