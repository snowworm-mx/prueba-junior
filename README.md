<div align="center">
   <div >
      <img style="background-color: #000; display: inline-block; padding: 10px; border-radius: 8px;" width="500" src="assets/logo.png" alt="Snowworm Logo">
   </div>
   <br>
   <br>
    <h1 width="200">Desarrollador</h1>
   <p>La siguiente es una prueba para evaluar a aspectos técnicos de los candidatos a desarrollador <b>Junior</b>.</p>
   <br>
</div>

## Objetivo de la Prueba

Desarrollar una aplicación web sencilla utilizando **Laravel** y **Tailwind CSS** para gestionar un inventario básico de productos. Esta prueba evalúa la capacidad del candidato para:

1. Diseñar una base de datos funcional.
2. Implementar un backend en Laravel.
3. Crear una interfaz de usuario sencilla y funcional con Tailwind CSS.
4. Utilizar las mejores prácticas de desarrollo.

---

## Requisitos

### Funcionalidades

1. **Autenticación de usuarios**

   - Los usuarios deben poder registrarse, iniciar sesión y cerrar sesión.
   - La aplicación debe proteger rutas según si el usuario está autenticado.

2. **Gestor de Productos**

   - Crear, leer, actualizar y eliminar (CRUD) productos.
   - Cada producto debe tener los siguientes campos:
     - Nombre (string, obligatorio).
     - Descripción (text, opcional).
     - Precio (decimal, obligatorio).
     - Cantidad en inventario (entero, obligatorio).

3. **Listado de Productos**

   - Mostrar todos los productos disponibles en una tabla.
   - Permitir buscar productos por nombre o descripción.
   - Implementar paginación para el listado de productos.

4. **Diseño**
   - Utilizar **Tailwind CSS** para crear una interfaz amigable y responsive.

---

## Tecnologías

- **Backend:** Laravel (versión 11).
- **Frontend:** Blade templates y Tailwind CSS.
- **Base de Datos:** MySQL o SQLite.
- **Autenticación:** Laravel Breeze o Sanctum.
- **Control de versiones:** Git.

---

## Entregables

1. **Código fuente:**

   - Subir el código fuente al repositorio indicado en las intrucciones.

2. **Archivo `README.md`:**

   - Instrucciones claras para configurar y ejecutar el proyecto localmente.
   - Explicación breve de las decisiones tomadas durante el desarrollo.
   - Tecnologías utilizadas.

3. **Demostraciones Visuales:**
   - Capturas de pantalla o GIFs mostrando:
     - Registro e inicio de sesión de usuarios.
     - CRUD de productos en acción.
     - Listado de productos.

---

## Criterios de Evaluación

1. **Funcionalidad:**
   - La aplicación cumple con todos los requisitos funcionales descritos.

2. **Diseño:**
   - Interfaz simple, funcional y atractiva utilizando Tailwind CSS.

3. **Calidad del Código:**
   - Uso correcto de las mejores prácticas en Laravel.
   - Estructura del proyecto clara y organizada.

4. **Calidad del control de versiones:**

   - Uso de git flow para la creación los commits del proyecto.
   - Títulos descriptivos para los commits del proyecto.

5. **Documentación:**

   - El archivo `README.md` contiene toda la información necesaria para ejecutar y entender el proyecto.

6. **Extras (opcional):**
   - Uso de componentes reutilizables en Blade.
   - Agregar validación avanzada en los formularios.

---

## Tiempo Estimado

Se espera que la prueba pueda completarse en **6 horas**. Sin embargo, se otorgará un plazo de **3 días hábiles** para entregar la prueba, permitiendo al candidato organizar su tiempo.

---

## Proceso de Entrega

1. El candidato debe realizar un fork de este repositorio (https://github.com/snowworm-mx/prueba-junior).
   - Clonar el fork a su máquina local.
   - Crear un `branch` en su cuenta de GitHub utilizando su nombre completo.
2. Una vez completada la prueba, realizar un pull request al repositorio original.
3. Esperar el la revisión del código.

---

**¡Éxito!**
