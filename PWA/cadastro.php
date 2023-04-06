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

// TODO: Inserir código para salvar o login e senha em um banco de dados ou arquivo

echo "Cadastro realizado com sucesso!";
?>
