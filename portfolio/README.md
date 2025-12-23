# Portfolio Personal - María Alejandra Ojeda

Portfolio profesional desarrollado con Laravel 10, Inertia.js y Vue 3. Sitio web moderno y responsive que muestra proyectos, habilidades, experiencia laboral y educación.

## Tecnologías Utilizadas

### Backend
- **Laravel 10.50.0** - Framework PHP
- **MySQL** - Base de datos
- **Inertia.js** - Arquitectura SPA sin API

### Frontend
- **Vue 3** - Framework JavaScript (Composition API)
- **TailwindCSS** - Framework CSS
- **Vite** - Build tool y dev server

### Autenticación
- **Laravel Breeze** - Sistema de autenticación

## Características

- **Página de Inicio**: Presentación personal con enlaces a redes sociales
- **Proyectos**: Listado de proyectos destacados con tecnologías utilizadas
- **Sobre Mí**: Información profesional, habilidades, experiencia laboral, educación y certificaciones
- **Contacto**: Formulario de contacto funcional con información de contacto directa
- **Diseño Responsive**: Totalmente adaptado a dispositivos móviles, tablets y desktop
- **Sistema de Colores Personalizado**: Paleta de colores corporativa (#fffef6, #0550b8, #1a355c)

## Estructura de Base de Datos

### Tablas Principales

- **projects**: Información de proyectos con tecnologías, enlaces a GitHub y demos
- **skills**: Habilidades técnicas con nivel de proficiencia y categorías
- **experiences**: Experiencia laboral con fechas y descripciones
- **education**: Educación académica
- **users**: Sistema de autenticación (Laravel Breeze)

## Instalación

### Requisitos Previos

- PHP >= 8.1
- Composer
- Node.js >= 18
- MySQL >= 8.0

### Pasos de Instalación

1. Clonar el repositorio
```bash
git clone https://github.com/alejandraob/portfolio.git
cd portfolio
```

2. Instalar dependencias de PHP
```bash
composer install
```

3. Instalar dependencias de Node
```bash
npm install
```

4. Configurar el archivo de entorno
```bash
cp .env.example .env
```

5. Editar el archivo `.env` con la configuración de tu base de datos:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portafolio
DB_USERNAME=root
DB_PASSWORD=
```

6. Generar la clave de aplicación
```bash
php artisan key:generate
```

7. Ejecutar las migraciones y seeders
```bash
php artisan migrate:fresh --seed
```

8. Compilar los assets
```bash
npm run dev
```

9. Iniciar el servidor de desarrollo
```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

## Desarrollo

### Compilar Assets en Modo Desarrollo
```bash
npm run dev
```

### Compilar Assets para Producción
```bash
npm run build
```

### Ejecutar Migraciones
```bash
php artisan migrate
```

### Refrescar Base de Datos con Datos de Prueba
```bash
php artisan migrate:fresh --seed
```

## Estructura del Proyecto

```
portfolio/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ContactController.php
│   └── Models/
│       ├── Project.php
│       ├── Skill.php
│       ├── Experience.php
│       └── Education.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/
│   ├── css/
│   │   └── app.css (Sistema de colores personalizado)
│   ├── js/
│   │   ├── Components/
│   │   ├── Layouts/
│   │   │   └── PortfolioLayout.vue
│   │   └── Pages/
│   │       ├── Home.vue
│   │       ├── Projects.vue
│   │       ├── About.vue
│   │       └── Contact.vue
│   └── views/
│       └── app.blade.php
├── routes/
│   └── web.php
└── public/
```

## Sistema de Colores

El proyecto utiliza una paleta de colores personalizada definida en `resources/css/app.css`:

- **Background**: `#fffef6` - Fondo cálido
- **Primary**: `#0550b8` - Azul principal
- **Dark**: `#1a355c` - Azul oscuro
- **Text Main**: `#1a355c` - Texto principal
- **Text Muted**: `rgba(26, 53, 92, 0.7)` - Texto secundario

## Rutas Principales

- `/` - Página de inicio
- `/projects` - Listado de proyectos
- `/about` - Sobre mí
- `/contact` - Contacto
- `/dashboard` - Dashboard (requiere autenticación)

## Datos de Contacto

- **Email**: alejandraob21@gmail.com
- **Teléfono**: +54 299 608 3688
- **GitHub**: [github.com/alejandraob](https://github.com/alejandraob)
- **LinkedIn**: [María Alejandra Ojeda Boisier](https://www.linkedin.com/in/maría-alejandra-ojeda-boisier-506015b3)

## Proyectos Destacados

### Sistema Clínico Integral
Sistema completo de gestión clínica desarrollado con PHP y MySQL para el Sindicato de Petróleo y Gas.

### MiTurno Laravel
Sistema de gestión de turnos y citas médicas desarrollado con Laravel.
- **Repositorio**: [proyectos2024/creando/miturno-laravel](https://github.com/alejandraob/proyectos2024/tree/main/creando/miturno-laravel)

### Portfolio Personal
Este proyecto - Portfolio profesional con Laravel 10, Vue 3 e Inertia.js.

## Habilidades Técnicas

### Frontend
- HTML5 (95%)
- JavaScript (90%)
- Vue.js (70%)

### Backend
- PHP (95%)
- Laravel (75%)
- Python (50%)

### Base de Datos
- MySQL (90%)

### Herramientas
- Git (85%)
- Visual Studio Code (90%)
- Azure DevOps (80%)

## Experiencia Profesional

### Sindicato de Petróleo y Gas Privado de Río Negro, Neuquén y La Pampa
**Desarrollador** (Junio 2022 - Presente)
- Desarrollo y gestión de sistema clínico integral

**Soporte Informático** (Agosto 2016 - Mayo 2022)
- Asistencia técnica en clínica privada
- Mantenimiento de equipos y redes

### CENT N°44
**Profesor de Informática** (Enero 2018 - Diciembre 2022)
- Laboratorio de Programación II (Suplencia)
- Introducción a la Programación (Titular)

## Educación

### CENT N°44
- **Técnico Superior en Desarrollo de Sistemas Informáticos** (2012-2014)
- **Técnico Superior en Soporte de Infraestructura** (2014-2016)

### Escuela Secundaria CEM °78
- **Perito Mercantil** (2003-2008)

## Certificaciones

- Curso Profesional de Git y GitHub (Platzi)
- Curso de Frontend Developer (Platzi)
- Curso Práctico de Frontend Developer (Platzi)
- Curso de Configuración de Entorno en Windows (Platzi)
- Curso de Manejo de Datos en PHP (Platzi)
- Fundamentos de Ingeniería de Software (Platzi)
- Fundamentos de Programación y Desarrollo Web (Platzi)
- Curso Básico de JavaScript (Platzi)

## Licencia

Este proyecto es de código abierto y está disponible bajo la licencia MIT.

## Autor

**María Alejandra Ojeda Boisier**
- GitHub: [@alejandraob](https://github.com/alejandraob)
- LinkedIn: [María Alejandra Ojeda Boisier](https://www.linkedin.com/in/maría-alejandra-ojeda-boisier-506015b3)
- Email: alejandraob21@gmail.com

---

Desarrollado con Laravel 10 + Inertia.js + Vue 3 + TailwindCSS
