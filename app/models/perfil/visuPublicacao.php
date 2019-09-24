<?php

require_once("dadosPerfil.php");
require_once("../../models/database/Conexao.php");

$sql = "SELECT * FROM postagens WHERE usuarioPostou = ? ORDER BY dataPostagem DESC";
$stmt = Conexao::getConn()->prepare($sql);
$stmt->bindValue(1, $apelido);

$stmt->execute();

if ($stmt->rowCount() > 0) {
	
	$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

	foreach ($resultado as $r) {

		echo "

			<div> <img src='../../../images/user.jpg' class='rounded-circle imgPerfilPostagem'>  ".$r['usuarioPostou']." - ".date('d/m/Y H:i',strtotime($r['dataPostagem']))." </div>
			<div style='padding: 10px;'> ".$r['postagem']." </div> 

			<button> Likes (0) </button> 

			<button onclick='exibirComentarios(`#comentarios".$r['id']."`)'> Comentários </button>

			<div id='comentarios".$r['id']."' class='coments' style='margin: 0px 30px;'> 

				<form>

					<div style='position: relative;'>

						<textarea style='border: 1px solid silver; margin-top: 10px; margin-bottom: 5px;' rows='3' name='' maxlength='2000' placeholder='Faça um comentário...'></textarea>

						<div style='position: relative; left: 0;'>

							<span style='position: absolute; right: 0;'> <button> Comentar </button> </span>

						</div>

					</div>

				</form>

				<button onclick='ocultarComentarios(`#comentarios".$r['id']."`)'> Ocultar comentários</button>		
				
			</div>

			<hr>

		";

	}

} else {

	echo "Erro na consulta de SQL";

}

?>