<?php
session_start();

require_once('config.php');

try {
        $tel = isset($_POST['tel']) ? trim(strip_tags(htmlspecialchars($_POST['tel']))) : '';
        $cidade = isset($_POST['cidade']) ? trim(strip_tags(htmlspecialchars($_POST['cidade']))) : '';
        $estado = isset($_POST['estado']) ? trim(strip_tags(htmlspecialchars($_POST['estado']))) : '';
        $foto_perfil = $_POST['foto_perfil'];
        $bio = isset($_POST['bio']) ? trim(strip_tags(htmlspecialchars($_POST['bio']))) : '';
        $facebook = isset($_POST['facebook']) ? trim(strip_tags(htmlspecialchars($_POST['facebook']))) : '';
        $instagram = isset($_POST['instagram']) ? trim(strip_tags(htmlspecialchars($_POST['instagram']))) : '';
        $linkedin = isset($_POST['linkedin']) ? trim(strip_tags(htmlspecialchars($_POST['linkedin']))) : '';
        
    if (isset($_POST['enviar'])) {
        $query = ("INSERT INTO perfil_fotografo (tel, cidade, estado, foto_perfil, bio, facebook, instagram, linkedin, usuario_nome_usuario) values ('$tel', '$cidade', '$estado', '$foto_perfil', '$bio', '$facebook', '$instagram', '$linkedin', '$_SESSION[nome_usuario]')");
        $submitData = $connection -> prepare($query);
        
        $submitData -> bindValue(':tel', $tel);
        $submitData -> bindValue(':cidade', $cidade);
        $submitData -> bindValue(':estado', $estado);
        $submitData -> bindValue(':foto_perfil', $foto_perfil);
        $submitData -> bindValue(':bio', $bio);
        $submitData -> bindValue(':facebook', $facebook);
        $submitData -> bindValue(':instagram', $instagram);
        $submitData -> bindValue(':linkedin', $linkedin);

        if ($submitData -> execute()) {
            $_SESSION['isLogged'] = true;
            $_SESSION['tel'] = $tel;
            $_SESSION['cidade'] = $cidade;
            $_SESSION['estado'] = $estado;
            $_SESSION['foto_perfil'] = $foto_perfil;
            $_SESSION['bio'] = $bio;
            $_SESSION['facebook'] = $facebook;
            $_SESSION['instagram'] = $instagram;
            $_SESSION['linkedin'] = $linkedin;
            header('Location: pag_perfis.php');

        } else {

            print 'Erro';
            print $_SESSION['nome_usuario'];
            print $query;
            
                        

        }

    }
} catch (PDOException $error) {

    print 'Conexão falhou! ' . $error -> getMessage();

}