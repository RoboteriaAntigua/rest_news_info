<h1> Rest para retornar info de visitas y noticias del Portal de noticias </h1>

<p> Endpoint que retorna los datos de las News y sus lectores</p>

<h3>  Descripcion del proyecto </h3>
Este humilde Endpoint funciona con las tablas ya echas por el proyecto "Portal de noticias". 
Por ende para su puesta en marcha primero poner en marcha el Portal de noticias y sus migraciones.
Una vez instalado, ver su funcionamiento con un simple get en la barra del navegador. (No hace falta Postman).
con <b><a href="http://localhost:8000/api/News/"> http://localhost:8000/api/News/ </a></b> podemos ver la respuesta en json de todas las noticias.
Con <b><a href="http://localhost:8000/api/News/20"> http://localhost:8000/api/News/{id} </a></b> podemos ver la respuesta de una noticia en especifico.
Se espera obtener: title, autor, content y ademas numero de visitas y quienes estan suscriptos a la noticia.


<h3>Puesta en marcha (Primero poner en marcha el Portal de noticias)</h3>
<ul>
<li> En la carpeta a instalarlo: git clone https://github.com/RoboteriaAntigua/rest_news_info.git</li>
<li>Instalar las dependencias, ejecutar el comando: Composer install    </li> 
<li>Generar la key de projecto, ejecutar: php artisan key:generate </li>
<li> Renombrar el .env.example a solo .env </li>
<li> En el .env agregar database= DESAFIO-WYLEEX contraseña de usuario de SQL</li>
<li> Crear la Data Base llamada DESAFIO-WYLEX </li>
<li> Corremos las migraciones, ejecutar: php artisan migrate --seed </li>
<li> php artisan serve </li>
<li> Escribimos en el ordenador 127.0.0.1:8000/api/News o 127.0.0.1:8000/api/News/id </li>
<li> Perdon por la simplesa </li>
</ul>

<p><b>nota:</b> <i> Se ha creado el controlador Auth y metodos para autenticacion de usuario y middleware, manualmente con las librerias de Laravel Sanctum, pero las he dejado comentadas con finde mantener simple la idea. Pero no es que he dicho aqui no pasa nada! </i> </p>
