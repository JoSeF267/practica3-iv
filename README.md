practica3 
==========================================================================================================================

Que voy a realizar
--------------------------------------------------------------------------------------------------------------------------
Primero lo que hare será instalar 3 maquinas virtuales ubuntu server 12.04 trabajando sobre vmware player. Una de estas maquinas tendrá una configuración para trabajar como servidor de carga y las otras dos serán maquinas que servirán la pagina web del periódico.


Maquina virtual balanceador de carga
--------------------------------------------------------------------------------------------------------------------------
Primero hablaremos de la configuracion de la maquina balanceador.
Antes de empezar instalaremos el apache:
```
apt-get install apache2
```
Despues de realizar la instalacion activamos algunos de los modulos de apache que necesitamos para realizar el balanceo:

```
a2enmod proxy_http
a2enmod proxy_balancer

```
Despues de activar estos modulos nos dirigimos a configurar apache. Nos dirijimos al directorio de apache y abrimos concretamente /etc/apache2/apache2.conf y introducimos esta configuraciones:

![captura1](https://dl.dropbox.com/s/5ad3ik0k9ixpzvi/1.png)

Ahora explicare un poco la configuración del fichero apache2.conf.
-  Servername: Simplemente le indico a apache cual es el nombre de mi servidor que en mi caso es localhost.
-  Sethandler: Especifica donde esta el modulo que se debe de cargar
-  ProxyRequest: Si estuviera On no serviría como balanceador seria un Proxy corriente para filtrado de direcciones.
-  Proxy balancer: Indica cual es la maquina que recibirá las peticiones.
-  BalanceMember: Se le indica cuales son los miembros a los que el balanceador enviara la petición.
-  loadfactor: Es el factor de carga. A ambas maquinas le llegaran un 50% de carga.
-  route: Es un identificador añadido de la maquina. Por eso debe de estar configurado el hosts
-  Proxypass: actúa como mirror de nuestro servidor remoto siendo el origen de las respuestas al cliente.
-  stickysesion: Es como una cookie que indica en que servidor ha estado el cliente.
-  nofaillover: Si se activa y hay un error por parte del servidor este romperá la conexión y la redije a otro de los servidores.
-  ProxyPassReverse: Indica cuales son los servidores finales a los cuales tiene que mandarle la petición el balanceador.

con esta configuracion ya tendriamos listo la granja web basada en proxy inverso.

En las otras dos maquinas simplemente he instalado apache + mysql.

```
apt-get install apache2
apt-get install mysql-server
```

Depues de realizar la configuracion de ambas maquinas podemos ver las direciones ip de las 3

![captura 2](https://dl.dropbox.com/s/xulymv0aherrst7/4.png)

y en las siguientes capturas la pagina web del periodico funcionando tanto en la maquina 1 como en la maquina 2:
![captura 3](https://dl.dropbox.com/s/gltucpicg09t08c/3.png)

![captura 4](https://dl.dropbox.com/s/ii23t60zai2m26p/2.png)

Tipos de maquinas que vamos a utilizar en la granja web
------------------------------------------------------------------------------------------------------------------------
Las maquinas que vamos a utilizar para comprobar cuales son las mejores son las siguientes:

- 1ª configuracion:
- balanceador:1 nucleo ,512 ram , 10gb disco duro.
- Maquina 1 : 1 nucleo ,512 ram , 10gb disco duro.
- Maquina 2 : 1 nucleo ,512 ram , 10gb disco duro.

- 2ª configuracion:
- balanceador: 1 nucleo,1024 ram , 10gb disco duro.
- Maquina 1 :  1 nucleo,1024 ram , 10gb disco duro.
- Maquina 2 :  1 nucleo,1024 ram , 10gb disco duro.

- 3ª configuracion:
- balanceador: 1 nucleo,2048 ram, 10gb disco duro.
- Maquina 1  : 1 nucleo,2048 ram, 10gb disco duro.
- Maquina 2  : 1 nucleo,2048 ram, 10gb disco duro.

- 4ª configuracion:
- balanceador: 2 nucleos,512 ram, 10gb disco duro.
- Maquina 1  : 2 nucleos,512 ram, 10gb disco duro.
- Maquina 2  : 2 nucleos,512 ram, 10gb disco duro.

- 5ª configuracion:
- balanceador: 2 nucleos,1024 ram, 10gb disco duro.
- Maquina 1  : 2 nucleos,1024 ram, 1ogb disco duro.
- Maquina 2  : 2 nucleos,1024 ram, 10gb disco duro.

- 6ª configuracion:
- balanceador: 2 nucleos,2048 ram, 10gb disco duro.
- Maquina 1  : 2 nucleos,2048 ram, 10gb disco duro.
- Maquina 2  : 2 nucleos,2048 ram, 10gb disco duro.


Pruebas de carga
------------------------------------------------------------------------------------------------------------------------

Para poder ver cuales de las configuraciones anteriores son las que mas no convienen para montar la graja web realizar una serie de test con la herramienta ab:
```
ab -n 1000000 -10 http://192.168.37.136/index.php
```
|1ª configuracion|2ª configuracion|3ª configuracion|4ª configuracion|5ª configuracion|6ª configuracion|
|----------------|----------------|----------------|----------------|----------------|----------------|
|tiempo respuesta|tiempo respuesta|tiempo respuesta|tiempo respuesta|tiempo respuesta|tiempo respuesta|
|----------------|----------------|----------------|----------------|----------------|----------------|
|v.transferencia |v.transferencia |v.transferencia |v.trasnferencia |v.transferencia |v.transferencia |
|----------------|----------------|----------------|----------------|----------------|----------------|

