document.getElementById("formularioClima").addEventListener("submit", function(evento) {
    evento.preventDefault(); // Evita que el formulario recargue la página
    const provincia = document.getElementById("selectProvincia").value; // Obtiene la provincia seleccionada

    fetch(`../backend/clima.php?provincia=${provincia}`)
        .then(respuesta => respuesta.json()) // Procesa la respuesta como JSON
        .then(datos => {
            const tablaClima = document.getElementById("tablaClima");
            tablaClima.innerHTML = ""; // Limpia la tabla antes de mostrar los datos

            // Itera sobre los datos y crea filas en la tabla
            datos.data_day.time.forEach((fecha, indice) => {
                const fila = `<tr>
                    <td>${fecha}</td>
                    <td>${datos.data_day.temperature_max[indice]}°C</td>
                    <td>${datos.data_day.temperature_min[indice]}°C</td>
                    <td>${datos.data_day.relativehumidity_mean[indice]}%</td>
                    <td>${datos.data_day.windspeed_mean[indice]} m/s</td>
                    <td>${datos.data_day.precipitation[indice]} mm</td>
                </tr>`;
                tablaClima.innerHTML += fila;
            });
        })
        .catch(error => console.error("Error al obtener datos:", error)); // Maneja errores en la solicitud
});