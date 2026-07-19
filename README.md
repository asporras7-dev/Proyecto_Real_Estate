# Proyecto Real State

Plataforma integral orientada a la gestión y visualización del sector inmobiliario de una empresa. Permite a los clientes explorar inmuebles disponibles mediante interfaces intuitivas y contactarse directamente con dicha empresa, mientras que la administración controla el inventario de propiedades, gestiona a los usuarios registrados y recibe la información de contacto por parte de los clientes.

---

## Stack Tecnológico

**Backend & Servidor**
- **Framework Core:** Slim Framework v3 (Arquitectura Middleware y orquestador REST).
- **Base de Datos:** MySQL / MariaDB relacional.
- **Abstracción de Base de Datos:** ADOdb (Capa de abstracción segura para prevenir inyecciones SQL).
- **Servidor Web:** Apache (con directivas estrictas de reescritura en `.htaccess`).

**Frontend & Interfaz**
- **Arquitectura UI:** HTML5 semántico, CSS3, JavaScript (ES6+).
- **Consumo Asíncrono:** jQuery AJAX (Consumo de API REST sin recargas).
- **Motor Cartográfico:** Leaflet.js integrado con la API de Mapbox.
- **UX & Notificaciones:** SweetAlert2.
- **Empaquetado:** Parcel (para optimización y *bundling* de recursos).
- **Integraciones de Utilidad:** FormSubmit API (Correos B2C sin servidor SMTP) y PHP QR Code (Generación offline-to-online).

---

## Funcionalidades Principales

La aplicación está diseñada para atender tanto a clientes finales como a agentes administrativos:

### 1. Panel de Usuario (Cliente)
- **Catálogo Inmobiliario:** Exploración dinámica de propiedades disponibles con detalles completos e imágenes.
- **Detalle Interactivo:** Vistas dedicadas por inmueble (`detallePropiedad.php`) con acceso fácil a la información.
- **Captura de Leads (Comunicación B2C):** Módulo de contacto (`contactenos.php`) que integra el servicio *FormSubmit* para enrutar automáticamente las intenciones de compra o alquiler directo a la bandeja de correo del administrador, eliminando la necesidad de un servidor SMTP propio.
- **Autenticación Básica:** Registro y login de usuarios (`login.php`, `registrarse.php`).

### 2. Panel Administrativo
- **Gestor de Inventario:** Creación, edición y eliminación de propiedades (`propiedades.php`, `actualizarDatos.php`).
- **Administración de Usuarios:** Listado y control de acceso del personal/clientes (`listaUsuarios.php`, `nuevoUsuario.php`).
- **Compartición Inteligente:** Generación automática de Códigos QR únicos por propiedad para facilitar la promoción en medios físicos y redes sociales.

---

## Valor de Negocio y Logros Técnicos (Highlights para Reclutadores)

Este proyecto destaca por aplicar conceptos de desarrollo de software corporativo y arquitecturas orientadas a servicios (SOA):

- **Arquitectura Slim Framework & Middlewares:** En lugar de usar PHP espagueti, el tráfico se orquesta mediante un *Front Controller* (`index.php`) impulsado por Slim. Esto permite definir rutas limpias (`/listaUsuarios`, `/insertarPropiedad`) y preparar el terreno para interceptores de autenticación y CORS.
- **Consumo Asíncrono (API-First):** El frontend está completamente desacoplado del backend. En lugar de usar envíos de formularios síncronos tradicionales en PHP, las vistas HTML/PHP actúan como clientes consumiendo su propia API RESTful mediante peticiones asíncronas (AJAX), logrando una experiencia de usuario fluida sin recargas innecesarias.
- **Capa de Abstracción Avanzada (ADOdb):** La integración de ADOdb (`NewADOConnection`) demuestra enorme madurez técnica. Se utiliza el método `autoExecute` para mapear *payloads* JSON dinámicamente hacia sentencias SQL seguras (INSERT/UPDATE), previniendo inyecciones SQL y permitiendo migraciones futuras a PostgreSQL u Oracle sin reescribir lógica de negocio.
- **Estrategia Híbrida Offline-to-Online (O2O):** Implementación de la librería nativa `phpqrcode` para generar códigos QR únicos por propiedad, permitiendo a los agentes inmobiliarios imprimir promociones físicas que dirigen tráfico instantáneamente a la vista web del inmueble.
- **Seguridad en Servidor Web:** Uso de directivas estrictas de Apache en `.htaccess` para forzar el enrutamiento hacia el API y ocultar la verdadera estructura de directorios del servidor, previniendo la navegación no autorizada.
- **Visualización Cartográfica Dinámica:** Integración avanzada de Leaflet.js consumiendo *tiles* de Mapbox (`mapa.js`), permitiendo renderizar marcadores interactivos (ej. oficinas y propiedades) mediante coordenadas geográficas precisas.
- **Experiencia de Usuario (UX) Moderna:** Inclusión de **SweetAlert2** para manejar notificaciones no bloqueantes (prompts y confirmaciones) al interactuar con las bases de datos (CRUD), sustituyendo las alertas nativas del navegador.

