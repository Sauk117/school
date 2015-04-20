 <br>
 <style type="text/css">
    input, input[date], select{
        width: 200px!important;
    }


    article.second {
        padding: 20px;
        width: 768px;
        margin-left: 159px;
    }
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
    article.second .table div {
        background-color: #fff;
        border: 1px solid #95C8DD;
        color: #195977;
        display: inline-block;
        font-size: 11px;
        height: 25px;
        line-height: 25px;
        padding-left: 5px;
        width: 182px;
    }   
    select{
        float: left;
        margin-right: 20px!important;
    }
    .ajaxMsg{
        width:100%; 
        margin-bottom:0!important; 
        display:none;
        padding: 0!important;
    }
</style>
 <table>
                <thead>
                    <th class="table_th">Nombre</th>
                    <th class="table_th">Correo</th>
                    <th class="table_th">Fecha de alta</th>
                    <th class="table_th">Activo</th>
                </thead>
                <tbody>
                <?php
                    if($usuarios!=null && $usuarios>0)
                    { 
                    $counter=0; 
                    foreach ($usuarios as $usuario):  $counter++; 
                    ?>
                        <tr>
                            <td><?php echo $usuario['nombre'] ?></td>
                            <td><?= $usuario['correo'] ?></td>
                            <td><?php echo $usuario['falta'] ?></td>
                            <td style="text-align:center">
                                <input type="checkbox" class="check"
                                 <?php if($usuario['estatus']==1){echo "checked='checked'"; }?>
                                   value="<?= $usuario['estatus'] ?>" />
                                
                            </td>
                        </tr>
                    <?php endforeach; 
                    }?>  
                </tbody>
            </table>
   <script>
            var actcheck;
                $(document).ready(function(){
                    $(document).on("click",".check",function(e){
                        var $estatus;
                        actcheck = $(this);
                        $(".check").fadeOut('fast');
                        $(".ajaxMsg").fadeIn('fast');
                        if(actcheck.val()==1)
                            $estatus=0;
                        else if(actcheck.val()==0)
                            $estatus=1;

                        $.post("<?=base_url('index.php/welcome/cambiar_estatus')?>",{"id":actcheck.attr("name"),"value":actcheck.val()},function(){
                            $(".check").fadeIn('fast');
                            $(".ajaxMsg").fadeOut('fast');
                            actcheck.val($estatus);
                        });
                    });
                });
            </script>