let numLikes = 0;
let numComments = 0;
let jaCurtiu = false;
let jaComentou = false;
// Atualizar o número de curtidas e comentários
function updateCounts() {
    document.getElementById('num-likes').textContent = numLikes;
    document.getElementById('num-comments').textContent = numComments;
}

// Evento de clique no botão de curtir
document.getElementById('btn-like').addEventListener('click', function () {
    if (jaCurtiu === false) {
        numLikes++;
        jaCurtiu = true;
        updateCounts();
        
    }
    else {
        numLikes--;
        jaCurtiu = false;
        updateCounts();
    }
});

// Evento de clique no botão de comentários
document.getElementById('btn-comment').addEventListener('click', function () {
  
    if (jaComentou === false) {
        numComments++;
        jaComentou = true;
        updateCounts();
        
    }
    else {
        numComments--;
        jaComentou = false;
        updateCounts();
    }
});