<?php

$selecion= isset($_POST['intereses'])?$_POST['intereses']:null;
if($selecion==0)
{
    header('Location:2.php');
    
}
else
{
    header('Location:regresar.php ');
    
}