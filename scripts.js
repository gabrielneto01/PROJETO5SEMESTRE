// Código para Selecionar o método de pagamento

const select = document.querySelector('.options')

const pgtoCartao = document.querySelector('.PgtoCartao')
const pix = document.querySelector('.Pix')
const boleto = document.querySelector('.Boleto')

function option(){
   const option = select.children[select.selectedIndex];
   selection = option.value;
   console.log(selection)
   
  switch (selection) {
   case "cartao":
      pix.classList.add('hidden');
      boleto.classList.add('hidden')
      pgtoCartao.classList.remove('hidden')
      break;
   case "pix":
      pgtoCartao.classList.add('hidden')
      boleto.classList.add('hidden')
      pix.classList.remove('hidden')
      break;
   case "boleto":
      pix.classList.add('hidden')
      pgtoCartao.classList.add('hidden')
      boleto.classList.remove('hidden')
  }
}