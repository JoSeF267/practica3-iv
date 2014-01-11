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

con esta configuracion ya tendriamos listo el balanceador de carga basado en proxy inverso.

En las otras dos maquinas simplemente he instalado apache + mysql.

```
apt-get install apache2
apt-get install mysql-server
```

Depues de realizar la configuracion de ambas maquinas podemos ver las direciones ip de las 3

![captura 2](https://dl.dropbox.com/s/xulymv0aherrst7/4.png)

y en las siguientes capturas la pagina web del periodico funcionando tanto en la maquina 1 o en la maquina 2:
![captura 3](https://dl.dropbox.com/s/gltucpicg09t08c/3.png)

![captura 4](https://dl.dropbox.com/s/ii23t60zai2m26p/2.png)



