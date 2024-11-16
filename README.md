###################################################################################################
################################*** REQUISITOS PREVIOS ***#########################################
###################################################################################################

PROGRAMAS
 * PHP 7 o superior.
 * Instalación de la ultima versión de composer (https://getcomposer.org/download/).
 * Base de datos MySQL (recomendado versiones cercanas a la 8) (puede ser desde XAMP).
 * Git (tener además una cuenta en GitHub)

[OPCIONAL] EXTENSIONES RECOMENDADAS EN VISUAL CODE
 * Laravel goto view
 * Laravel Snippets
 * Laravel Intellisense
 * Laravel Extra Intellisense
 * Laravel Snippets
 * Laravel Blade Snippets
 * Laravel Blade formatter
 * PHP Intelphense
 * PHP Snippets
 * Tailwind CSS IntelliSense [instalado]
 * Alpine.js IntelliSense
///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
################################*** PASOS CREACION PROYECTO ***####################################
###################################################################################################

IMPORTANTE: todos los comandos se deben ejecutar con CMD o POWERSHELL

**** CREACION PROYECTO E IMPLEMENTACION DE FRAMEWORKS *************

1. INSTALACION LARAVEL:
composer global require laravel/installer

2. CREACIÓN NUEVO PROYECTO: [FUENTE: https://laravel.com/docs/11.x#creating-a-laravel-project]
laravel new fitpro-app [nombre de proyecto:fitpro-app]

3. INSTALACION JETSTREAM [https://jetstream.laravel.com/installation.html]
composer require laravel/jetstream

4. INSTALACION LIVEWIRE MODO DARK 
cd fitpro-app-repository [para ubicarse dentro de la carpeta del proyecto]
php artisan jetstream:install livewire --dark [instalacion del livewire modo dark]

5. INSTALACION TAILWIND
* INSTALACION: npm install tailwindcss
* GENERACION ARCHIVO DE CONFIGURACION: npx tailwindcss init
* CONFIGURACION DE ESTILOS CSS DE TAILWIND:
  Agregar dentro del archivo de estilos principal (styles.css o app.scss)las siguientes lineas al principio del documento:
	@tailwind base;
	@tailwind components;
	@tailwind utilities;




5. EJECUCIÓN COMANDOS PARA COMPILAR PROYECTO
npm install
composer install
php artisan key:generate
composer update
npm run build
php artisan migrate

6. CORRER Y PROBAR EL PROYECTO EN LOCAL
php artisan serve [una vez compila se puede ver el aplicatiov en http://127.0.0.1:8000]

----------------------------------------------------------------------------------------------------
MODELOS PROYECTO: [el parametro -m crea directamente la tabla del modelo que se va a agregar en la BD]
php artisan make:model HealthProfile -m
php artisan make:model ExerciseRoutine -m

CREACION CONTROLADORES PROYECTO:
AGREGAR COMIDAS: php artisan make:controller FoodController --resource
PERFIL DE SALUD USUARIO: php artisan make:controller HealthProfileController --resource
RUTINAS DE EJERCICIO: php artisan make:controller ExerciseRoutineController --resource
FORGOT PASSWORD: php artisan make:controller ForgotPasswordController

MIGRACIONES ADICIONALES
php artisan make:migration drop_health_profiles_table [drop health_profiles]
php artisan make:migration create_health_profiles_table [add user_email to health_profiles]
php artisan make:migration add_height_and_weight_to_health_profiles --table=health_profiles [add peso y estatura]

----------------------------------------------------------------------------------------------------

LIBRERIAS ADICIONALES:
* ALERTIFY: npm i alertifyjs --save [FUENTE: https://alertifyjs.com/]
///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
##################*** COMANDOS BASICOS PARA CREACION DE COMPONENTES ***############################
###################################################################################################

* CREACION DE MODELO(e.g. foods):
php artisan make:model Food -m [nombre de modelo debe empezar con mayuscula y en singular]

* CREACION CONTROLADOR RESOURCE [FUENTE: https://laravel.com/docs/11.x/controllers#main-content]
php artisan make:controller FoodController --resource

* CREACION DE MIDDLEWARE:
php artisan make:middleware <nombre_middelware>

* REVERSAR ULTIMA MIGRACION EJECUTADA:
php artisan migrate:rollback

* CREACION DE COMPONENTE CON LIVEWIRE:
php artisan make:livewire ForgotPassword

* ELIMINACION COMPONENTE CON LIVEWIRE:
php artisan livewire:delete ForgotPassword	


* REVISION CONTROLADORES ENRUTADOS:
   php artisan route:list [lista metodos de todos los controladores enrutados]
   php artisan route:list --name=food  [lista metodos del controlador food]

###################################################################################################
##########################*** COMANDOS DE EJECUCION FRECUENTE ***##################################
###################################################################################################

* COMANDOS A EJECUTAR CADA VEZ QUE SE INSTALEN NUEVAS LIBERIAS Y PAQUETES:
 npm install
 composer install
 composer update
 
* COMANDO A EJECUTAR CADA VEZ QUE SE REALIZAN CAMBIOS EN LA CONFIGURACIÓN DEL APP:
 npm run build

* COMANDOS A EJECUTAR CADA VEZ QUE SE CREEN NUEVOS COMPONENTES EN LARAVEL:
 php artisan migrate --force

* CADA VEZ QUE SE CREAN VISTAS USANDO LOS ASSETS DE LARAVEL:
php artisan view:cache
php artisan route:cache

///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
###################*** CONFIGURACION DE MODELOS DENTRO DEL PROYECTO ***############################
###################################################################################################

1. AGREGAR CMAPOS A LA MIGRACION DEL MODELO creado (una vez se crea el resource controller asociado
 al model):

Dentro de database > migration > ..._create_food_table.php (e.g.) se agregan los campos que requiere
el modelo (dentro de la función up()):
	Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->float('protein');
            $table->float('carbs');
            $table->float('fat');
            $table->timestamps();
        });
2. DESACTIVAR PROTECCION DE ASIGNACIÓN MASIVA PARA LOS CAMPOS DEL MODELO
Ir a app > Models > ,<nombre_modelo>, dentro de la clase (e.g. Food.php) agregar la siguiente linea de código:
protected $fillable = ['name','category','protein','carbs','fat']; 
///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
######################*** CONFIGURACION DE RUTAS DENTRO DEL PROYECTO ***###########################
###################################################################################################

* AGREGAR RUTA PARA MODELO Y CONTROLADOR CREADOS EN LA APP [e.g. Food(modelo) y FoodController(controlador)]:
  En routes > web.php, se debe de ingresar lo siguiente dentro de ->group(function ()... lo siguiente:
    	Route::resource('foods', FoodController::class);

///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
#####################*** MONTAJE DEL PROYECTO PARA DESARROLLO EN LOCAL ***#########################
###################################################################################################

1. CREACION DE BD DE LA APP EN MYSQL:
* Ejecutar en el CLI del gestor de la BD el siguiente comando:
CREATE SCHEMA fitpro; 
NOTA: también se puede crear la BD con las opciones de creación manual que ofrecen los gestores de BD.

2. CLONAR REPOSITORIO GIT
* Abrir el CMD dentro del irectorio donde se desea instalar el repositorio y ejecutar el siguiente
  comando:
git clone https://github.com/maoflorez601/fitpro-app-repository.git

3. INSTALACION DE LARAVEL Y JETSTREAM EN PC:
cd fitpro-app-repository [para ingresar a la carpeta del proyecto]
composer global require laravel/installer
composer require laravel/jetstream

4. EJECUCION EN ORDEN DE LOS SIGUIENTES COMANDOS:
npm install
composer install
composer update
npm run build

5. CREAR EL ARCHIVO .env. Se puede crear realizando una copia del archivo ".env.example" y se 
cambia el nombre a ".env". Una vez se crea el archivo se ejecuta el siguiente comando en el cmd
php artisan key:generate

6. CONFIGURACIÓN VARIABLES EN ARCHIVO .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fitpro
DB_USERNAME=root
DB_PASSWORD=12345678

NOTA: para la configuración de variables hay que tener en cuenta la configuración de la BD de cada
 desarrollador, al ser pruebas locales no es necesario tener exactamente la misma configuración.

7. MIGRACIÓN DE MODELOS A LA BD MYSQL:
php artisan migrate --force

8. EJECUTAR APP EN LOCAL:
php artisan serve

9. ACCEDER A LA APP EN LA URL: http://127.0.0.1:8000

///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
###########################*** DESPLIEGUE APLICACION USANDO RAILWAY ***############################
###################################################################################################

NOTA IMPORTANTE: Railway usa directamente los repositorios de Github para realizar los despliegues 
de la app, por lo que hay que tener mucho cuidado al momento de hacer un pull request en el 
repositorio para no ir a desplegar un cambio que vaya a afectar el aplicativo. Por esta razón
SE DEBE CREAR UNA RAMA PARA NO SUBIR LOS CAMBIOS DIRECTAMENTE A LA RAMA MAIN.

1. REGISTRARSE EN RAILWAY CON LA CUENTA EN GITHUB. Se debe de dar permisos para el acceso desde Railway
a los repositorios del usuario.

2. CREAR NUEVO PROYECTO (New Project) y desplegar una BD MySQL (Deploy MySQL).

3. AGREGAR REPOSITORIO GITHUB. Dentro del proyecto click en "+ New" > "GitHub Repo" > seleccionar
repositorio fitpro-app-repository.

4. MODIFICAR VARIABLES PARA PRODUCCIÓN. Seleccionar la pestaña "Variables" > "Raw Editor":
APP_ENV=production
APP_URL=https://{{RAILWAY_PUBLIC_DOMAIN}}

5. AGREGAR EL VALOR APP_KEY DEL ARCHIVO .env DE LOCAL A LA VARIABLE EN RAILWAY:
APP_KEY=[app_key]

6. MODIFICAR LAS VARIABLES DE LA BD CON LA INFO DEL RECURSO DE LA BD CREADO EN RAILWAY. En este caso es 
siguiente:
DB_CONNECTION=mysql
DB_HOST=roundhouse.proxy.rlwy.net
DB_PORT=43755
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=[db_password]

7. CREACIÓN DE VARIABLE NIXPACKS_BUILD_CMD PARA LA EJECUCIÓN DE COMANDOS DE CONSTRUCCIÓN DEL APLICATIVO. 
Configurar la variables de la siguiente manera

NIXPACKS_BUILD_CMD="export COMPOSER_ALLOW_SUPERUSER=1 
composer install  --no-scripts --no-autoloader && echo 'Composer instalado correctamente' || echo 'Error en Composer'; \
npm install && echo 'npm install ejecutado correctamente' || echo 'Error en npm install'; \
yarn install && echo 'yarn instalado correctamente' || echo 'Error en al instalar yarn'; \
yarn prod && echo 'yarn prod ejecutado correctamente' || echo 'Error en yarn prod'; \
composer update && echo 'composer update ejecutado correctamente' || echo 'Error en composer update'; \
composer update && echo 'composer update ejecutado correctamente' || echo 'Error en composer update'; \
npm run build && echo 'npm run build ejecutado correctamente' || echo 'Error en npm run build'; \
php artisan optimize:clear && echo 'Optimize clear ejecutado correctamente' || echo 'Error en Optimize clear'; \
php artisan storage:link && echo 'Storage link ejecutado correctamente' || echo 'Error en Storage link'; \
php artisan migrate --force && echo 'Migrate ejecutado correctamente' || echo 'Error en Migrate'"


8. HACER DEPLOY DE LA APP.

9. GENERAR DOMINIO DE LA APP. Ir a la pestaña Settings > Generate Domain.

DOMINIO CREADO EN RAILWAY:
fitpro-app-repository-production.up.railway.app

---------------------------------------------------------------------------------------------------------

SOLUCION DE PROBLEMAS PARA EL DEPLOYMENT

1. NO SE ESTABA INSTALANDO COMPOSER. SOLUCION: Se implementa en la variable  el siguiente comando:
export COMPOSER_ALLOW_SUPERUSER=1 
Esto para permitir la instalación de composer como superuser, de otro modo no permitía esta instalación.

2. ERROR POR MIXED CONTENT. Debido a que se estaban mezclando peticiones https con http, no se estaban 
instalando las librerias de CSS ni de JS. SOLUCION: dentro del proyecto, modificar App > Providers
 > AppServiceProvider.php para forzar las URLs a ejecutarse en https implementando el siguiente codigo:

public function boot(): void
    {
       ...

        //Forzar URLs seguras
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////

###################################################################################################
########################*** VIDEO TUTORIALES Y PAGINAS INFORMATIVAS ***############################
###################################################################################################

* TUTORIAL LARAVEL EN 2 HORAS: https://www.youtube.com/watch?v=a-4923Uyu54

* TUTORIAL CRUD LARAVEL 11 [40 minutos]: https://www.youtube.com/watch?v=Qpsy89EQ85c

* TUTORIAL PARA DESPLEGAR LARAVEL CON RAILWAY: https://youtu.be/H4lYOEmrVbE?si=RJBKzHiz2rUGueF1
* Laravel & MySQL Despliegue en Railway desde cero: https://youtu.be/uU7tWbyqKXc?si=3SaCv0e1SpBAtQtS

* DOCUMENTACION RAILWAY: https://docs.railway.app
* DOCUMENTACION LARAVEL: https://laravel.com/docs/11.x
* DOCUMENTACION JETSTREAM: https://jetstream.laravel.com/introduction.html
