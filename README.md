<div align="center">
   <div >
      <img style="background-color: #000; display: inline-block; padding: 10px; border-radius: 8px;" width="500" src="assets/logo.png" alt="Snowworm Logo">
   </div>
   <br>
   <br>
    <h1 width="200">Prueba Técnica - Desarrollador Junior</h1>
   <p>La siguiente prueba evaluará tus habilidades técnicas en el desarrollo web con Laravel y Tailwind CSS.</p>
   <br>
</div>

## 🎯 Objetivo

Desarrollar una aplicación web para gestión de inventario que demuestre:

1. Capacidad para implementar funcionalidades básicas en Laravel
2. Habilidad para crear interfaces responsivas con Tailwind CSS
3. Comprensión de conceptos fundamentales de desarrollo web
4. Aplicación de buenas prácticas de programación

---

## 📋 Requisitos Técnicos

### 🔒 Módulo de Autenticación
- [ ] Sistema de registro/login con validación
- [ ] Protección de rutas para usuarios no autenticados
- [ ] Perfil básico del usuario (nombre, email, fecha de registro)
- [ ] Opción de cerrar sesión

### 🛍️ Gestión de Categorías (CRUD Completo)
- [ ] Creación de categorías con campos:
  - Nombre (requerido, máximo 100 caracteres)
  - Descripción (opcional, texto largo)
  - Imagen (opcional, almacenamiento local)
- [ ] Listado paginado con búsqueda (nombre/descripción)
- [ ] Edición y eliminación de productos
- [ ] Notificaciones visuales para acciones (éxito/error)

### 🛍️ Gestión de Productos (CRUD Completo)
- [ ] Creación de productos con campos:
  - Nombre (requerido, máximo 100 caracteres)
  - Descripción (opcional, texto largo)
  - Precio (requerido, decimal positivo)
  - Cantidad (requerido, entero no negativo)
  - Categoría (seleccionar de la lista del CRUD anterior)
  - Imagen (opcional, almacenamiento local)
- [ ] Listado paginado con búsqueda (nombre/descripción)
- [ ] Edición y eliminación de productos
- [ ] Notificaciones visuales para acciones (éxito/error)

### 🖥️ Interfaz de Usuario
- [ ] Diseño responsivo con Tailwind CSS
- [ ] Layout consistente con:
  - Barra de navegación
  - Área de contenido principal
  - Mensajes de estado
- [ ] Formularios con validación visual
- [ ] Tabla de productos ordenable

---

## ⚙️ Tecnologías Requeridas

| Área         | Tecnologías                                                                 |
|--------------|-----------------------------------------------------------------------------|
| Backend      | Laravel (actual), Eloquent ORM, Validación nativa                               |
| Frontend     | Blade, Tailwind CSS (actual), Alpine.js (opcional)                               |
| Base de Datos| MySQL 8+ o PostgreSQL                                                     |
| Control Versión| Git, con commits descriptivos en inglés                                |

---

## 📦 Entregables Obligatorios

1. **Código Fuente** en repositorio Git con:
   - Estructura limpia y organizada
   - Migraciones y seeders para datos de prueba
   - Configuración de entorno (.env.example)

2. **Documentación** en README.md que incluya:
   - Requisitos del sistema
   - Instrucciones de instalción detalladas
   - Explicación de decisiones técnicas relevantes
   - Capturas de pantalla del funcionamiento

3. **Demo Funcional**:
   - Video corto (2-3 min) mostrando las funcionalidades
   - O en su defecto, GIFs demostrativos

---

## 📊 Criterios de Evaluación

### Funcionalidad (40%)
- Compleción de requisitos obligatorios
- Correcto funcionamiento de todas las features
- Manejo adecuado de errores

### Código (30%)
- Estructura limpia y organización
- Uso apropiado de Eloquent y relaciones
- Validación y sanitización de datos
- Reutilización de código (componentes, traits, etc.)

### UI/UX (20%)
- Diseño consistente y profesional
- Experiencia de usuario intuitiva
- Responsividad en diferentes tamaños

### Documentación (10%)
- Claridad y completitud del README
- Calidad de las instrucciones de instalación
- Explicación de decisiones técnicas

---

## ⏱️ Tiempo y Entrega

- **Duración estimada:** 6-8 horas
- **Plazo de entrega:** 3 días hábiles desde asignación
- **Formato de entrega:**
  1. Fork del repositorio base
  2. Desarrollo en branch con tu nombre (ej. `john-doe`)
  3. Pull Request al repositorio original
  4. Incluir en descripción del PR:
     - Tiempo invertido
     - Dificultades encontradas
     - Features extras implementadas

---

## ✨ Elementos Diferenciadores (Opcionales)

Estos elementos no son obligatorios pero sumarán puntos:

- Implementación de tests básicos (Feature o Unit)
- Uso de componentes Livewire
- Sistema de categorías anidadas
- Exportación de productos a CSV/Excel
- Gráficos simples de inventario (usando Chart.js)
- Despliegue en servicio free (Heroku, Railway, etc.)

---

## ❓ Preguntas Frecuentes

**¿Puedo usar librerías adicionales?**  
No, solo se permite utilizar las herramientas que proporcionar el framework por defecto, esto para fines de evaluación.

**¿Debo implementar todos los extras?**  
No, con los requisitos básicos es suficiente para aprobar.

**¿Qué versión de Laravel debo usar?**  
La última estable al momento de realizar la prueba.

---

## 📌 Notas Finales

- Se valorará más código limpio y funcional que features complejas
- El diseño debe ser profesional pero no requiere ser elaborado
- Ante dudas, tomar decisiones razonables y documentarlas

¡Buena suerte! 🚀