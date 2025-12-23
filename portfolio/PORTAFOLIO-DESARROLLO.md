# 📋 Documentación de Desarrollo - Portafolio

## 📌 Información del Proyecto

**Nombre:** Portfolio Personal
**Stack:** Laravel 10 + Inertia.js + Vue 3 + TailwindCSS
**Base de datos:** MySQL (portafolio)
**Servidor local:** http://127.0.0.1:8000

---

## 🎨 Sistema de Colores

### Paleta Principal
```css
Background base:     #fffef6  (Crema suave)
Primary (brand):     #0550b8  (Azul principal)
Dark / text strong:  #1a355c  (Azul oscuro)
Card background:     #ffffff  (Blanco)
```

### Variables CSS (`:root`)
```css
--bg-app: #fffef6;
--primary: #0550b8;
--dark: #1a355c;
--text-main: #1a355c;
--text-muted: rgba(26, 53, 92, 0.7);
--text-disabled: rgba(26, 53, 92, 0.4);
--card-bg: #ffffff;
--border-default: rgba(26, 53, 92, 0.25);
--primary-hover: #04449c;
--primary-active: #03357a;
--success: #16a34a;
--warning: #facc15;
--danger: #dc2626;
```

### Clases Tailwind Personalizadas
```
bg-app-bg           /* Fondo crema */
bg-primary          /* Azul principal */
bg-primary-hover    /* Hover azul */
bg-primary-active   /* Active azul */
bg-dark             /* Azul oscuro */
text-dark           /* Texto principal */
text-dark-muted     /* Texto secundario */
text-dark-disabled  /* Texto deshabilitado */
border-default      /* Borde sutil */
```

### Componentes CSS Disponibles
```css
.card              /* Tarjeta con sombra suave */
.btn-primary       /* Botón azul principal */
.btn-secondary     /* Botón con borde */
.input             /* Input con focus azul */
.sidebar           /* Barra lateral oscura */
.link              /* Enlaces azules */
.text-muted        /* Texto secundario */
.text-disabled     /* Texto deshabilitado */
```

---

## 📊 Base de Datos - Estructura

### 1. Tabla `projects` (Proyectos)

**Campos:**
- `id` - ID único
- `title` - Título del proyecto
- `slug` - URL amigable (único)
- `short_description` - Descripción corta (text)
- `description` - Descripción completa (longText)
- `technologies` - Array JSON de tecnologías ['Laravel', 'Vue']
- `image` - Ruta de imagen destacada (nullable)
- `demo_url` - URL del demo (nullable)
- `github_url` - URL del repositorio (nullable)
- `project_date` - Fecha del proyecto (date, nullable)
- `status` - Estado: 'published' | 'draft' (default: published)
- `order` - Orden de visualización (integer, default: 0)
- `featured` - Proyecto destacado (boolean, default: false)
- `timestamps` - created_at, updated_at

**Modelo:** `App\Models\Project`

### 2. Tabla `skills` (Habilidades)

**Campos:**
- `id` - ID único
- `name` - Nombre de la habilidad
- `category` - Categoría (Frontend, Backend, Database, Tools)
- `proficiency` - Nivel de dominio 0-100 (integer, default: 50)
- `icon` - URL o clase del icono (nullable)
- `order` - Orden de visualización (integer, default: 0)
- `timestamps`

**Modelo:** `App\Models\Skill`

### 3. Tabla `experiences` (Experiencia Laboral)

**Campos:**
- `id` - ID único
- `company` - Nombre de la empresa
- `position` - Puesto/Cargo
- `description` - Descripción del puesto (text)
- `location` - Ubicación (nullable)
- `start_date` - Fecha de inicio (date)
- `end_date` - Fecha de fin (date, nullable) - null = actual
- `current` - Trabajo actual (boolean, default: false)
- `company_url` - URL de la empresa (nullable)
- `order` - Orden de visualización (integer, default: 0)
- `timestamps`

**Modelo:** `App\Models\Experience`

### 4. Tabla `education` (Educación)

**Campos:**
- `id` - ID único
- `institution` - Institución educativa
- `degree` - Grado (Licenciatura, Maestría, Certificación)
- `field_of_study` - Campo de estudio
- `description` - Descripción (text, nullable)
- `start_date` - Fecha de inicio (date)
- `end_date` - Fecha de fin (date, nullable)
- `current` - En curso (boolean, default: false)
- `location` - Ubicación (nullable)
- `order` - Orden de visualización (integer, default: 0)
- `timestamps`

**Modelo:** `App\Models\Education`

---

## 🗂️ Estructura de Archivos del Proyecto

