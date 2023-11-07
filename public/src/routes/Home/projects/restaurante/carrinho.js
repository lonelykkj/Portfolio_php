const lanches = document.querySelectorAll('.lanche');

    lanches.forEach(lanche => {
        const descricaoLanche = lanche.querySelector('.descricao-lanche');

        lanche.addEventListener('mouseover', () => {
            descricaoLanche.style.display = 'block';
        });

        lanche.addEventListener('mouseout', () => {
            descricaoLanche.style.display = 'none';
        });
    });