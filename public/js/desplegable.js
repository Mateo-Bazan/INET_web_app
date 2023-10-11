// //Barras barras pensalas
// const iconoMenu = document.querySelector('#hamburguesa');
// const menu = document.querySelector('#menu');
// const cerrarMenu = document.querySelector('#cerrarMenu'); // Icono de cruz
// const mapaContainer = document.querySelector('.mapa-container'); // Contenedor del mapa

// // Opacidad cuando se abra el menu
// iconoMenu.addEventListener('click', () => {
//   menu.classList.toggle('activo');
//   document.body.classList.toggle('fondo-opaco');
//   mapaContainer.classList.toggle('opaco', menu.classList.contains('activo'));
// });

// // Cruzecita para cerrar el menu 🤙
// cerrarMenu.addEventListener('click', () => {
//   menu.classList.remove('activo');
//   document.body.classList.remove('fondo-opaco');
//   mapaContainer.classList.remove('opaco');
// });

// // Para que cuando se haga click fuera del menu este se cierre
// document.body.addEventListener('click', (e) => {
//     if (!menu.contains(e.target) && !iconoMenu.contains(e.target)) {
//       menu.classList.remove('activo');
//       document.body.classList.remove('fondo-opaco');
//       mapaContainer.classList.remove('opaco');
//     }
// });

function toggleDropdown() {
  var dropdown = document.getElementById("myDropdown");
  dropdown.classList.toggle("show");
}

function selectOption(option) {
  var selectedOption = option.textContent;
  document.querySelector(".dropbtn").textContent = selectedOption;
  toggleDropdown();
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
          }
      }
  }
}

function toggleDropdown2() {
  var dropdown = document.getElementById("myDropdown2");
  dropdown.classList.toggle("show");
}

function selectOption2(option) {
  var selectedOption = option.textContent;
  document.querySelector(".dropbtn2").textContent = selectedOption;
  toggleDropdown2();
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn2')) {
      var dropdowns = document.getElementsByClassName("dropdown-content2");
      for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
          }
      }
  }
}



/*lista*/
document.addEventListener('DOMContentLoaded', function () {
  var lista = document.getElementById('lista');
  var menu = document.getElementById('menu');

  lista.addEventListener('click', function () {
    this.classList.toggle('active');
  });
});



