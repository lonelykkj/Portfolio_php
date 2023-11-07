const modal = document.getElementById('modal');
const messageBox = document.getElementById('messageBox');
const messageBoxLkd = document.getElementById('messageBoxLkd');
function showMessageModal(value, element) {
    console.log(element);
    modal.style.animation = "fade-in 0.3s";
    element.style.animation = "fade-in 0.3s";
    modal.style.display = 'block';
    element.style.display = 'block';
    document.body.classList.add('overflow');

    if (value === true || value === "true") {
        modal.addEventListener('click', modalClose);
        element.addEventListener('click', modalClose);
        modal.classList.add("open");
        element.classList.add("open");
    }

    function modalClose() {
        modal.style.animation = "fade-out 0.3s";
        element.style.animation = "fade-out 0.3s";
        modal.addEventListener('animationend', onAnimationEnd);
        element.addEventListener('animationend', onAnimationEnd);

        function onAnimationEnd() {
            modal.removeEventListener('animationend', onAnimationEnd);
            element.removeEventListener('animationend', onAnimationEnd);
            modal.style.display = 'none';
            element.style.display = 'none';
            document.body.classList.remove('overflow');
            modal.style.animation = '';
            element.style.animation = '';
        }
    }
}