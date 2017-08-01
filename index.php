<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>El mono y la banana</title>
<link rel="stylesheet" href="style/index_style.css">
<link rel="stylesheet" href="fonts/index_style.css">

<script>
     function validar()
     {
          
     }
</script>

<!---el rel="stylesheet me permite colocar el tamños de mis cuadritos pekeñso--->
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
     <form  name="datos"  class="registro"  method="post" action="resultado.php"  onsubmit="return validar(this)" enctype="multipart/form-data">
         
         
<div id="titulo">
             <header>
                 <h1><font  color="#481397"> UNIVERSIDAD NACIONAL DE CHIMBORAZO </font><span><font color="#481397"> &quot;UNACH&quot;</font> </span></h1>
                 <h1><font  color="#481397"> INGENIERIA EN SISTEMAS Y COMPUTACION </font><span><font color="#481397"> 
             </header>	
    <img class="contenedor" src="images/sello.png"width="250" height="250">
 <h1><font  color="#481397"> ASIGNATURA INTELIGENCIA ARTIFICAL</font><span><font color="#481397"> </h1>
  <h1><font  color="#481397"> REALIZADOR POR: </font><span><font color="#481397"> </h1>
  <h1><font  color="#481397"> PABLO CALAPUCHA</font><span><font color="#481397"> </h1>
  <h1><font  color="#481397"> ANJELO MINANGO</font><span><font color="#481397"> </h1>
 <h1><font  color="#481397"> WILMER VALLE</font><span><font color="#481397"> </h1>
	</div>
        <h1 ><font  color="#000000"><p ALIGN="CENTER">El Mono y la Banana</p></font><span>  </span></h1>
        <p ALIGN="CENTER"><img class="contenedor" src="images/IMAGEN-16563033-2.jpg"width="250" height="250"></p>
        <p><FONT SIZE="5">La inteligencia artificial desde el punto de vista de la Ingenieria trata 
            de resolver problemas reales, es decir que una maquina adquiera conocimiento con la ayuda 
            de programas que faciliten su correcto funcionamiento, es por esto el objetivo de este 
            trabajo es aplicar los conocimientos obtenidos en la Asignatura Inteligencia Artificial, 
            en este caso se obtendra la ayuda del programa PROLOG(programacion, logica).
</FONT></p> 
 
        <h1><font  color="#000000"> Documentos Relacionado al ejercicio: El Mono y la Banana</h1>
        
           
                   <table>
                       <tr>
                        <td align="left"> 
                               
                             <iframe width="420" height="315" src="https://www.youtube.com/embed/ZAWnbm8d92E" frameborder="0" allowfullscreen></iframe>
                           </td>   
                            <td align="left"> 
                           <iframe width="420" height="315"  src="https://onedrive.live.com/embed?cid=DD0B839F13D49DA0&resid=DD0B839F13D49DA0%21364366&authkey=AFsaEW6hA3tDFGw&em=2" width="476" height="288" frameborder="0" scrolling="no"></iframe>
                           
                        
                 </td>   
                 <td align="left"> 
                               
                             <iframe width="420" height="315" src="http://fer-inteligencia.blogspot.com/2014/06/25-el-mono-y-la-banana.html" frameborder="0" allowfullscreen></iframe>
                           </td>  
                       </tr>
                       <div>
                   </table> 
        
              <h1><font  color="#000000"> APLICATIVO</h1>
              <div style="text-align:center;">
              <table border="1" style="margin: 0 auto;">
                  <tr>
                  <td align="left"> 
                  <a href="ejemplo/el mono y la banana.pl"download="el mono y la banana.pl"><img class="contenedor" src="images/swipl.png"width="250" height="250"></a>
                  </td>
                   <td align="center"> 
                       <a href="ejemplo/el mono y la banana.pl"download="el mono y la banana.pl"><img class="contenedor" src="images/visual_studio.jpg"width="250" height="250"></a>
                        
                   </td>
                   <td align="rigth"> 
                       <a href="transaciones/1.php"><img class="contenedor" src="images/descarga.jpg"width="250" height="250"></a>
                        
                   </td>
                   
                  </tr>
              </table>
                 </div>
                   <div align="center">
                       <BR>
                       <!--

              <table border="2">
                  <tr>
                    <td><TH>PELICULAS</TH>
                    <TH>TELENOVELAS</TH>
                    <TH>NOTICIERO</TH></TD>
              </tr>
              <TR ALIGN=CENTER>    
                  <TH>PELICULAS</TH>
                  <TD><input type="text" name="PELICULAS1"></TD>
                  <TD><input type="text" name="PELICULAS2"></TD>
                  <TD><input type="text" name="PELICULAS3"></TD>
               
              </TR>
              <TR ALIGN=CENTER>    
                  <TH>TELENOVELAS</TH>
                  <TD><input type="text" name="TELENOVELAS1" ></TD>
                  <TD><input type="text" name="TELENOVELAS2"></TD>
                  <TD><input type="text" name="TELENOVELAS3"></TD>
              </TR>
              <TR ALIGN=CENTER>    
                  <TH>NOTICIERO</TH>
                 <TD><input type="text" name="NOTICIERO1"></TD>
                  <TD><input type="text" name="NOTICIERO2"></TD>
                  <TD><input type="text" name="NOTICIERO3"></TD>
              </TR>
              </table>
                  <div ALIGN=CENTER>
                      <input type="submit" name="CALCULAR" value="CALCULAR">
                  </div>
              </div> -->
               </form>   

 </body>
                
   </html>