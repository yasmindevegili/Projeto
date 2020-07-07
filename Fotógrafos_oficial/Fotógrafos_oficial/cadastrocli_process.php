<?php
require_once('config.php');
try {

    if (isset($_POST['enviar'])) {
        
        $cod_tipo = ($_POST['cod_tipo']);
        $_SESSION['cod_tipo'] = $cod_tipo;
        $query = "INSERT INTO usuario SET nome_usuario=:nome_usuario, nome_completo=:nome_completo, email=:email, senha=:senha, tipo_usuario_cod_tipo='$cod_tipo'";
        $submitData = $connection -> prepare($query);

        $nomeUsuario = trim(strip_tags(htmlspecialchars($_POST['nome_usuario'])));
        $nomeCompleto = trim(strip_tags(htmlspecialchars($_POST['nome_completo'])));
        $email = trim(strip_tags(htmlspecialchars($_POST['email'])));
        $senha = trim(strip_tags(htmlspecialchars(sha1(md5($_POST['senha'])))));
        

        $submitData -> bindValue(':nome_usuario', $nomeUsuario);
        $submitData -> bindValue(':nome_completo', $nomeCompleto);
        $submitData -> bindValue(':email', $email);
        $submitData -> bindValue(':senha', $senha);
        

        if ($submitData -> execute()) {

            session_start();

            $_SESSION['isLogged'] = true;
            $_SESSION['nome_usuario'] = $nomeUsuario;
            $_SESSION['nome_completo'] = $nomeCompleto;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            if ($cod_tipo=="2"){
                header('Location: cadastroFotografo.html');
            } elseif ($cod_tipo=="3"){
                header('Location: pag_perfis.php');
            } else{
                header("#");
            }

        } else {
            print $cod_tipo;
            var_dump ($query);

        }

    }

} catch (PDOException $error) {

    print 'Conexão falhou! ' . $error -> getMessage();

}