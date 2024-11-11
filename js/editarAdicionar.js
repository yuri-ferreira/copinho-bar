const botaoAbrirAdd = document.getElementById("abrirAdicionar");
botaoAbrirAdd.addEventListener('click', () => {
  document.getElementById("adicionar").style.display = "flex";
})
const botaoFecharAdd = document.getElementById('fecharAdd')
botaoFecharAdd.addEventListener('click', () => {
  document.getElementById("adicionar").style.display = "none";
})

const botaoAbrirEdi = document.getElementById("abrirEdi");
botaoAbrirEdi.addEventListener('click', () => {
  document.getElementById("editar").style.display = "flex";
})

const botaoFecharEdi = document.getElementById('fecharEdi')
botaoFecharEdi.addEventListener('click', () => {
  document.getElementById("editar").style.display = "none";
})