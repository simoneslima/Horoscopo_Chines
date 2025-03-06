function ClearSigno() {
    // Seleciona a tag p pelo id e limpa seu conteúdo
    var signoElement = document.getElementById('signo');
    signoElement.innerHTML = "";

    var dataElement = document.getElementById('data_nascimento');
    dataElement.value = ""; // Reseta o valor do campo de data
}