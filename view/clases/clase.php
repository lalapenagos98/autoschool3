<center><h1  style=" font-family:Bahnschrift Light; class="page-header">Clases </h1></center>


    

<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #D7C504; font-family:Bahnschrift Light; color:#fff">Estudiante</th>
            <th style="width:180px; background-color: #D7C504;   font-family:Bahnschrift Light; color:#fff">Celular</th>
            <th style="width:100px; background-color: #D7C504;  font-family:Bahnschrift Light; color:#fff">Vehiculo</th>
            <th style="width:120px; background-color: #D7C504; font-family:Bahnschrift Light; color:#fff">Profesor</th>
            <th style="width:150px; background-color: #D7C504; font-family:Bahnschrift Light; color:#fff">Fecha (Año/Mes/Día)</th> 
            <th style="width:60px; background-color: #D7C504; font-family:Bahnschrift Light; color:#fff">Hora</th>           
            <th style="width:60px; background-color: #D7C504; font-family:Bahnschrift Light; color:#fff"></th>
            <th style="width:60px; background-color: #D7C504; font-family:Bahnschrift Light; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($this->model->Listar() as $r): ?> 
        <tr>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Nom_estu; ?> </td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Cel_estu; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Vehi_clase ?></td>        
            <td style="font-family:Bahnschrift Light"><?php echo $r->Profe_clase; ?></td>
            <td style="font-family:Bahnschrift Light"><?php echo $r->Fecha_clase; ?></td> 
            <td style="font-family:Bahnschrift Light"><?php echo $r->Hora_clase; ?></td> 

            <td> <a class="btn btn-warning" style="font-family:Bahnschrift Light"; href="?c=clase&a=Crud&Id_clase=<?php echo $r->Id_clase; ?>">Ver</a> </td>
            <td> <a class="btn btn-danger" style="font-family:Bahnschrift Light" onclick="javascript : return confirm('Seguro que desea eliminar esta clase?');"href="?c=clase&a=Eliminar&Id_clase=<?php echo $r->Id_clase; ?>">Eliminar clase</a></td>
            </td>
        </tr>

    <?php endforeach; ?>

    </tbody>
    </table>


    <script src="assets/js/datatable.js"></script>
    <script src="plugins/datatables/dataTables.boostrap.js"></script>
        <script src="assets/js/bootstrap.js"></script>
         <script src="plugins/datatables/dataTables.boostrap.css"></script>



       