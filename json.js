function carregar() {
    fetch('src/projetos.json')
        .then(response => response.json())
        .then(projetos => {
            const box = document.querySelector("#jogos-container");

            projetos.forEach(projeto => {
                const card = document.createElement("div");
                card.classList.add("card");

                const img = document.createElement("img");
                img.src = projeto.imagem;
                img.alt = projeto.nome;

                const titulo = document.createElement("h3");
                titulo.textContent = projeto.nome;

                const button = document.createElement("button");
                button.textContent = "Ver Projeto";
                button.addEventListener('click', function() {
                    window.location.href = projeto.url;
                });

                card.appendChild(img);
                card.appendChild(titulo);
                card.appendChild(button);

                box.appendChild(card);
            });
        })
        .catch(error => console.error('Erro ao carregar projetos:', error));
}

carregar();