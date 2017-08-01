<?php


$selecion= isset($_POST['intereses'])?$_POST['intereses']:null;
if($selecion==0)
{
    header('Location:5.php');
    
}
if($selecion==1)
{
    header('Location:subir la caja.php');
    
}
if($selecion==2)
{
    header('Location:regresar.php');
    
}