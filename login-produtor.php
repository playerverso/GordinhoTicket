

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gordinho-Eventos - Login Produtor</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.min.css"/>
</head>
<body>
<style>
    @font-face {
        font-family: 'font';
        src: url('Mansalva-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }   

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        font-family: 'Poppins', sans-serif;
    }
</style>





 <div class="cadastro-principal">
    
    <!-- ======== LADO ESQUERDO (seu código) ======== -->
    <div class="cadastro-esquerda">
      <div class="logo">
        <img src="img/logo-gordinho-afiliados1.png" alt="Logo">
      </div>

      <h1>Acesse sua conta</h1>
      <p>Que bom ter você de volta!.</p>

      <form class="form-login">
        <input type="email" placeholder="Email" name="email" required />
       

        <div class="senha">
          <input type="password" placeholder="Senha" name="senha" id="senha" required />
          <span class="toggle-olho" onclick="toggleSenha('senha')">
            <i class="bi bi-eye-fill"></i>
          </span>
        </div>

        <div class="esqueceu-senha">         
            <a href="#">Esqueceu sua senha?</a> 
        </div>

        <button type="submit" class="btn-entrar">Entrar</button>

        <p class="acesso">
         Primeira vez na Gordinho Afiliados? 
          <a href="cadastro.php">Criar Conta</a>
        </p>
      </form>
    </div>

    <!-- ======== LADO DIREITO ======== -->
    <div class="cadastro-direita">
      <h1>
        Crie, lance e escale seu produto digital de maneira 
        <span class="destaque" id="palavra-dinamica">simples</span>.
      </h1>
      <p>“A Gordinho Afiliados foi a plataforma que mais me apoiou em toda minha trajetória no digital.”</p>

      <div class="avaliacao">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <span>— João Martins</span>
      </div>

      <img src="img/dashboard.png" alt="Imagem ilustrativa">
    </div>

  </div>

  <script>
    // Alternar exibição da senha
    function toggleSenha(id) {
      const input = document.getElementById(id);
      if (input.type === "password") {
        input.type = "text";
      } else {
        input.type = "password";
      }
    }

  

    // Trocar palavras dinamicamente (azul)
    const palavras = ["simples", "fácil", "descomplicada", "lucrativa"];
    let index = 0;
    setInterval(() => {
      const span = document.getElementById("palavra-dinamica");
      index = (index + 1) % palavras.length;
      span.textContent = palavras[index];
    }, 2000);
  </script>


<style>
    >
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(45deg, #000 80%, #004aad 20%);
      color: #333;
    }

    .cadastro-principal {
      display: flex;
      min-height: 100vh;
    }

    /* ======== LADO ESQUERDO ======== */
    .cadastro-esquerda {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      max-width: 1150px;
      margin: 0 auto;
      padding: 40px 400px;
      background: #fff;
   
      border-radius: 10px;
    }

    .cadastro-esquerda .logo img {
      width: 150px;
      margin-bottom: 20px;
    }

    .cadastro-esquerda h1 {
      font-size: 28px;
      margin-bottom: 10px;
      text-align: center;
    }

    .cadastro-esquerda p {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .form-login {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .form-login input[type="text"],
    .form-login input[type="email"],
    .form-login input[type="tel"],
    .form-login input[type="password"] {
      padding: 12px 15px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      width: 100%;
    }

    .senha {
      position: relative;
      width: 100%;
    }

    .toggle-olho {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #555;
    }

    .esqueceu-senha {
      display: flex;
      align-items: flex-start;
      font-size: 14px;
    }

    .esqueceu-senha input[type="checkbox"] {
      margin-right: 8px;
      margin-top: 3px;
    }

    .esqueceu-senha a {
      color: #007bff;
      text-decoration: none;
      margin: 0 2px;
    }

    .btn-entrar {
      padding: 12px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
      transition: background 0.3s;
    }

    .btn-entrar:hover {
      background-color: #0056b3;
    }

    .acesso {
      margin-top: 15px;
      font-size: 14px;
      text-align: center;
    }

    .acesso a {
      color: #007bff;
      text-decoration: none;
      margin-left: 5px;
    }

    /* ======== LADO DIREITO ======== */
    .cadastro-direita {
      flex: 1;
      background-color: #e2e2e2;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 80px;
    }

    .cadastro-direita h1 {
      font-size: 30px;
      color:#000;
      font-weight: bold;
      line-height: 1.3;
      max-width: 600px;
    }

    .cadastro-direita .destaque {
      color: #007bff;
    }

    .cadastro-direita p {
      font-size: 18px;
      margin: 25px 0;
      color:#333;
      max-width: 500px;
    }

    .avaliacao {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .avaliacao .bi-star-fill {
      color: gold;
    }

    .avaliacao span {
      font-weight: 500;
    }

    .cadastro-direita img {
      max-width: 680px;
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 5px 25px rgba(0,0,0,0.5);
      margin-top: 30px;
    }

    /* ======== RESPONSIVIDADE ======== */
    @media (max-width: 900px) {
      .cadastro-principal {
        flex-direction: column;
      }

      .cadastro-direita {
        display: none;
      }

      .cadastro-esquerda {
        max-width: 450px;
        width: 90%;
         padding: 40px 20px;
        margin-top: 50px;
      }
    }
</style>

</body>
</html>