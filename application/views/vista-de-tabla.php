<section>
<?php
    foreach($headers as $header)
    {
        echo "<div class='table_th'>$header</div>";// \" caracter escapado
    }
?>
</section>
<?php
if($alumnos!=null)
{ 
    $counter=0; foreach ($alumnos as $alumno):  $counter++; ?>
    <section>
        <div>-<?php echo $alumno['nombre'] ?></div><div>
        -<?php if($alumno['turno']==1){echo "Matutino";}else if ($alumno['turno']==2){echo "Vespertino";} ?></div><div>-
        <?php echo $alumno['matricula'] ?></div><div>-
        <a href=<?=base_url('index.php/welcome/getAlumnoById?id='.$alumno['id_alumno'])?> >Ver</a>/
        <a href=<?=base_url('index.php/welcome/removeAlumnoById?id='.$alumno['id_alumno'])?> >Eliminar</a> </div>
    </section>
<?php endforeach; 
}?>  
    