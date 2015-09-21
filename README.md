# App teamspeak 3 channels web
![webapp temspeak 3](http://puu.sh/kjvEB/787b0f8fd6.png)

# Configuración

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
Es lo único que se tiene que modificar para que el script funcione correctamente. El puerto 10011 tiene que estar abierto para permitir la conexión de la webapp con el server de TS
