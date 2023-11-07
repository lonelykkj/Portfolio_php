const movimentoAle = document.getElementById('img');
function mover(){
    const movX = window.innerWidth - movimentoAle.clientWidth;
    const movY =  window.innerHeight - movimentoAle.clientHeight;

    const aleX = Math.random() * movX;
    const aleY = Math.random() * movY;

    movimentoAle.style.left = `${aleX}px`;
    movimentoAle.style.top = `${aleY}px`;
}
mover();

setInterval(mover, 3000)