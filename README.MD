# Auth por formulario en Symfony

Para que funcione sólo es necesario copiar los archivos en los directorios en los que dicen que están, pero asegurarse antes de que se ha generado en la BBDD la entidad User (Doctrine:Schema:update --force) y se ha creado el usuario en BBDD de ejemplo (mi consejo es, poner en security:
```
- { path: '^/', roles: IS_AUTHENTICATED_ANONYMOUSLY }
```
lo cual permite acceder a  la ruta /addUserAdminBase, que crea un usuario "admin" con contraseña "alumno" con el que poder acceder, y después devolver el access control al estado que aparece. 

Atención, hay dos controllers:

 - AdminController.php: sirve de página de aterrizaje ("/admin") y tiene un método para generar automáticamente un usuario admin con contraseña "alumno". (/addUserAdminBase)
 
  - SecurityControlller.php: Este mejor no tocarlo, porque está muy ajustado para que funcione.


Otra manera de crear ese usuario es con una query como la siguiente:
```
insert into app_users (username, password, email, isActive) Values ('admin', 'alumno', 'mail@mail.com',1);

```


## V2.0: Cuidado con lo que se ha añadido en la parte de app:

```  
admin:
    path: /admin    
    defaults: { _controller: AppBundle:AdminController }
```
    
    (Cambiar:
      /admin                        por la ruta que se quiera utilizar que esté dentro del controller
      AppBundle:AdminController     por el controller que se vaya a utilizar)


## V2.1: Añadido un logout si alguien apunta a /logout:

Pero esto tendrá que hacerse mediante un enlace externo
