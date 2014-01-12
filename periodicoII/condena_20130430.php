<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="jose" />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link href="../../style.css" rel="stylesheet" type="text/css" />
	<title>JOMA TIMES</title>
</head>

<body id="top">

<div id="network">

	<div class="center-wrapper">

		<div class="left">Lunes 29, 2013</div>
       
		<div class="clearer">&nbsp;</div>

	</div>
    
</div>

<div id="site">
	<div class="center-wrapper">

		<div id="header">
        	<img src="http://cache.elmundo.es/banners-hashed/f2/0d/ventura24-abr13/todomundo980_b_2/v24primi29abr980x90.jpg" />
        	
            
        	<div class="clearer">&nbsp;</div>
            

			<div id="site-title">

				<h1><a href="#">JOMA TIMES</a> <span> / Noticias diarias</span></h1>

			</div>

			<div id="navigation">
				
				<div id="main-nav">

					<ul class="tabbed">
						<li class="current-tab"><a href="../../index.html">Noticias</a></li>
						<li><a href="../../internacional/internacional.html">Internacional</a></li>
						
						<li><a href="../../deportes/deportes.html">Deportes</a></li>
						<li><a href="../../inscripcion/inscripcion.html">Inscripcion</a></li>
                        <li><a href="../../informacion/informacion.html">Informacion/contacto</a></li>
						
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

		<div class="main" id="main-two-columns">

			<div class="left" id="main-left">

				<div class="post">

					<div class="post-title">
					  <h2><a href="#">Internacional</a></h2></div>

					<div class="post-body">
                    <div class="post">

					<p><a href="#"><img src="condena2.JPG" alt="" width="507" height="211" class="bordered" /></a></p>

					<h1><a href="http://www.ideal.es/granada/rc/20130430/internacional/estrasburgo-condena-ucrania-detencion-201304301226.html" target="_self">Estrasburgo condena a Ucrania por la «detención ilegal» de Timoshenko</a><a href="#" target="_self"></a></h1>
					
					

					<p>El Tribunal Europeo de Derechos Humanos ha condenado a Ucrania por la detención &quot;arbitraria e ilegal&quot; de la ex primera ministra Yulia Timoshenko, encarcelada desde el 5 de agosto de 2011 por desacatos al tribunal que la juzgaba por firmar en 2009 contratos gasísticos onerosos con Rusia.</p>
					<p>La Corte europea asegura en su sentencia que la detención provisional de Timoshenko por un periodo indeterminado de tiempo es contraria al Convenio Europeo de Derechos Humanos y entiende que hubiera sido suficiente una orden para no abandonar la ciudad donde se encontraba. La sentencia concluye que Timoshenko no fue informada sobre la legalidad de su detención, no fue indemnizada por detención ilegal y vio restringido el uso de sus derechos y libertades. El Tribunal no ha aceptado las alegaciones sobre supuestos maltratos a la ex primera ministra.</p>
					<p>La defensa de Timoshenko no solicitó una indemnización que reparara la vulneración de sus derechos, por lo que los siete jueces de la Sala que ha sentenciado el caso no han destinado ninguna suma en ese concepto. En cuanto a la alegación por malos tratos, tres de los siete jueces de la Sala, incluido el presidente del Tribunal, han emitido una opinión disidente en la que dan credibilidad al informe que describe &quot;los moratones en el cuerpo&quot; de Timoshenko tras su traslado al hospital.</p>
					<p>Los tres magistrados entienden que se debería confirmar si la reclamación de la demandante fue examinada adecuadamente por las autoridades y confirmar, después, la veracidad de la alegación de malos tratos. La sentencia declara inadmisible la alegación de la defensa de Timoshenko, relativa al artículo 3 del mencionado Convenio, que prohíbe la tortura y los tratos inhumanos o degradantes.</p>
					<p>La exprimera ministra ucraniana fue declarada culpable de los cargos presentados contra ella y condenada a 7 años de cárcel el 11 de octubre de 2011. Tras pasar por un centro de detención en Kiev, fue trasladada a un centro penitenciario en Kharkov. Debido a sus problemas de salud, Timoshenko fue enviada &quot;a la fuerza&quot; al hospital en dos ocasiones. Allí comenzó una huelga de hambre y rechazó ser atendida por médicos que no fueran de su confianza. El Gobierno de Ucrania tiene ahora un plazo de tres meses para solicitar el reenvío del caso a la Gran Sala de 17 jueces del Tribunal, con el objetivo de su reexamen y la redacción de una nueva sentencia.</p>
                    <div class="content-separator"></div>
<p>&nbsp;</p>

					<h3><a href="#">Opina sobre el articulo</a></h3>
                    
			<form method="post">Uusario<input type="text" id="cookie_usuario" name="cookie_usuario" size=20><br />
		      <textarea name="comentario" rows="10" cols="80">Escribe aquí tus comentarios</textarea>
        <br/>
		<input type="submit" value="Enviar" name="nueva">
		</form>
        <?php
		$conexion = mysql_connect("localhost", "root", ""); 
		mysql_select_db("x74737718",$conexion);
        $comentario = $_POST[comentario];
		$cookie=$_POST[cookie_usuario];
		if($comentario !=NULL){
		$sql = "INSERT INTO comentarios (id,usuario,comentario) VALUES ('','".$cookie."','".$comentario."')";
	   $resultado = mysql_query($sql) or die('esto falla comentario'. mysql_error());
		}
		?>
				<?php
				
						$conexion = mysql_connect("localhost", "x74737718", "cr26ti7"); 
						mysql_select_db("x74737718",$conexion);
						$result = mysql_query ("select * from comentarios ");
						
						while ($row = mysql_fetch_array ($result) )  
						{  
											
						echo'<li>
								<div class="center">'.$row[usuario].'</a></div>
								<div class="center">'.$row[comentario].'</div>
								
							</li>
							';
							}						
						echo'</ul>
							';?>
					
				</div>

		
					
				

					</div>
				
				</div>

			

				<div class="clearer">&nbsp;</div>
				
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