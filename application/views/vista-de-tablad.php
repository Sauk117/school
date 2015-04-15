<section>
<?php
    foreach($headers as $header)
    {
        echo "<div class='table_th'>$header</div>";// \" caracter escapado
    }
?>
</section>
<?php
if($docentes!=null && $docentes>0)
{ 
    $counter=0; foreach ($docentes as $docente):  $counter++; ?>
    <section>
        <div>-<?php echo $docente['apellidop'].' '.$docente['apellidom'].' '.$sdocente['nombre'] ??></div><div>-<?php echo $docente['matricula'] ?></div><div><input type="text" name="cal1" id="cal1"></div><div><input type="text" name="cal2" id="cal2"></div><div><input type="text" name="cal3" id="cal3"></div><div><input type="text" name="prom" id="prom"></div>
    </section>
<?php endforeach; 
}?>  