```
portfolio/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
│       ├── Project.php          ✅ Configurado
│       ├── Skill.php             ✅ Configurado
│       ├── Experience.php        ✅ Configurado
│       └── Education.php         ✅ Configurado
│
├── database/
│   ├── migrations/
│   │   ├── 2025_12_22_142906_create_projects_table.php      ✅
│   │   ├── 2025_12_22_142912_create_skills_table.php        ✅
│   │   ├── 2025_12_22_142918_create_experiences_table.php   ✅
│   │   └── 2025_12_22_142925_create_education_table.php     ✅
│   └── seeders/
│       └── DatabaseSeeder.php    ✅ Con datos de ejemplo
│
├── public/
│   └── images/                   📁 Para logos y assets
│
├── resources/
│   ├── css/
│   │   └── app.css               ✅ Sistema de colores configurado
│   ├── js/
│   │   ├── Pages/
│   │   │   ├── Auth/             (Laravel Breeze)
│   │   │   ├── Profile/          (Laravel Breeze)
│   │   │   ├── Dashboard.vue     (Laravel Breeze)
│   │   │   ├── Welcome.vue       (Laravel Breeze)
│   │   │   └── StyleGuide.vue    ✅ Guía de estilos
│   │   ├── Components/
│   │   └── Layouts/
│   └── views/
│
├── routes/
│   └── web.php                   ✅ Rutas configuradas
│
├── tailwind.config.js            ✅ Colores personalizados
├── .env                          ✅ DB: portafolio
└── package.json
```

---

## 💾 Datos de Ejemplo (Seeders)

### Proyectos (3)
1. **Sistema de Gestión Empresarial** (Featured)
   - Laravel, Vue.js, MySQL, TailwindCSS

2. **E-commerce Moderno** (Featured)
   - Laravel, Inertia.js, Vue 3, Stripe

3. **Blog Personal**
   - Laravel, Blade, Alpine.js, MySQL

### Habilidades (11)
- **Frontend:** Vue.js (90%), React (75%), TailwindCSS (95%), JavaScript (88%)
- **Backend:** Laravel (92%), PHP (85%), Node.js (70%)
- **Database:** MySQL (80%), PostgreSQL (65%)
- **Tools:** Git (85%), Docker (60%)

### Experiencia (2)
1. **Tech Solutions S.A.** - Desarrollador Full Stack Senior (2022-Actual)
2. **Innovate Digital** - Desarrollador Web (2020-2021)

### Educación (2)
1. **Universidad Tecnológica** - Ingeniería en Sistemas (2016-2020)
2. **Platzi** - Certificación Full Stack Laravel + Vue (2021)

---

## 🚀 Comandos Útiles

### Desarrollo
```bash
# Servidor Laravel
cd portfolio
php artisan serve
# → http://127.0.0.1:8000

# Compilar assets (Vite)
npm run dev
# → Vite corriendo en http://localhost:5174

# Ambos en paralelo (recomendado)
# Terminal 1: php artisan serve
# Terminal 2: npm run dev
```

### Base de Datos
```bash
# Ejecutar migraciones
php artisan migrate

# Poblar con datos de ejemplo
php artisan db:seed

# Refrescar todo (⚠️ borra datos)
php artisan migrate:fresh --seed

# Ver estado de migraciones
php artisan migrate:status
```

