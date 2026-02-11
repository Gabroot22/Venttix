# Ventix - Landing Page Premium

Ventix es una plataforma moderna para la gestión de negocios. Este proyecto es una landing page diseñada con un enfoque premium, utilizando efectos visuales avanzados y una arquitectura limpia en Laravel.

## Requisitos Previos

Antes de empezar, asegúrate de tener instalado lo siguiente:

* **PHP** (Versión 8.2 o superior)
* **Composer** (Gestor de dependencias de PHP)
* **Node.js & NPM** (Para procesar Tailwind CSS con Vite)
* **SQLite** o cualquier base de datos (Laravel 11 usa SQLite por defecto)

---

## Instalación y Configuración Local

Si quieres correr este proyecto en tu máquina, sigue estos pasos:

1. **Clonar el repositorio:**
   ```git clone [https://github.com/Gabroot22/Venttix.git](https://github.com/Gabroot22/Venttix.git)```
   ```cd Venttix```

2. **Instalar dependencias**
    ```composer install```
    ```npm install```

3. **Configurar el entorno**
    ```cp .env.example .env```
    ```php artisan key:generate```

4. **Ejecutar el proyecto: En la primera ventana de la terminal se corren los estilos**
    ```npm run dev```
    **En la otra se corre el servidor**
    ```php artisan serve```