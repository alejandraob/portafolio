# Guía de Despliegue en Render.com

## 📋 Pasos para Desplegar

### 1. ✅ Compilar Assets (YA HECHO)
```bash
npm run build
```

### 2. ✅ Optimizar Laravel (YA HECHO)
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 3. 🔧 Configurar Variables de Entorno en Render

Ve a tu proyecto en Render → **Environment** y agrega estas variables:

#### Variables Obligatorias:

```
APP_NAME=Portfolio María Alejandra Ojeda
APP_ENV=production
APP_KEY=base64:DRgHl0+9diIOK397xByh3GJqwZLQWSsylGMLnJtRiLo=
APP_DEBUG=false
APP_URL=https://tu-app.onrender.com
```

**⚠️ IMPORTANTE**: Reemplaza `https://tu-app.onrender.com` con tu URL real de Render

#### Base de Datos (Render te dará estos valores):

```
DB_CONNECTION=mysql
DB_HOST=[copiar de Render - Internal Database URL]
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=[copiar de Render]
DB_PASSWORD=[copiar de Render]
```

#### Email (Gmail):

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=alejandraob21@gmail.com
MAIL_PASSWORD=hgpu veoj pevu cnss
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=alejandraob21@gmail.com
MAIL_FROM_NAME=Portfolio - María Alejandra Ojeda
```

#### Cache y Sesión:

```
LOG_CHANNEL=stack
LOG_LEVEL=error
BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```

---

## 4. 📦 Crear Base de Datos en Render

1. En Render Dashboard → **New** → **MySQL**
2. Nombre: `portfolio-db`
3. Database Name: `portfolio`
4. Región: Elige la más cercana
5. Plan: Free (para empezar)
6. **Crear Database**
7. Copia los valores de conexión (Host, User, Password)

---

## 5. 🚀 Crear Web Service en Render

1. En Render Dashboard → **New** → **Web Service**
2. Conecta tu repositorio de GitHub
3. Configuración:

### Build Command:
```bash
composer install --no-dev --optimize-autoloader && npm install && npm run build && php artisan config:cache && php artisan route:cache && php artisan view:cache
```

### Start Command:
```bash
php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT
```

### Environment:
- Runtime: **PHP**
- PHP Version: **8.1** o superior

4. En **Environment Variables**, agrega todas las variables del paso 3

---

## 6. 🗄️ Ejecutar Migraciones

Una vez desplegado, ve a **Shell** en Render y ejecuta:

```bash
php artisan migrate:fresh --seed --force
```

⚠️ Esto creará las tablas y poblará la base de datos con tus datos.

---

## 7. ✅ Verificar Despliegue

1. Visita tu URL: `https://tu-app.onrender.com`
2. Verifica que todas las páginas funcionen:
   - `/` - Home
   - `/projects` - Proyectos
   - `/about` - Sobre mí
   - `/contact` - Contacto
3. Prueba el formulario de contacto

---

## 🔧 Comandos Útiles en Render Shell

```bash
# Ver logs
tail -f storage/logs/laravel.log

# Limpiar cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Ejecutar migraciones
php artisan migrate --force

# Ver estado de la base de datos
php artisan db:show
```

---

## 🐛 Solución de Problemas

### Error 500
- Revisa los logs en Render Dashboard → Logs
- Verifica que `APP_KEY` esté configurada
- Verifica que `APP_DEBUG=false`

### Error de Base de Datos
- Verifica las credenciales de MySQL
- Asegúrate de que la base de datos esté corriendo
- Ejecuta las migraciones

### Assets no se cargan
- Verifica que `npm run build` se ejecutó correctamente
- Revisa que `APP_URL` sea correcto

### Emails no se envían
- Verifica las credenciales de Gmail
- Asegúrate de usar la contraseña de aplicación (no tu contraseña normal)

---

## 📝 Notas Importantes

- **APP_KEY**: Usa la generada específicamente para producción
- **APP_DEBUG**: SIEMPRE debe ser `false` en producción
- **Contraseñas**: Nunca subas el archivo `.env` a GitHub
- **SSL**: Render proporciona SSL gratis automáticamente
- **Logs**: Revisa los logs regularmente en caso de errores

---

## 🔄 Actualizaciones Futuras

Cuando hagas cambios:

1. **Haz push a GitHub**
2. **Render desplegará automáticamente**
3. Si hay cambios en la base de datos:
   ```bash
   php artisan migrate --force
   ```

---

## ✅ Checklist Final

- [ ] Variables de entorno configuradas
- [ ] Base de datos MySQL creada
- [ ] Web Service desplegado
- [ ] Migraciones ejecutadas
- [ ] Sitio web accesible
- [ ] Formulario de contacto funciona
- [ ] SSL activo (HTTPS)
- [ ] Favicon visible

---

¡Tu portfolio está listo para el mundo! 🎉
