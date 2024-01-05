<?php

class ControleLogin {
    private bool $usuarioLogado;

    public function __construct() {
        session_start();
        if(!isset($_SERVER["UsuarioLogado"])){
            $_SERVER["UsuarioLogado"] = false;
            $this->usuarioLogado = false;
        }
    }

    function statusUsuario(){
        return $this->usuarioLogado;
    }
}