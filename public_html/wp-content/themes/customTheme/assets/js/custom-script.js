//NAVBAR//
window.addEventListener("scroll", cambioColore);

function cambioColore() {
  
  let scrollTop = window.scrollY;

  let header = document.querySelector("header");
  let altezza = 10;

  if (scrollTop > altezza) {
    header.style.backgroundColor = "white";
  } else {
    header.style.backgroundColor = ""; 
}
}
alert("ciao tritri");
console.log("ciaoooooooooooooooooooooooooooooooo");
// ------------------------------------ CODICE GREGORIO ---------------------------------------------------

function scrolla(verso, carosello) {
  let carosello = document.querySelector(`#${carosello} .carousel-inner`);
  let scrollata = carosello.offsetWidth * 0.85;
  let maxScrollLeft = carosello.scrollWidth - carosello.offsetWidth;
  if (verso === -1) {
      carosello.scrollLeft -= scrollata;
  } else {
      carosello.scrollLeft += scrollata;
  }
  if (carosello.scrollLeft >= maxScrollLeft) {
      carosello.scrollLeft = 0;
  }
}

// ------------------------------------FINE CODICE GREGORIO ---------------------------------------------------
