Instrucciones claras para configurar y ejecutar el proyecto localmente:

(Tenemos que tener en Compooser instalado y php)
Xampp:
El repositorio se tiene que clonar en la carpeta:
C:\xampp\htdocs\

Apache en el puerto 81
MySQL 30306
Creamos una DB con el nombre "gestordeproductos"

Una vez se tenga esto en el proyecto, procedemos a hacer las migraciones con el siguiente comando en la ruta de nuestro proyecto.
En este caso sería aquí:
"C:\xampp\htdocs\prueba-junior\prueba-junior"

Ejecutamos el siguiente comando:
"php artisan migrate"

Posterirmente levantamos nuestro servidor con:
"php artisan serv"

Explicación breve de las decisiones tomadas durante el desarrollo:

Se mandan sesiones flash para una mejor experiencia y saber lo que el usuario va haciendo, así como el cifrado de la contraseña,
la protección de rutas y las validaciones en los formularios.

Tecnologías utilizadas:
Laravel 11
Bootstrap
(Iba a usar datatable para el search, pero ya no tenia mucho tiempo)
MySQL

Como comentario no use mucho los commits porque creí que iba a tardar más.
En la carpeta public estan las fotos del proyecto :)
La imagen "updateError.png" da error porque lo que se ve en un placeholder
