**Automatización y Scripting**

**Proyecto: Página PHP con información del servidor**

**Descripción:**

Este proyecto consiste en crear una página PHP que muestre información del servidor en el que se ejecuta. La información que se muestra incluye el nombre del servidor, la versión de PHP, la versión de Linux, la fecha y hora actuales, y la IP del servidor.

**Instalación:**

1. Clonar el repositorio desde GitHub:

```
git clone https://github.com/[Tu nombre]/pagina-php-informacion-servidor.git
```

2. Navegar a la carpeta del proyecto:

```
cd pagina-php-informacion-servidor
```

3. Instalar las dependencias de PHP:

```
composer install
```

4. Iniciar el servidor web:

```
php -S localhost:80
```

**Uso:**

Para acceder a la página, abrir un navegador web e ir a la siguiente dirección:

```
http://localhost
```

**Workflow:**

El proyecto también contiene un workflow de GitHub Actions que se utiliza para construir y publicar la imagen Docker del proyecto. El workflow se activa cuando se realiza un push a la rama `main` del repositorio.

El workflow realiza las siguientes acciones:

* Comprueba si el usuario tiene permisos para construir y publicar imágenes Docker.
* Comprueba si la imagen Docker ya existe. Si no existe, la construye.
* Publica la imagen Docker en el registro de contenedores de GitHub.

**Licencia:**

Este proyecto está licenciado bajo la licencia MIT.

**Contacto:**

Si tienes alguna pregunta o comentario, puedes contactarme en [tu correo electrónico].