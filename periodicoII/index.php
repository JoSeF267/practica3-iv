<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="jose" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    <script type="text/javascript" src="cookie.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
	<title>JOMA TIMES</title>
</head>

<body id="top">

<div id="network">

	<div class="center-wrapper">

		<div class="left"><script>var dayarray=new Array("Lunes","Martes","Miercoles","Jueves","viernes","Sabado","Domingo")
var montharray=new Array("Enero","Febrerp","Marzo","Abril","Mayo","Junio","julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds

var cdate="<small><font color='000000' face='Arial'><b>"+dayarray[day]+","+daym+" "+montharray[month]+" "+year+", ore "+hours+":"+minutes+":"+seconds+" "+dn
+"</b></font></small>"
if (document.all)
document.all.clock.innerHTML=cdate
else
document.write(cdate)
}
if (!document.all)
getthedate()
function goforit(){
if (document.all)
setInterval("getthedate()",1000)
}</script></div>
       
		<div class="clearer">&nbsp;</div>

	</div>
    
</div>

<div id="site">
	<div class="center-wrapper">

		<div id="header">
        	<img src="http://cache.elmundo.es/banners-hashed/f2/0d/ventura24-abr13/todomundo980_b_2/v24primi29abr980x90.jpg" />
        	
            
        	<div class="clearer">&nbsp;</div>
            

			<div id="site-title">

			<h1><a href="#">JOMA TIMES,HOLA SOY LA MAQUINA 1 :)</a></h1>
	<script>
			if(GetCookie("jtotwname") != null){
				auto_show_name()
				document.write("<form><input type='submit' VALUE='Cerrar sesion' onclick='cerrar()'></form>")
				if(GetCookie("jtotwname") == 'root'){
					document.write("<form action=\"noticia_nueva.php\"><input type=\"submit\" VALUE=\"Nueva noticia\"></form><form action=\"noticia_nueva.php\"><input type=\"submit\" VALUE=\"Borrar noticia\"></form><form action=\"noticia_nueva.php\"><input type=\"submit\" VALUE=\"Modificar noticia\"></form>")
							
				}
  
			}else{
				document.write("<FORM id='usuario_cookie' METHOD=post><B>usuario: </B><input type=text name='usuario' size=20><BR><B>contraseña: </B><input type='password' name='contrasena' size=20><BR>			<input type='submit' naame='enviar' VALUE='Entrar' onclick='set_name(this.form)'><BR /><a href='../periodicoII/inscripcion/inscripcion.html'>registrese</a></FORM>")
			
				}
	
			</script>
            
			</div>
           
			<div id="navigation">
				
				<div id="main-nav">

					<ul class="tabbed">
						<li><a href="index.php">Noticias</a></li>
						<li><a href="../periodicoII/internacional/internacional.php">Internacional</a></li>
						
						<li><a href="../periodicoII/deportes/deportes.php">Deportes</a></li>
						<li><a href="../periodicoII/inscripcion/inscripcion.php">Inscripcion</a></li>
                        <li><a href="../periodicoII/informacion/informacion.php">Informacion/contacto</a></li>
						
					</ul>

					<div class="clearer"></div>

				</div>

				<div id="sub-nav">

					<ul class="tabbed">
						
						
						
					</ul>

					<div class="clearer">&nbsp;</div>

				</div>

			</div>

	  </div>

		<div class="main" id="main-three-columns">

			<div class="left" id="main-left">

				<div class="post">

					<div class="post-title"><h2><a href="#">Noticias actualidad</a></h2></div>

					<div class="post-body">
                    <div class="post">

					<p><a href="#"><img src="padul-nieve.jpg" alt="" width="509" 					height="262" class="bordered" /></a></p>

					<h2><a href="#"  onMouseOver="ventanita()" onMouseOut="msg1.close()">Cortado el Puerto de la Ragua y cadenas para subir a la Sierra</a></h2>
                    			

					<p>La nieve caída en el Puerto de la Ragua ha obligado a cerrar este punto y se necesitan cadenas a partir del kilómetro 23 de la carretera que da acceso a Sierra Nevada. En el Puerto de la Mora, donde en estos momentos trabajan seis máquinas quitanieves, no hace falta el uso de cadenas y se recomienda mucha precaución en la zona más alta de la Alpujarra donde comenzó a nevar esta mañana a las siete, según información facilitada por el centro coordinador de emergencias.</p>
                    <a href="puerto_ragua_20130430.php" class="more">Sigue leyendo &#187;</a>
                    <div class="content-separator"></div>
<p><a href="#"><img src="cruces.jpg" alt="" class="bordered" /></a></p>

					<h1><a href="#" onMouseOver="ventanita()" onMouseOut="msg1.close()">Ochenta cruces por toda Granada</a></h1>
					

					<p>Habrá once barras que podrán estar abiertas hasta la madrugada del sábado al domingo</p>
					<a href="../periodicoII/noticias/cruces/cruces_20130430.php" class="more">Sigue leyendo &#187;</a>
                   
                    <div class="content-separator"></div>
