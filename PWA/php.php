
<link rel="manifest" href="/manifest.json"><script>
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

<!-- Tela de cadastro de usuário -->
<form action="cadastro.php" method="POST">
  <label for="login">Login:</label>
  <input type="text" id="login" name="login">
  <br>
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha">
  <br>
  <input type="submit" value="Cadastrar">
</form>

<!-- Tela de login -->
<form action="login.php" method="POST">
  <label for="login">Login:</label>
  <input type="text" id="login" name="login">
  <br>
  <label for="senha">Senha:</label>
  <input type="password" id="senha" name="senha">
  <br>
  <input type="submit" value="Entrar">
</form>

<!-- Tela de menu -->
<h1>Bem-vindo</h1>
<p>Seu login foi realizado com sucesso!</p>


