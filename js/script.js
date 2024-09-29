const botaoP = document.getElementById("bPromo");
botaoP.addEventListener('click',promoExtPromo)

function promoExtPromo(){
  document.getElementById("filtru").classList.toggle("teste")
  document.getElementById("filtroPA").classList.toggle("filtros-promo-a")
}