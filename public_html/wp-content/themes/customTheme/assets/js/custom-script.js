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