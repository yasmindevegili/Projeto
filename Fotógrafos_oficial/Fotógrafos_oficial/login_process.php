<?php

require_once('config.php');

try {
	if (isset($_POST['submit'])) {

		$query = 'SELECT nome_usuario, senha FROM usuario WHERE nome_usuario=:usuario';
		$submitData = $connection -> prepare($query);

		$nome_usuario = isset($_POST['nome_usuario']) ? trim(strip_tags(htmlspecialchars($_POST['nome_usuario']))) : '';
		/*$senha = isset($_POST['senha']) ? trim(strip_tags(htmlspecialchars(sha1(md5($_POST['senha']))))) : '';*/

		$submitData -> bindValue(':usuario', $nome_usuario);
		/*$submitData -> bindValue(':senha', $senha);*/

		// executa a query
		$submitData -> execute();

		// conta a quantidade de linhas que foi atingida
		$userAmount = $submitData -> rowCount();
		// usa o fetch para pegar todos os usuários com dados correspondentes
		$user = $submitData -> fetch(PDO::FETCH_ASSOC);

		if ($userAmount > 0) {
			session_start();

			$_SESSION['isLogged'] = true;
			$_SESSION['nome_usuario'] = $nome_usuario;
            $_SESSION['nome_completo'] = $nome_completo;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

			header('Location: pag_perfis.php');
		} 
	}
} catch (PDOException $error) {
	print 'Conexão falhou! ' . $error -> getMessage();
}

?>