# **ClimArg**

## **Descripción del Proyecto**
El proyecto **ClimArg** es una aplicación web que permite consultar información meteorológica de las provincias argentinas. Utiliza la API de Meteoblue para obtener datos climáticos en tiempo real y los presenta en una tabla organizada de manera intuitiva. Este proyecto es ideal para aprender sobre la integración con APIs y la manipulación de datos en el frontend.

---

## **Características**
- Selección de provincias argentinas a través de un menú desplegable.
- Consulta de datos meteorológicos en tiempo real, como:
  - Temperatura máxima y mínima.
  - Humedad relativa.
  - Velocidad del viento.
  - Precipitación.
- Tabla organizada y fácil de leer.
- Diseño responsive para dispositivos móviles y escritorio.

---

## **Requisitos Previos**
Antes de usar este proyecto, asegúrate de tener lo siguiente:
1. **Servidor web local** como XAMPP, WAMP o similar.
2. **PHP** (versión 7.4 o superior).
3. Clave API válida de [Meteoblue](https://www.meteoblue.com/).
4. Navegador web moderno.

---

## **Estructura del Proyecto**
```plaintext
├── backend/
│   ├── clima.php       # Procesa las solicitudes y conecta con la API de Meteoblue.
│   ├── config.php      # Archivo para configurar la clave API.
├── frontend/
│   ├── index.html      # Página principal con la interfaz de usuario.
│   ├── styles.css      # Archivo de estilos para el diseño visual.
│   ├── script.js       # Lógica para la interacción con el usuario y backend.
├── README.md           # Documentación del proyecto
```

---

## **Configuración**

### **Clonar o descargar el proyecto**
Descarga este repositorio y colócalo en la carpeta raíz del servidor (por ejemplo, en `htdocs` si usas XAMPP).

### **Configurar la clave API**
Ve al archivo `backend/config.php` y agrega tu clave API de Meteoblue:
```php
<?php
define('METEOBLUE_API_KEY', 'TU_CLAVE_API_AQUÍ');
?>
```

### **Iniciar el servidor local**
Abre tu servidor local (XAMPP, WAMP, o similar).
Activa los servicios Apache (y MySQL si necesitas una base de datos para otro uso futuro).
Ve al navegador y accede a:
http://localhost/ruta_del_proyecto/frontend/index.html
ruta_del_proyecto reemplázalo con el nombre que le diste

---

## **Uso**
1. Abre la aplicación en el navegador desde la URL mencionada.
2. En la página principal:
   - Selecciona una provincia del menú desplegable.
   - Haz clic en el botón "Consultar clima".
3. La tabla mostrará información meteorológica actualizada
4. Disfruta de un acceso rápido y organizado al clima de cualquier provincia argentina.

---

## **Tecnologías Utilizadas**
- HTML5 y CSS3: Para estructurar y estilizar la interfaz de usuario.
- JavaScript: Para manejar eventos del usuario y solicitudes HTTP al servidor.
- PHP: Para procesar las solicitudes del cliente y conectarse con la API.
- API de Meteoblue: Fuente de datos climáticos en tiempo real.

---

## **Posibles Errores y Soluciones**
1. No se muestran datos en la tabla:
  - Asegúrate de que la clave API esté configurada correctamente en config.php.
  - Verifica que la ruta hacia clima.php en script.js sea válida.
2. Error 404 (Archivo no encontrado):
  - Confirma que el archivo clima.php existe y esté en la ubicación correcta (backend/clima.php).
3. La página no carga correctamente:
  - Verifica que el servidor local esté en ejecución.
  - Revisa la consola del navegador para identificar errores de JavaScript.

---

## **Contribuciones**
¿Quieres contribuir a este proyecto? ¡Eres bienvenido! Puedes colaborar mejorando la interfaz, agregando nuevas funcionalidades o solucionando errores.
Para colaborar:
1. Haz un fork de este repositorio.
2. Realiza los cambios en una rama nueva.
3. Envía un pull request describiendo los cambios realizados.

---

## **Licencia**
Este proyecto es de uso libre con fines educativos. Puedes usarlo y modificarlo según tus necesidades.
Está licenciado bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.