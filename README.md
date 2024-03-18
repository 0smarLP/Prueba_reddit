<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## Sobre el Proyecto de Prueba Técnica

Este proyecto es una prueba técnica desarrollada con Laravel 11 y Vue.js 3 utilizando la Composition API, Inertia.js y TailwindCSS. La aplicación permite a los usuarios consultar los titulares filtrados por sección del sitio web Reddit utilizando su API de consulta en formato JSON.

### Características Principales

- Consulta de titulares de Reddit por categoría.
- Integración con la API de Reddit.
- Autenticación de usuarios.
- Uso de la base de datos SQLite para almacenamiento de categorías.

### Instalación

Para instalar y ejecutar este proyecto, sigue los siguientes pasos:

1. Clona el repositorio:

git clone https://github.com/0smarLP/Prueba_reddit

2. Instala las dependencias de Composer:

composer install

3. Instala las dependencias de NPM:
   
npm install

4. Compila los assets:

npm run dev

5. Crea una copia de `.env.example` y renómbrala a `.env`. Asegúrate de configurar la conexión a la base de datos SQLite y cualquier otra configuración necesaria.
6. Genera la clave de la aplicación:

php artisan key:generate

7. Ejecuta las migraciones y seeders para crear la base de datos con las categorías y el usuario por defecto:

php artisan migrate 

8. Sirve la aplicación:

Ahora podrás acceder a la aplicación en `http://localhost:8000`.

Email: dev@gmail.com

Contraseña: password



### Uso de la Aplicación

Una vez iniciada sesión, navega a la pestaña 'Reddit' en la aplicación. Encontrarás un selector para elegir la categoría que deseas consultar. Al seleccionar una categoría y hacer clic en "Consultar Información", se mostrarán los titulares relevantes.

### Contacto

Si tienes preguntas o necesitas ayuda con la aplicación, no dudes en contactarme en: osmichan07@gmail.com

---

Este proyecto es solo con fines de demostración y evaluación.