<p><a href="#"><img src="robos.jpg" alt="" width="504" height="213" class="bordered" /></a></p>

					<h1><a href="#" onMouseOver="ventanita()" onMouseOut="msg1.close()">Los robos se convierten en el delito que más crece en el primer trimestre de 2013</a></h1>
				

					<p>El cómputo general de criminalidad en Granada, en el que se tienen en cuenta los delitos y las faltas, se rebaja casi un punto frente al mismo periodo de 2012</p>
					<a href="../periodicoII/noticias/robos/robos_20130430.php" class="more">Sigue leyendo &#187;</a>
				</div>

		
					
				

					</div>
				
				</div>

			

				<div class="clearer">&nbsp;</div>

				
			</div>

			<div class="left sidebar" id="sidebar-1">

				<div class="post">

					<p><a href="#"><img src="reforma.JPG" width="185" height="106" alt="" class="bordered" /></a></p>

					<h2><a href="#" onMouseOver="ventanita()" onMouseOut="msg1.close()">El presidente defiende la reforma de la administración local</a></h2>
					

					<p>Sebastián Pérez considera que la institución es &quot;insustituible&quot; y &quot;garante de la igualdad democrática&quot;</p>

					<a href="../periodicoII/noticias/reforma/reforma_20130430.php" class="more">Sigue leyedo &#187;</a>

				</div>

				<div class="content-separator"></div>

				<div class="post">

					<p><a href="#"><img src="bibrambla.jpg" width="185" height="106" alt="" class="bordered" /></a></p>

					<h2><a href="#" onMouseOver="ventanita()" onMouseOut="msg1.close()">Exigen &quot;el arreglo de Bib Rambla&quot; por los &quot;comercios que se anegan&quot;</a></h2>
					

					<p>Algunas zonas de la emblemática plaza se han hundido, lo que provoca verdaderas balsas de agua&quot;, según ha denunciado el grupo municipal socialista</p>

					<a href="bibrambla_20130430.php" class="more">Sigue leyendo &#187;</a>

				</div>

				<div class="content-separator"></div>

				<div class="post">
					
                    <p><a href="#"><img src="rober.jpg" width="185" height="106" alt="" class="bordered" /></a></p>

					<h3><a href="#" onMouseOver="ventanita()" onMouseOut="msg1.close()">"Rober, hoy por hoy, es la mejor"</a></h3>

					<p>SEl Ayuntamiento y la concesionaria del autobús llegan a un acuerdo para seguir hasta 2022.</p>

					<a href="rober_20130430.php" class="more">Sigue leyendo &#187;</a>

				</div>				

			</div>

			<div class="right sidebar" id="sidebar-2">

				<div class="section">

					<div class="section-title">

						<div class="left">Ultimas noticias</div>
						<div class="right"><img src="img/icon-time.gif" width="14" height="14" alt="" /></div>

						<div class="clearer">&nbsp;</div>

					</div>
                    

					<div class="section-content">
						<?php
						$conexion = mysql_connect("localhost", "x74737718", "cr26ti7"); 
						mysql_select_db("x74737718",$conexion);
						$result = mysql_query ("select * from noticias");
						
						echo'<ul class="nice-list">';
						while ($row = mysql_fetch_array ($result))  
						{  
											
						echo'<li>
								<div class="left"><a href="#">'.$row[titulo].'</a></div>
								<div class="right">'.$row[fecha].'</div>
								<div class="clearer">&nbsp;</div>
							</li>
							';
							}						
						echo'</ul>
							';?>
					</div>

				</div>
                
		
				<div class="section">

					

					<div class="section-content">

						<ul class="nice-list">
					
						</ul>
						
					</div>

				</div>

				<div class="section network-section">

					<div class="section-title">Publicidad</div>

					<div class="section-content">
                    	<img src="http://s0.2mdn.net/viewad/3082279/111102_ES_balken_Rocio_Jose_200x90.jpg" />
                        <img src="http://pagead2.googlesyndication.com/simgad/9758195613260331291" />
                        
                        

					          
					</div>

				</div>
 
			</div>
            
			
		  <div class="clearer">&nbsp;</div>

		</div>

		<div id="dashboard">

			<div class="column left" id="column-1">
				
				<div class="column-content">
				
					<div class="column-title">Creado</div>

					<p>Jose lopez sanchez</p>

					

				</div>

			</div>


			<div class="column left" id="column-3">

				<div class="column-content">
				
					<div class="column-title">Soporte</div>

					<p>Jose lopez sanchez.</p>

					
				
				</div>

			</div>

			<div class="column left" id="column-4">

				<div class="column-content">
				
					<div class="column-title">Contacto</div>

					<p>Phone: 958 82 12 13<br/>Email: administrador@decsai.ugr.es</p>

					<a href="#">Enviar! &#187;</a>

				</div>

			</div>

			<div class="clearer">&nbsp;</div>

		</div>

		<div id="footer">

			<div class="left">&copy; 2013 Joma Times <span class="text-separator">&rarr;</span> <a href="#">Principal</a> <span class="text-separator">|</span><a href="#">Noticias</a> <span class="text-separator">|</span> <a href="#">Internacional</a> <span class="text-separator">|</span> <a href="#">Cultura</a> <span class="text-separator">|</span> <a href="#">Deportes</a> <span class="text-separator">|</span> <a href="#">Inscripcion</a> 
			

			<div class="clearer">&nbsp;</div>

		</div>

	</div>
</div>


</body>
</html>