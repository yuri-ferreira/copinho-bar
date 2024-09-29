const menu = document.getElementById('abrirMenu')
const fMenu = document.getElementById('fecharMenu')

menu.addEventListener('click', menuAtivo)
fMenu.addEventListener('click', menuDesativado)

function menuAtivo () {
  document.getElementById('menuFora').classList.add('ativo')
}
function menuDesativado () {
  document.getElementById('menuFora').classList.remove('ativo')
}

