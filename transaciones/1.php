<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>pagina1</title>
<link rel="stylesheet" href="style/index_style.css">
<link rel="stylesheet" href="fonts/index_style.css">

<script>
     function validar()
     {
          
     }
</script>

<!---el rel="stylesheet me permite colocar el tam�os de mis cuadritos peke�so--->
<style>
    #caja{
        background: #f0f0f0;
        width: 300px;
        border: 1px solid black;
        margin: auto auto auto;
        padding: 1em;
        border-radius: 6px;
          color: #000000;
 
    }
    h1,h2,h3,h4{
        font-family: cambria;
        color: #FFFFFF ;
         
    }
    input[type=text],input[type=password]{
        margin: auto auto auto auto;
        width: auto;
        border: 0px;
        padding: 1em;
        border-radius: 3px 3px 20px 3px;
    }
    input[type=submit],form a{
        padding:1em;
        background: #3498DB;
        border: 4px #87CEEB;
        color:white;
        font-family: arial black;
        font-size: 14px;
        border-radius: 15px ;
        text-decoration: none;
        
    }
    input[type=submit]:hover, form a:hover{
        background: #7EA6AB;
        cursor: pointer;
        
    }
    input[type="submit"]:active{
        transform: scale(0.95);
    }
</style>
 </head>

 <body BGCOLOR="#C6E5EE">
     <form  name="datos"  class="registro"  method="post" action="siguente.php"  onsubmit="return validar(this)" enctype="multipart/form-data">
         
         
<div id="titulo">
        
              
 
	</div>
        <h1 ><font  color="#000000"><p ALIGN="left">El Mono en la puerta</p></font><span>  </span></h1>
        <p ALIGN="CENTER"><img class="contenedor" src="../images/mono inicio.JPG"width="250" height="250"></p>
             
        <h1><font  color="#000000"> Escoja una opcion</h1>
              <div style="text-align:left;">
             <br />
<input name="intereses" type="radio" value="0" />Avanzar al centro
<br />
<input name="intereses" type="radio" value="1" />Quedarse quieto
<br />
<input name="intereses" type="radio" value="2" checked="checked" />Salir


                 </div>
                   <div align="center">
                       <BR>
                       
<input type="submit" name="submit" value="Siguente"/> 
              
               </form>   

 </body>
                
   </html>

