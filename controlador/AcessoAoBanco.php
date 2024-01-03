<?php

class AcessoBanco {
   
    private string $host = "localhost";
    private string $usuario = "root";
    private string $senha = "";
    private string $banco = "blogx";
    private mysqli $conexao;

    public function acessandoAoBanco(){
       $this->conexao = new mysqli($this->host, $this->usuario,$this->senha,$this->banco);
       $this->conexao->set_charset("utf8");
       return $this->conexao;
    }
}


?>