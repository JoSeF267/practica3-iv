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
Despues de activar estos modulos nos dirigimos a configurar apache:
