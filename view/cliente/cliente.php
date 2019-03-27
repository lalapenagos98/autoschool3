<center><h1  style=" font-family:Bahnschrift Light; class="page-header">Estudiantes </h1></center>




    <a class="btn pull-right" style="background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff" href="?c=cliente&a=Crud"  " >Crear nuevo estudiante</a>

    

<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff">cedula</th>
            <th style="width:180px; background-color: #5DACCD;   font-family:Bahnschrift Light; color:#fff">Nombre</th>
            <th style="width:100px; background-color: #5DACCD;  font-family:Bahnschrift Light; color:#fff">Telefono</th>
            <th style="width:120px; background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff">correo</th>
            <th style="width:120px; background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff">Barrio</th>            
            <th style="width:60px; background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; font-family:Bahnschrift Light; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($this->model->Listar() as $r): ?> 
        <tr>
            <td style="font-family:Bahnschrift Light"><?php echo $r->cedula_estu; ?> </td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Nom_estu; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Tel_estu; ?></td>        
            <td style="font-family:Bahnschrift Light"><?php echo $r->Email_estu; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Barrio_estu; ?></td>  
            <td> <a class="btn btn-warning" style="font-family:Bahnschrift Light"; href="?c=cliente&a=Crud&id_estu=<?php echo $r->id_estu; ?>">Ver</a> </td>
            <td> <a class="btn btn-info" style="font-family:Bahnschrift Light"; href="?c=clase&a=Crud1&id_estu=<?php echo $r->id_estu; ?>">Agendar clase</a> 
            <td> <a class="btn btn-danger" style="font-family:Bahnschrift Light"; onclick="javascript : return confirm('Seguro que desea eliminar este usuario?');"href="?c=cliente&a=Eliminar&id_estu=<?php echo $r->id_estu; ?>">Eliminar</a></td>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>
    </table>


 <script src="assets/js/datatable.js"></script>
    <script src="plugins/datatables/dataTables.boostrap.js"></script>
        <script src="assets/js/bootstrap.js"></script>
         <script src="plugins/datatables/dataTables.boostrap.css"></script>
         

    

     