### Artisan útiles
```bash
# Crear modelo con migración
php artisan make:model NombreModelo -m

# Crear controlador
php artisan make:controller NombreController

# Limpiar cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

---

## 🔗 URLs del Proyecto

| Página | URL | Estado |
|--------|-----|--------|
| Home | http://127.0.0.1:8000 | ✅ Completo |
| Projects | http://127.0.0.1:8000/projects | ✅ Completo |
| About | http://127.0.0.1:8000/about | ✅ Completo |
| Contact | http://127.0.0.1:8000/contact | ✅ Completo |
| Guía de Estilos | http://127.0.0.1:8000/style-guide | ✅ Completo |
| Login | http://127.0.0.1:8000/login | ✅ Breeze |
| Register | http://127.0.0.1:8000/register | ✅ Breeze |
| Dashboard | http://127.0.0.1:8000/dashboard | ✅ Breeze |

---

## ✅ Fase 1 - Completada

### Backend/Estructura de Datos
- ✅ Modelos creados (Project, Skill, Experience, Education)
- ✅ Migraciones ejecutadas
- ✅ Seeders con datos de ejemplo
- ✅ Base de datos poblada

### Frontend/Estilos
- ✅ Sistema de colores implementado
- ✅ Variables CSS configuradas
- ✅ Clases Tailwind personalizadas
- ✅ Componentes base (.card, .btn-primary, etc.)
- ✅ Guía de estilos visual

---

## ✅ Fase 2 - Completada

### Páginas Públicas Creadas:

1. **Home/Hero** ✅
   - Presentación con nombre y título profesional
   - Hero section con CTAs
   - Proyectos destacados
   - Enlaces a redes sociales
   - CTA final para contacto

2. **Projects** ✅
   - Galería responsive de proyectos
   - Filtros por tecnología (interactivos)
   - Cards con hover effects
   - Badges para proyectos destacados
   - Enlaces a demo y código
   - Estadísticas de proyectos

3. **About** ✅
   - Biografía personal
   - Habilidades organizadas por categoría (Frontend, Backend, Database, Tools)
   - Barras de progreso con niveles de proficiency
   - Timeline de experiencia profesional
   - Educación formal
   - Certificaciones destacadas (Platzi, Udemy)
   - CTA para contacto

4. **Contact** ✅
   - Formulario funcional con validación
   - Email: alejandraob21@gmail.com
   - Teléfono: +54 299 608 3688
   - Enlaces a GitHub y LinkedIn
   - Indicador de disponibilidad
   - Sección de FAQ
   - Manejo de errores y mensajes de éxito

---

## 📝 Notas Técnicas

### Inertia.js
- Usa `Inertia::render('ComponentName')` en rutas
- Props se pasan desde el controlador
- Componentes Vue en `resources/js/Pages/`

### Tailwind + Custom Classes
- Puedes usar tanto clases Tailwind como custom
- Ejemplo: `class="card"` o `class="bg-primary text-white"`
- Las custom classes están en `resources/css/app.css`

### Imágenes
- Assets públicos: `public/images/`
- Referenciar: `<img src="/images/logo.png">`
- Para assets compilados: usar `@/images/logo.png`

---

## 🎨 Guía de Diseño

### Principios
1. **Color solo para acción importante**
2. **Espacio más importante que color**
3. **Logo siempre protagonista**
4. **Nunca colores random**

### Logo
- Sobre fondo claro: logo full color
- Sobre header oscuro: logo blanco
- Dejar espacio alrededor
- No competir con botones

### Tipografía
- Texto principal: `text-dark` (#1a355c)
- Secundario: `text-muted` (opacity 0.7)
- Deshabilitado: `text-disabled` (opacity 0.4)
- Links: `text-primary` (#0550b8)

---

## 🔧 Troubleshooting

### Error: SQLSTATE[HY000] [2002]
- MySQL no está corriendo en XAMPP
- Verificar puerto 3306

### Error: Vite manifest not found
- Ejecutar `npm run dev`
- O compilar para producción: `npm run build`

### Error: Class not found
- Ejecutar: `composer dump-autoload`

### Cambios CSS no se reflejan
- Vite debe estar corriendo: `npm run dev`
- Ctrl+F5 para limpiar caché del navegador

---

## 📚 Recursos

- **Laravel Docs:** https://laravel.com/docs
- **Inertia.js Docs:** https://inertiajs.com
- **Vue 3 Docs:** https://vuejs.org
- **Tailwind CSS:** https://tailwindcss.com
- **Guía de estilos:** http://127.0.0.1:8000/style-guide

---

---

## 📋 Fase 3 - Próximos Pasos (Opcional)

### Mejoras Futuras:

1. **Panel de Administración**
   - CRUD de proyectos desde el dashboard
   - Gestión de skills
   - Gestión de experiencia y educación
   - Gestión de mensajes de contacto

2. **Funcionalidades Avanzadas**
   - Sistema de email para formulario de contacto
   - Galería de imágenes para proyectos
   - Blog personal (opcional)
   - Modo oscuro
   - Internacionalización (ES/EN)

3. **Optimizaciones**
   - SEO meta tags
   - Open Graph para redes sociales
   - Sitemap XML
   - Analytics (Google Analytics)
   - Optimización de imágenes

4. **Despliegue**
   - Configuración para producción
   - Deploy a hosting (Vercel, Netlify, o servidor tradicional)
   - Configuración de dominio personalizado
   - SSL/HTTPS

---

**Última actualización:** 22 de diciembre, 2024
**Versión:** 2.0 - Fase 1 y 2 Completadas

## 🎉 Estado del Proyecto

**Portfolio Público: 100% Completo**
- ✅ Home con Hero y proyectos destacados
- ✅ Projects con filtros interactivos
- ✅ About con skills, experiencia y educación
- ✅ Contact con formulario funcional
- ✅ Sistema de colores personalizado
- ✅ Responsive design
- ✅ Componentes reutilizables
- ✅ Base de datos poblada con datos reales
