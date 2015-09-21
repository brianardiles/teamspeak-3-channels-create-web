# App teamspeak 3 channels web
![webapp temspeak 3](http://puu.sh/kjvcQ/a14b008081.png)

# Configuracion

Configurar datos del teamspeak en **config.php**

```sh
<?php
	$UserAdmin = 'serveradmin';
	$PWQuery   = 'passwordquery';
	$IP_TS     = 'ip';
	$PuertoTS  = '9987'; //default
	$PuertoQuery = '10011'; //default
?>
```
Es lo unico que se tiene que modificar para que el scrip funcione correctamente. El puerto 10011 tiene que estar abierto para permitir la conexión de la webapp con el server de TS
