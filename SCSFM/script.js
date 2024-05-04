// Função para abrir o modal e carregar o conteúdo da página especificada
function openModal(page) {
    var modal = document.getElementById("myModal");
    var modalContent = document.getElementById("modal-content");

    // Carrega o conteúdo da página no modal
    fetch(page)
        .then(response => response.text())
        .then(data => {
            modalContent.innerHTML = data;
            modal.style.display = "block";
        })
        .catch(error => console.error('Erro ao carregar a página:', error));
}

// Função para fechar o modal
function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}
