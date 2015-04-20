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
<form  method="post" action="<?=base_url("index.php/welcome/guardarCalif")?>">
    <table>
        <thead>
            <th class="table_th">Nombre</th>
            <th class="table_th">Calificación 1</th>
            <th class="table_th">Calificación 2</th>
            <th class="table_th">Calificación 3</th>
            <th class="table_th">Promedio</th>
        </thead>
        <tbody>
        <?php
        if($asignaciones!=null && $asignaciones>0)
        { 
            $counter=0; 
            foreach ($asignaciones as $asignacion):  $counter++; 
        ?>
                <tr>
                    <td><?= $asignacion['nombre'] ?></td>
                    <td><input type="text" name="cal1[]" class="calif form-control input-sm"></td>
                    <td><input type="text" name="cal2[]" class="calif form-control input-sm"></td>
                    <td><input type="text" name="cal3[]" class="calif form-control input-sm"></td>
                    <td><input type="text" name="prom[]" class="calif form-control input-sm"><input type="hidden" name="alumno[]" value = "<?= $asignacion['id'] ?>"></td>
                </tr>
            <?php endforeach; 
        }?>
        <tr>
            <td colspan="5" style="border: none;" >  
                <input type="submit" value="Guardar" class="btn btn-info btn-xs">
            </td>
        </tr>  
        </tbody>
    </table>

</form>