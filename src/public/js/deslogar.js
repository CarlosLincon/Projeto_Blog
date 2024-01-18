document.querySelector('.container-menu-opcoes-ul-li-div').addEventListener('click', function () {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', './../../controlador/Deslogar.php', true);
    xhr.onload = function () {

        if (xhr.status === 200) {
            let containerUsuarioMN = document.querySelector(".container-menu-usuario");
            containerUsuarioMN.innerHTML = ` <div class="container-menu-usuario-login">
          <button class="menu-usuario-login-button" onclick="chamandoForm('formLogin')">Fazer Login</button>
        </div>`;

        }
    };
    xhr.send();
});
