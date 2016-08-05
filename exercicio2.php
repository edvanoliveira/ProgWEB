<?php
$usuario = "root";
$senha = "";
$nome = $_POST['nome'];
$comentarios = $_POST['comentarios'];
$sexo = $_POST['sexo'];
try {

	$conn = new PDO("mysql:host=localhost;dbname=test", $usuario, $senha);
	$conn->exec("set names utf8");

	$stmt = $conn->prepare("INSERT INTO exercicio2 (nome, sexo, comentarios) VALUES (:nome, :sexo, :comentarios)");
	$stmt->bindValue(':nome', $nome);
	$stmt->bindValue(':sexo', $sexo);
	$stmt->bindValue(':comentarios', $comentarios);
	$stmt->execute();

	$stmtrs = $conn->prepare('SELECT * FROM exercicio2');
	$stmtrs->execute();

	while($row = $stmtrs->fetch(PDO::FETCH_OBJ)) {
		print ($row->nome . " - "  . $row->sexo . " - " . $row->comentarios . " </br> ");
	}

} catch (PDOException $e) {
	echo $e->getMessage();
}
?>