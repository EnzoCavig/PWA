<link rel="manifest" href="/manifest.json">
<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
        console.log('ServiceWorker registrado com sucesso:', registration.scope);
      }, function(err) {
        console.log('Falha ao registrar o ServiceWorker:', err);
      });
    });
  }
</script>
<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

// TODO: Inserir código para verificar se o login e senha correspondem aos dados salvos no banco de dados ou arquivo

if ($login_valido && $senha_valida) {
  include 'menu.php';
} else {
  echo "Login ou senha inválidos.";
}
?>
