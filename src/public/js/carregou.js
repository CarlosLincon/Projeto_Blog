
function exibirCarregamento(idDoPai,mensagem) {
    let paiDiv = document.getElementById(idDoPai);
    if (!paiDiv) {
        console.log("Não foi possivel encontrar o ElementoHtml");
        return;
    }
    let loadingContainer = document.createElement("div");
    loadingContainer.className = "loading-container";
    loadingContainer.id = `loading-container:${idDoPai}`;
  
    if(mensagem){
        console.log("entrou");
        let ploadingContainer = document.createElement("p");
        ploadingContainer.className = "loading-spinner-p";
        ploadingContainer.textContent = mensagem;
        paiDiv.appendChild(ploadingContainer);
    }
    paiDiv.appendChild(loadingContainer);
    loadingContainer = document.getElementById(`loading-container:${idDoPai}`);
    loadingContainer.innerHTML = `<div class="loading-spinner"></div>`;
    loadingContainer.style.display = "flex";
   
}

function esconderCarregamento(idDoPai) {
    var loadingContainer = document.getElementById(`loading-container:${idDoPai}`);
    loadingContainer.innerHTML = '';
    loadingContainer.style.display = "none";
}
