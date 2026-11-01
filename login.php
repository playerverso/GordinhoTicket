<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gordinho-Eventos - Login</title>
  <style>
    /* ====== ESTILO GERAL ====== */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    /* ====== CONTAINER PRINCIPAL ====== */
    .principal {
      display: flex;
      height: 100vh;
      width: 100%;
    }

    /* ====== LADO ESQUERDO ====== */
    .imagem-texto {
      flex: 1;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .controle-esquerda {
      text-align: center;
      width: 80%;
    }

    .controle-esquerda img {
      width: 320px;
      height: auto;
      margin-bottom: 20px;
    }

    .controle-esquerda h1 {
      font-size: 30px;
      color: #0044ff;
      margin-bottom: 10px;
    }

    .controle-esquerda p {
      font-size: 15px;
      color: #555;
      line-height: 1.5;
      padding: 0 130px;
    }

    @media (max-width: 768px) {
  .imagem-texto {
    display: none;
  }

  .login {
    flex: 1 1 100%;
    width: 100%;
  }
}
    /* ====== LADO DIREITO (LOGIN) ====== */
    .login {
      flex: 1;
      background-color: #eaeaea;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>

  <!-- Container principal -->
  <div class="principal">

    <!-- LADO ESQUERDO -->
    <div class="imagem-texto"> <!-- Documentação: LADO ESQUERDO -->
      <div class="controle-esquerda">
        <img src="img/img-login.webp" alt="Imagem ilustrativa">
        <h1>Rápido, Prático e Seguro</h1>
        <p>
          Sabia que com nosso aplicativo você pode comprar ingressos com ainda 
          mais praticidade e segurança? Baixe agora nosso App e tenha acesso a
          promoções exclusivas, ingressos antecipados e muito mais!<br>
          Não perca tempo, baixe já e garanta seu lugar nos melhores eventos!
        </p>
      </div>
    </div>

    <!-- LADO DIREITO -->

<!-- ====== LADO DIREITO (LOGIN) ====== -->
<div class="login"> <!-- Documentação: LADO DIREITO -->
  <div class="controle-login">
    <img src="img/logo-gordinho-afiliados1.png" alt="Logo Login">

    <h1>Acesse sua conta</h1>
    <p>Que bom ter você aqui!</p>

    <!-- Campo de E-mail -->
    <label for="email">E-mail</label>
    <input type="email" id="email" placeholder="Digite seu e-mail" required>

    <!-- Campo de Senha -->
    <label for="senha">Senha</label>
    <div class="campo-senha">
      <input type="password" id="senha" placeholder="Digite sua senha" required>
      <i class="bi bi-eye" id="toggleSenha"></i>
    </div>

    <a href="#" class="esqueceu-senha">Esqueceu a senha?</a>

    <button class="btn-entrar">Entrar</button>

    <p class="criar-conta">
      Primeira vez na Gordinho Eventos? 
      <a href="#">Criar conta</a>
    </p>
  </div>
</div>

<!-- Adicione no <head> do seu HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
  .login {
    flex: 1;
    background-color: #f9f9f9;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .controle-login {
    text-align: center;
    width: 80%;
    max-width: 400px;
  }

  .controle-login img {
    width: 200px;
    height: auto;
    margin-bottom: 30px;
  }

  .controle-login h1 {
    color: #0044ff;
    font-size: 28px;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .controle-login p {
    color: #555;
    font-size: 14px;
    margin-bottom: 20px;
  }

  /* ====== Labels ====== */
  .controle-login label {
    margin-left: 10px;
    display: block;
    text-align: left;
    font-weight: bold;
    color: #333;
    font-size: 14px;
    margin-bottom: 5px;
  }

  .controle-login input {
    width: 90%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 14px;
  }

  .campo-senha {
    position: relative;
  }

  .campo-senha i {
    position: absolute;
    right: 18px;
    top: 40%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #555;
  }

  .esqueceu-senha {
    display: block;
    text-align: center;
    color: #0044ff;
    font-size: 13px;
    margin-bottom: 20px;
    text-decoration: none;
    font-weight: bold;
  }

  .btn-entrar {
    width: 95%;
    padding: 12px;
    background-color: #0044ff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background 0.3s;
  }

  .btn-entrar:hover {
    background-color: #0033cc;
  }

  .criar-conta {
    font-size: 13px;
    margin-top: 20px;
    
  }

  .criar-conta a {
    color: #0044ff;
    text-decoration: none;
    font-weight: bold;
  }

  .criar-conta a:hover {
    text-decoration: underline;
  }

  /* ====== RESPONSIVO ====== */
@media (max-width: 768px) {
  /* Oculta o lado esquerdo */
  .imagem-texto {
    display: none;
  }

  /* Login ocupa toda a tela */
  .login {
    flex: 1 1 100%;
    width: 100%;
    height: 100vh;
    background-color: #fff;
    padding: 40px 20px;
  }

  .controle-login {
    width: 100%;
    max-width: 360px;
    margin: 0 auto;
    text-align: center;
  }

  .controle-login img {
    width: 200px;
    margin-bottom: 15px;
  }

  .controle-login h1 {
    font-size: 24px;
  }

  .controle-login p {
    font-size: 13px;
  }

  .controle-login input {
    font-size: 14px;
    padding: 10px;
  }

  .btn-entrar {
    font-size: 15px;
    padding: 10px;
  }
}

</style>

<script>
  // ===== Exibir/Ocultar senha =====
  const toggleSenha = document.getElementById("toggleSenha");
  const senhaInput = document.getElementById("senha");

  toggleSenha.addEventListener("click", () => {
    const tipo = senhaInput.getAttribute("type") === "password" ? "text" : "password";
    senhaInput.setAttribute("type", tipo);
    toggleSenha.classList.toggle("bi-eye");
    toggleSenha.classList.toggle("bi-eye-slash");
  });
</script>
    </div>

</body>
</html>
