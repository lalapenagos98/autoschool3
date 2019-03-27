<h1 class="page-header">
    <?php echo 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente&a=Estudiantes">Estudiante</a></li>
  <li class="active"><?php echo $clase->id_estu != null ? $clase->Nom_estu : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=clase&a=Guardar" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Estudiante</label>
        <input type="text" name="Nom_estu" value="<?php echo $clase->Nom_estu; ?>" class="form-control" placeholder="" required readonly>
    </div>
    
    <div class="form-group">
        <label>Numero de contacto del estudiante</label>
        <input type="text" name="Cel_estu" value="<?php echo $clase->Cel_estu; ?>" class="form-control" placeholder="" required readonly>
    </div>
    <div class="form-group"> 
        <label>Barrio de residencia del estudiante</label>
        <input type="text" name="Barrio_estu" value="<?php echo $clase->Barrio_estu; ?>" class="form-control" placeholder="" required readonly>
    </div>
    
    <div class="form-group">
        <label>Direccion del estudiante</label>
        <input type="text" name="Direc_estu" value="<?php echo $clase->Direc_estu; ?>" class="form-control" placeholder="" required readonly>
    </div>
    
    <div class="form-group">
        <label>Hora de clase</label>
        <input type="time" name="Hora_clase" class="form-control" placeholder="Ingrese hora de clase" required>
    </div>
     <div class="form-group">
        <label>Fecha de clase</label>
        <input type="date" name="Fecha_clase"  class="form-control" placeholder="Ingrese fecha de clase" required>
    </div>
    <div class="form-group">
        <label>Vehiculo de clase</label>
        <input type="text" name="Vehi_clase"  class="form-control" placeholder="Ingrese vehiculo de clase" required>
    </div>

          <div class="form-group">
        <label>Tipo de clase</label>
          <select name="horas_clase"  class="form-control" required="" >
            <option value="">Seleccione un tipo de clase </option>
            <option value="2">Urbano</option>
            <option value="5">Carretera</option>
        </select>

          </div> 


     <div class="form-group">

        <label>Pofesor de clase</label>

          

<select class="form-control" required="" name="Profe_clase">

    <option value="" >Elija un profesor</option>

<?php foreach ($this->model->Listarp() as $r): ?>
 <option value = "<?php echo $r->nombre_profesor; ?>" ><?php echo $r->nombre_profesor; ?> </option>
       <?php endforeach; ?> 
</select>
     

    </div>




        <input type="hidden" name="id_estu" value="<?php echo $clase->id_estu; ?>" class="form-control"  required>
                <input type="hidden" name="Id_clase" value="<?php echo $clase->Id_clase; ?>" class="form-control"  required>
    
    <hr/>
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-clase").submit(function(){
            return $(this).validate();
        });
    })
</script>