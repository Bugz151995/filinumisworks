document.addEventListener("DOMContentLoaded", () => {
  const bell = document.getElementById('bell');
  const cart = document.getElementById('cart');
  const watch = document.getElementById('watch');

  const bellBtn = document.getElementById('notifNav');
  const cartBtn = document.getElementById('cartNav');
  const watchBtn = document.getElementById('watchNav');
  
  bellBtn.onclick = () => {
    addAnimation(bell, 'ring'),
    removeAnimation(cart, 'flip-horizontal'),
    removeAnimation(watch, 'pulse')
  }

  cartBtn.onclick = () => {
    addAnimation(cart, 'flip-horizontal'),
    removeAnimation(bell, 'ring'),
    removeAnimation(watch, 'pulse')
  }

  watchBtn.onclick = () => {
    addAnimation(watch, 'pulse'),
    removeAnimation(cart, 'flip-horizontal'),
    removeAnimation(bell, 'ring')
  }

  function addAnimation(link, animation) {
    link.classList.add(animation);
  }

  function removeAnimation(link, animation) {
    link.classList.remove(animation);
  }
});