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

					<p><a href="#"><img src="betis.jpg" alt="" width="503" height="200" class="bordered" /></a></p>

					<h1><a href="#" target="_self">Un empate que sirve a todos</a><a href="http://www.ideal.es/granada/rc/20130430/internacional/stampa-denuncia-desaparicion-corresponsal-201304300223.html" target="_self"></a></h1>
					
					

					<p>El empate a uno que registró el partido Betis -Deportivo no dejó completamente contento a ninguno de los dos equipos pero vale para que ambos sumen en sus respectivos objetivos; jugar en Europa para los sevillanos y evitar el descenso para los coruñeses. El hecho de que el partido fuera el último de la jornada propició que los dos equipos supieran lo que habían hecho los rivales en sus respectivos objetivos. En el caso de la formación coruñesa, los triunfos del Celta, Zaragoza o Granada dejaban la clasificación en la zona baja muy apretada en la lucha por evitar el descenso y el Deportivo debía redoblar aún más sus esfuerzos por sacar algo positivo del Benito Villamarín.</p>
					<p>Para el Betis , por contra, era una gran oportunidad, al haber pinchado todos los equipos que optan a disputar la Liga Europa, por hacerse aún más fuerte en el séptimo puesto de la tabla. No tardó el equipo que entrena el extécnico bético Fernando Vázquez en mostrar que ha entrado en una buena dinámica de juego, con cuatro partidos consecutivos ganados, dos de ellos como visitante, que se cortó con un empate en la anterior jornada frente a Athletic (1-1) en Riazor.</p>
					<p>De un córner botado por el Betis , el Dépor montó una rapidísima contra en la que su goleador, Iván Sánchez-Rico 'Riki', se fue de varios rivales y batió con maestría al Adrián San Miguel. A los siete minutos el conjunto gallego había puesto el 0-1 y, poco después, el propio Riki tuvo otra ocasión aunque ahora Adrián respondió bien.</p>
					<p>Fue una fase desconcierto local, pues los de Pepe Mel se vieron sorprendidos con una línea de cinco hombres en el centro del campo rival y con rápidos contragolpes. No obstante, el Betis se sobrepuso con el paso de los minutos al tanto encajado y empezó a triangular con sentido el balón y a moverlo con más rapidez para crear buenas oportunidades de batir al meta Daniel Aranzubía.</p>
					<p>Rubén Castro, Beñat Etxebarría, el costarricense Joel Campbell o Jorge Molina se pusieron de gol antes de que acabara la primera parte, en la que también Riki tuvo un par de intervenciones ante un Betis volcado en el ataque para haber puesto el 0-2. En la reanudación salió el equipo sevillano decidido a no perder un minuto en busca de darle la vuelta al marcador y el colombiano Dorlan Pabón, quien había entrado por el canterano Álvaro Vadillo, lo intentó con un tiro por bajo y cruzado que se le fue ajustado a un palo.</p>
					<p>Un minuto después Jorge Molina no perdonó y se fabricó dentro del área una jugada que acabó en el tanto del empate que hizo que los locales redoblaran sus ganas ante un adversario que pasó apuros para controlar las acometidas de los béticos. El Deportivo capeó el temporal como pudo y entró a la fase final vivo con el empate y con un partido que se rompió por las ganas del Betis de buscar el segundo y las de los coruñeses de aprovechar su opción a la contra, aunque ambos se tuvieron que conformar con la igualada.</p>
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