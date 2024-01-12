<?php

namespace Carloslincon29\Blogx\controlador;

require_once __DIR__ . "/AcessoAoBanco.php";



use Carloslincon29\Blogx\controlador\AcessoAoBanco;

class ControleUsuario
{
    private bool $usuarioLogado = false;
    private string $nomeDoUsuario = "";
    private string $emailDoUsuario = "";
    private $acessoaobanco;
    private $conexao;
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION["UsuarioLogado"]) or $_SESSION["UsuarioLogado"] === false) {
            $_SESSION["UsuarioLogado"] = false;
        } 
        $this->acessoaobanco = new AcessoAoBanco();
        $this->conexao = $this->acessoaobanco->getConexaoAoBanco();
    }

    public function statusUsuario()
    {
        return $this->usuarioLogado;
    }



    public function criarUsuario(string $nome_Usuario, string $senha_Usuario, string $email_Usuario)
    {
        $usuarioExiste = $this->consultandoUsuarioNoBanco($email_Usuario, $nome_Usuario);
        if (!$usuarioExiste) {
            $criandoUsuario = $this->conexao->prepare("INSERT INTO usuario (id, nome_usuario, senha_usuario, email_usuario) VALUES (NULL, ?, ?, ?)");
            $criandoUsuario->bind_param("sss", $nome_Usuario, $senha_Usuario, $email_Usuario);
            $criandoUsuario->execute();
            $criandoUsuario->close();
        }
    }


    private function consultandoUsuarioNoBanco(string $email_Usuario, string $nome_Usuario): int
    {
        $consultandoNoBanco = $this->conexao->prepare("SELECT * FROM usuario WHERE nome_usuario = ? OR email_usuario = ?");
        $consultandoNoBanco->bind_param("ss", $nome_Usuario, $email_Usuario);
        $consultandoNoBanco->execute();
        $resultadoDaConsulta = $consultandoNoBanco->get_result();
        $existeResultado = $resultadoDaConsulta->num_rows > 0;
        $consultandoNoBanco->close();
        return $existeResultado;
    }

    public function fazerLogin(string $login_Usuario,  string $senha_Usuario)
    {
        $consultandoNoBanco = $this->conexao->prepare("SELECT * FROM usuario WHERE nome_usuario = ? or email_usuario = ? && senha_usuario = ?");
        $consultandoNoBanco->bind_param("sss", $login_Usuario, $login_Usuario, $senha_Usuario);
        $consultandoNoBanco->execute();
        $resultadoDoLogin = $consultandoNoBanco->get_result();
        if ($resultadoDoLogin->num_rows === 1) {

            $dadosDoLogin = $resultadoDoLogin->fetch_assoc();
            $this->nomeDoUsuario = $dadosDoLogin['nome_usuario'];
            $this->emailDoUsuario = $dadosDoLogin['email_usuario'];
            $_SESSION["Nome_Usuario"] = $dadosDoLogin['nome_usuario'];
            $_SESSION["Email_Usuario"] = $dadosDoLogin['email_usuario'];
            $_SESSION["UsuarioLogado"] = true;
            $this->usuarioLogado = true;
        }
    }

    public function pegandoNomeDoUsuario(): string
    {

        return $this->nomeDoUsuario;
    }


    public function pegandoEmailDoUsuario(): string
    {

        return $this->emailDoUsuario;
    }
}
