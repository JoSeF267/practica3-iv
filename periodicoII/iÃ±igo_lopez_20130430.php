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
						<li class="current-tab"><a href="../../index.php">Noticias</a></li>
						<li><a href="../../internacional/internacional.php">Internacional</a></li>
						
						<li><a href="../../deportes/deportes.php">Deportes</a></li>
						<li><a href="../../inscripcion/inscripcion.php">Inscripcion</a></li>
                        <li><a href="../../informacion/informacion.php">Informacion/contacto</a></li>
						
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
					  <h2><a href="#">Deportes</a></h2></div>

					<div class="post-body">
                    <div class="post">

					<p><a href="#"><img src="iñigo.jpg" alt="" width="503" height="200" class="bordered" /></a></p>

					<h1><a href="#">Íñigo López, posible interés del Swansea City y del Reading</a></h1>
					
					

					<p>S. YEPES. El defensa Íñigo López podría encontrarse en el punto de mira de un par de equipos de Inglaterra de cara  a la próxima temporada. Se trataría del Swansea City, a cuyo cargo se encuentra el danés Michael Laudrup, e incluso del Reading, quien tiempo atrás se planteó el fichaje de Pape Diakhaté.
El jugador, que también podría interesar al Queens Park Rangers, no descarta hacer las maletas toda vez que no han fructificado las negociaciones para su renovación con el Granada CF. Además, el fútbol inglés le atrae y considera que es un buen escenario para poder proseguir su carrera.
Algunas fuentes consultadas por Canal Rojiblanco aseguran que el interés por este jugador es real y otras, que símplemente ha sido ofrecido y que a partir de ahí los equipos sopesan su contratación.
Íñigo López vino a ser titular indiscutible en los inicios de las etapas de Juan Antonio Albacete Anquela y de Lucas Alcaraz, sin embargo con ambos acabó perdiendo protagonismo hasta caer en la suplencia.</p>
<p>&nbsp;</p>

					<h3><a href="#">Opina sobre el articulo</a></h3>
                    
							                   <form method="post">Uusario<input type="text" id="cookie_usuario" name="cookie_usuario" size=20><br />
		      <textarea name="comentario" rows="10" cols="80">Escribe aquí tus comentarios</textarea>
        <br/>
		<input type="submit" value="Enviar" name="nueva">
		</form>
        <?php
		$conexion = mysql_connect("localhost", "x74737718", "cr26ti7"); 
		mysql_select_db("x74737718",$conexion);
        $comentario = $_POST[comentario];
		$cookie=$_POST[cookie_usuario];
		if($comentario !=NULL){
		$sql = "INSERT INTO comentarios (id,usuario,comentario) VALUES ('','".$cookie."','".$comentario."')";
	   $resultado = mysql_query($sql) or die('esto falla comentario'. mysql_error());
		}
		?>
				<?php
				
						$conexion = mysql_connect("localhost", "root", ""); 
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