---

## Potencial de Escalabilidad y Despliegue

Aunque el proyecto fue desarrollado y probado para operar en entornos locales, su base tecnológica y arquitectura actual permite que pueda ser desplegado nativamente en infraestructuras *Cloud* o tradicionales si se requiriese:
- **Servidor Web:** Listo para operar en **Apache** (incluye reglas en `.htaccess` para reescritura de URLs y seguridad básica).
- **Contenedorización (Docker):** El repositorio cuenta con un `Dockerfile` base, lo que permite instanciar la aplicación y sus dependencias (PHP/Apache) de forma aislada, facilitando enormemente un potencial salto a producción mediante contenedores.
- **Migración de Base de Datos (Cloud):** Localmente el esquema es gestionado a través de **phpMyAdmin** bajo un motor MySQL/MariaDB. Esta persistencia relacional estándar facilita la exportación inmediata hacia servicios administrados en la nube como **Amazon RDS**, **PlanetScale** o **DigitalOcean Managed Databases**. Además, gracias a la capa de abstracción ADOdb, el sistema podría escalar a un motor PostgreSQL sin refactorizar el código de backend.

---

## Instalación y Ejecución Local (Guía Paso a Paso)

<details>
<summary><b>Haz clic aquí para ver la Guía de Instalación y Ejecución Local</b></summary>

### 1. Prerrequisitos
- **XAMPP / WAMP / MAMP** (Para servidor Apache y MySQL local) o Docker.
- [Node.js](https://nodejs.org/) (Para el empaquetado de assets frontend).
- **Composer** (Para manejar dependencias PHP).

### 2. Clonar el Repositorio
```bash
git clone https://github.com/asporras7-dev/Proyecto_Real_Estate.git
cd Proyecto_Real_State
```

### 3. Configuración de la Base de Datos (phpMyAdmin)
El sistema requiere una base de datos MySQL/MariaDB para funcionar.
1. Abre tu gestor de bases de datos local (ej. **phpMyAdmin** en `http://localhost/phpmyadmin`).
2. Crea una base de datos nueva (ej. `real_state_db`) e importa las tablas necesarias.
3. Navega al directorio del proyecto en `api/scr/public/`.
4. Renombra el archivo `conexion.example.php` a `conexion.php`.
5. Edita `conexion.php` e ingresa los valores de tu entorno local (ej. `TU_HOST = "localhost"`, `TU_USUARIO = "root"`, y `TU_BASE_DE_DATOS = "real_state_db"`).

### 4. Instalar Dependencias del Backend
El proyecto utiliza Composer para manejar el Slim Framework y ADOdb:
```bash
cd api
composer install
cd ..
```

### 5. Ejecutar el Proyecto
Se recomienda montar el proyecto dentro de un entorno Apache (como la carpeta `htdocs` en XAMPP) para que el archivo `.htaccess` funcione correctamente y resuelva las rutas de Slim. Accede mediante: `http://localhost/Proyecto_Real_State`

</details>

---

## Estructura del Proyecto

<details>
<summary><b>Haz clic aquí para desplegar la Arquitectura de Carpetas</b></summary>

```text
Proyecto_Real_State/
├── api/                  # Lógica de Backend (Slim Framework)
│   ├── scr/public/       # Núcleo de la API REST (Rutas Slim y ADOdb)
│   ├── vendor/           # Dependencias de Composer
│   └── composer.json     # Manifiesto de paquetes PHP
├── doc/                  # Documentación técnica extendida del proyecto
├── phpqrcode/            # Librería generadora de códigos QR dinámicos
├── js/                   # Scripts del cliente (Lógica de Mapbox/Leaflet, AJAX)
├── css/                  # Hojas de estilo modulares
├── img/                  # Recursos gráficos de la plataforma y propiedades
├── *.php                 # Vistas principales (index.php, contactenos.php, propiedades.php)
├── header.php/footer.php # Componentes estructurales de UI (Plantillas HTML)
├── bd.php                # Conector auxiliar de bases de datos
├── .htaccess             # Directivas de seguridad y reescritura de Apache
├── Dockerfile            # Configuración para despliegue aislado en contenedores
├── package.json          # Dependencias de Node.js para empaquetado (Parcel)
└── Proyecto.sln          # Solución integrada para Visual Studio
```
</details>
