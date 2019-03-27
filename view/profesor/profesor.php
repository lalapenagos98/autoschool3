<center><h1  style=" font-family:Bahnschrift Light; class="page-header">Profesores </h1></center>




    <a class="btn pull-right" style= "background-color: #17A589; color:#fff;  font-family:Bahnschrift Light"  href="?c=profesor&a=Crud"  " >Crear nuevo profesor</a>

    

<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #17A589; font-family:Bahnschrift Light; color:#fff">Cedula</th>
            <th style="width:180px; background-color: #17A589;   font-family:Bahnschrift Light; color:#fff">Nombre</th>
            <th style="width:100px; background-color: #17A589;  font-family:Bahnschrift Light; color:#fff">Telefono</th>
            <th style="width:120px; background-color: #17A589; font-family:Bahnschrift Light; color:#fff">Correo</th>
            <th style="width:120px; background-color: #17A589; font-family:Bahnschrift Light; color:#fff">Barrio</th>            
            <th style="width:60px; background-color:#17A589; font-family:Bahnschrift Light; color:#fff"></th>
            <th style="width:60px; background-color: #17A589; font-family:Bahnschrift Light; color:#fff"></th>
            <th style="width:50px; background-color: #17A589; font-family:Bahnschrift Light; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($this->model->Listar() as $r): ?> 
        <tr>
            <td style="font-family:Bahnschrift Light"><?php echo $r->cedula_profesor; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->nombre_profesor; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->telfijo_profesor; ?></td>        
            <td style="font-family:Bahnschrift Light"><?php echo $r->email_profesor; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->barrio_profesor; ?></td>  
            <td> <a class="btn btn-warning" style="font-family:Bahnschrift Light"; href="?c=profesor&a=Crud&id_profesor=<?php echo $r->id_profesor; ?>">Ver</a> </td>
            <td> <a class="btn btn-info" style="font-family:Bahnschrift Light"; href="?c=profesor&a=Crud&id_profesor=<?php echo $r->id_profesor; ?>">Horas realizadas</a> </td>
            <td> <a class="btn btn-danger" style="font-family:Bahnschrift Light"; onclick="javascript : return confirm('Seguro que desea eliminar este usuario?');"href="?c=profesor&a=Eliminar&id_profesor=<?php echo $r->id_profesor; ?>">Eliminar</a></td>
            
        </tr>

    <?php endforeach; ?>

    </tbody>
    </table>


 <script src="assets/js/datatable.js"></script>
    <script src="plugins/datatables/dataTables.boostrap.js"></script>
        <script src="assets/js/bootstrap.js"></script>
         <script src="plugins/datatables/dataTables.boostrap.css"></script>
         

    

     