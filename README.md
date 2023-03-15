# Proyecto Cuatrimestral Multiservicios CRA
Proyecto liderado por los integrantes de FEENEK.
### IMPORTANTE: BASE DE DATOS
Debido a que importar y exportar bases de datos es algo tedioso y relativamente largo, he decidido poner la creacion del usuario 'Master' en un seeder. Esto quiere decir que para que puedan hacer uso de la app en android (debido a que comparten la misma db), deben de correr tanto las migraciones como el seeder, de esta manera ya tendrian automaticamente el usuario 'Master'. Adicionalmente estoy trabajando en poner mas seeds, para usuarios (no master), tickets, solicitud de tickets, etc.

Aparte de "php artisan migrate:fresh", corran "php artisan db:seed". Esto creara el usuario anteriormente especificado.
