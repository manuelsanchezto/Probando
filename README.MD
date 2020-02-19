#Auth por formulario en Symfony

Para que funcione sólo es necesario copiar los archivos en los directorios en los que dicen que están, pero asegurarse antes de que se ha generado en la BBDD la entidad User (Doctrine:Schema:update --force) y se ha creado el usuario en BBDD de ejemplo (mi consejo es, poner en security:

- { path: '^/', roles: IS_AUTHENTICATED_ANONYMOUSLY }

lo cual permite acceder a  la ruta /addUserAdminBase, que crea un usuario "admin" con contraseña "alumno" con el que poder acceder, y después devolver el access control al estado que aparece. 
