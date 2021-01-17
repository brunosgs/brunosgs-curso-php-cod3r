<div class="titulo">Desafio: Include/Require</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Bruno', 27, 'brunosoges');

$usuario->apresentar();
unset($usuario);

?>