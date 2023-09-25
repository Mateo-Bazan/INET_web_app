//Barras barras pensalas
const iconoMenu = document.querySelector('#hamburguesa');
const menu = document.querySelector('#menu');
const cerrarMenu = document.querySelector('#cerrarMenu'); // Icono de cruz
const mapaContainer = document.querySelector('.mapa-container'); // Contenedor del mapa

// Opacidad cuando se abra el menu
iconoMenu.addEventListener('click', () => {
  menu.classList.toggle('activo');
  document.body.classList.toggle('fondo-opaco');
  mapaContainer.classList.toggle('opaco', menu.classList.contains('activo'));
});

// Cruzecita para cerrar el menu 🤙
cerrarMenu.addEventListener('click', () => {
  menu.classList.remove('activo');
  document.body.classList.remove('fondo-opaco');
  mapaContainer.classList.remove('opaco');
});

// Para que cuando se haga click fuera del menu este se cierre
document.body.addEventListener('click', (e) => {
    if (!menu.contains(e.target) && !iconoMenu.contains(e.target)) {
      menu.classList.remove('activo');
      document.body.classList.remove('fondo-opaco');
      mapaContainer.classList.remove('opaco');
    }
});
