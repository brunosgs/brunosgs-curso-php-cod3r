<div class="titulo">Sessão #01</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

?>

<p>
    <a class="vermelho" href="/sessao/basico_sessao_alterar.php">Alterar sessão</a>
</p>