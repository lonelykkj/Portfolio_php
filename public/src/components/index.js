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
// function fetchGitHubReadme(username, repository) {
//     const perfilGit = document.getElementById('perfilGit');
//     perfilGit.style.display = 'grid';
//     const readmeContent = document.getElementById('readme-content');

//     fetch(`https://raw.githubusercontent.com/${username}/${repository}/main/README.md`)
//         .then((response) => response.text())
//         .then((data) => {
//             // Exibir o conteúdo diretamente no elemento HTML
//             readmeContent.innerHTML = data;
//         })
//         .catch((error) => {
//             console.error('Erro ao buscar README do GitHub:', error);
//             readmeContent.textContent = 'Não foi possível carregar o README.';
//         });
//         document.getElementById('github-preview').addEventListener("mouseout", fecharReadme);

//         function fecharReadme(){
//             perfilGit.style.display = 'flex';
//         }
// }
{/* <div class="github-readme">
                        <h2>README</h2>
                        <div id="readme-content"></div>
                      </div> */}


