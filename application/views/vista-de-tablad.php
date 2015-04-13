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
        <div>-<?php echo $docente['nombre'] ?></div><div>-<?php if($docente['nivel']==1){echo "Universidad";}else if ($docente['nivel']==2){echo "Secundaria";} else if ($docente['nivel']==3){echo "Primaria";} ?></div><div>-<?php echo $docente['matricula'] ?></div><div>-<a href=<?=base_url('index.php/welcome/getdocenteById?id='.$docente['id_docente'])?> >Ver</a>/-<a href=<?=base_url('index.php/welcome/asignar?id='.$docente['id_docente'])?> > Asignar</a>/<a href=<?=base_url('index.php/welcome/removedocenteById?id='.$docente['id_docente'])?> >- Eliminar</a></div>
    </section>
<?php endforeach; 
}?>  