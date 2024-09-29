const carrossel = document.querySelector(".carrossel");
const direcaoBtn = document.querySelectorAll(".caixa-bebidas i");
const cartao = carrossel.querySelector(".cartao").offsetWidth;


direcaoBtn.forEach(Btn => {
  Btn.addEventListener('click', () => {
    carrossel.scrollLeft += Btn.id === "esquerda" ? -cartao : cartao;
  })
})
