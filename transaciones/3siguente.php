<?php


$selecion= isset($_POST['intereses'])?$_POST['intereses']:null;
if($selecion==0)
{
    header('Location:sigueempujandolacaja.php');
    
}
if($selecion==1)
{
    header('Location:4.php');
    
}
if($selecion==2)
{
    header('Location:regresar.php');
    
}