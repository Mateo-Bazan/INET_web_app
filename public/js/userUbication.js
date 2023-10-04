 // Función para inicializar el mapa
 function initMap() {
    const map = new L.Map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    // Solicitar permiso de ubicación al cargar la página
    requestLocationPermission(function (granted) {
        if (granted) {
            // Si se concede el permiso, mostrar la ubicación actual
            showUserLocation(map);
        } else {
            // Si no se concede el permiso, continuar con la aplicación
            // Aquí puedes realizar acciones adicionales según sea necesario.
        }
    });
}

// Función para solicitar permiso de ubicación
function requestLocationPermission(callback) {
    const permission = confirm("¿Conceder permiso de ubicación?");
    if (permission) {
        // Si se presiona "Sí", llamar al callback con true
        callback(true);
    } else {
        // Si se presiona "No", llamar al callback con false
        callback(false);
    }
}

// Función para mostrar la ubicación del usuario
function showUserLocation(map) {
    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(function (position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;
            map.setView([latitude, longitude], 13);
        }, function (error) {
            console.error('Error al obtener la ubicación:', error);
        });
    } else {
        alert('Tu navegador no admite geolocalización.');
    }
}