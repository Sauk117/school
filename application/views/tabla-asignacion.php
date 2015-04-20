<style type="text/css">
 table{
        width:100%;
    }

    .table_th {
        background-color: #A9D5E9;
        color: #436477;
        font-weight: bold;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border: solid 1pt;
        width: 25%;
    }
    td{
          border: solid 1px darkcyan;
    }
</style>
<table>
    <thead>
        <th class="table_th">Nivel</th>
        <th class="table_th">Grado</th>
        <th class="table_th">Grupo</th>
        <th class="table_th">Materia</th>
    </thead>
    <tbody>
    <?php
    if($asignaciones!=null && $asignaciones>0)
    { 
        $counter=0; 
        foreach ($asignaciones as $asignacion):  $counter++; 
    ?>
            <tr>
                <td><?php echo $asignacion['nivel'] ?></td>
                <td><?= $asignacion['grado'] ?></td>
                <td><?php echo $asignacion['grupo'] ?></td>
                <td><?php echo $asignacion['materia'] ?></td>
            </tr>
        <?php endforeach; 
    }?>  
    </tbody>
</table>