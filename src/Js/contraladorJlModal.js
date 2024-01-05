const mainModal = document.querySelector(".modal-principal");
const botaoFecharModal = document.querySelector(".modalPG-fecharMD");


botaoFecharModal.addEventListener(("click", () => {
    console.log(mainModal);
    mainModal.id = " ";
}))

