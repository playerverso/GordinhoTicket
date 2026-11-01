<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "sidebar.php";
include "menu-comp.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gordinho-Eventos </title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
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

    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<?=$sidebar?>

<div class="menu-config">
    <?=$menucomp?>
</div>

<style>
@media (max-width: 768px) {
    .menu-config {
        margin-top: 50px;
    }
}
</style>

<div class="controle-principal">

<style>
/* Container principal */
.controle-principal {
  margin-left: 350px; 
  width: 80%;
  padding: 50px 0px;
}

/* Responsivo */
@media (max-width: 768px) {
  .controle-principal {
    margin-left: 0;
    padding: 50px 0px;
    width: 100%;
  }
}
</style>


<!-- ========================================= -->
<!-- =============== REPASSES ================ -->
<!-- ========================================= -->

<div class="repasses">

  <!-- PRIMEIRA COLUNA → CONTAS CADASTRADAS -->
  <div class="contas-cadastradas">
    <h2>Contas cadastradas</h2>
    <p class="info">Aqui você pode gerenciar todas as suas contas de recebimento</p>

    <div class="conta-bancaria">

      <div class="linha-titulos">
        <span>Nome da Conta</span>
        <span>Banco</span>
        <span>Nº da Conta</span>
        <span>Conta Ativa</span>
      </div>

      <div class="linha-info">
        <span>Conta Principal</span>
        <span>Banco do Brasil</span>
        <span>12345-6</span>
        <span>Sim</span>
      </div>

    </div>
  </div>


<!-- ===== CSS DA PRIMEIRA COLUNA ===== -->
<style>
.repasses {
  width: 100%;
  margin-top: 25px;
  display: flex;
  gap: 25px;
}

.contas-cadastradas {
  width: 50%;
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.info {
  margin-top: 6px;
  color: #666;
  font-size: 14px;
}

.conta-bancaria {
  margin-top: 20px;
}

.linha-titulos {
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr 0.8fr;
  font-weight: 600;
  background: #f7f7f7;
  padding: 10px;
  border-radius: 8px;
}

.linha-info {
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr 0.8fr;
  padding: 10px;
}

@media (max-width: 768px) {
  .repasses {
    flex-direction: column;
  }

  .contas-cadastradas {
    width: 100%;
  }

  .linha-titulos,
  .linha-info {
    grid-template-columns: 1fr 1fr;
  }
}
</style>


<!-- ====================================================== -->
<!-- =============== SEGUNDA COLUNA → SALDOS =============== -->
<!-- ====================================================== -->

<div class="conta-digital">

  <h2>Contas cadastradas</h2>
  <p class="info">Confira aqui o resumo da sua carteira neste evento</p>

  <div class="saldos-grid">

    <div class="saldo-box">
      <h3>Saldo a liberar</h3>
      <span class="saldo-valor">R$ 0,00</span>
    </div>

    <div class="saldo-box">
      <h3>Valor disponível</h3>
      <span class="saldo-valor">R$ 0,00</span>
    </div>

    <div class="saldo-box">
      <h3>Valor pendente</h3>
      <span class="saldo-valor">R$ 0,00</span>
    </div>

    <div class="saldo-box">
      <h3>Valor já transferido</h3>
      <span class="saldo-valor">R$ 0,00</span>
    </div>

    <div class="saldo-box">
      <h3>Valor retido</h3>
      <span class="saldo-valor">R$ 0,00</span>
    </div>

  </div>
</div>

<style>
.conta-digital {
  width: 50%;
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.saldos-grid {
  margin-top: 15px;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 18px;
}

.saldo-box {
  background: #fff;
  padding: 18px;
  border-radius: 12px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
  text-align: center;
}

.saldo-box h3 {
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 8px;
}

.saldo-valor {
  font-size: 22px;
  font-weight: 700;
  color: #007bff;
}

@media (max-width: 768px) {
  .conta-digital {
    width: 100%;
  }
  .saldos-grid {
    grid-template-columns: 1fr;
  }
}
</style>

</div> <!-- fim da div .repasses -->





<!-- ============================ -->
<!--   CADASTRO DE NOVA CONTA    -->
<!-- ============================ -->

<div class="cadastro-info">

    <!-- COLUNA 1 — FORMULÁRIO -->
    <div class="cadastrar-conta">

        <h2>Cadastrar nova conta</h2>
        <h3 class="titulo-azul">Passo 1 • Dados bancários</h3>

        <div class="dados-bancarios">

            <!-- Banco -->
            <div class="campo">
                <label>Banco</label>
                <select>
                    <option selected disabled>Selecione o banco</option>
                    <option>Banco do Brasil</option>
                    <option>Caixa Econômica</option>
                    <option>Itaú</option>
                    <option>Bradesco</option>
                    <option>Santander</option>
                    <option>Banco Inter</option>
                    <option>Nubank</option>
                    <option>C6 Bank</option>
                    <option>PicPay</option>
                    <option>PagBank</option>
                </select>
            </div>

            <!-- Tipo de conta -->
            <div class="campo">
                <label>Tipo de conta</label>
                <select>
                    <option selected disabled>Selecione o tipo</option>
                    <option>Conta Corrente</option>
                    <option>Poupança</option>
                    <option>Conta Pagamento</option>
                </select>
            </div>

            <!-- Agência -->
            <div class="campo">
                <label>Agência</label>
                <input type="text" placeholder="0000">
            </div>

            <!-- Agência sem dígito -->
            <div class="campo check">
                <input type="checkbox" id="ag-sem-digito">
                <label for="ag-sem-digito">Agência sem dígito</label>
            </div>

            <!-- Conta + dígito -->
            <div class="campo">
                <label>Conta e dígito</label>
                <input type="text" placeholder="000000-0">
            </div>

            <!-- Botão -->
            <button class="btn-proximo">Próximo</button>

        </div>
    </div>

<style>
/* CONTAINER GERAL */
.cadastro-info {
    width: 100%;
    display: flex;
    gap: 25px;
    margin-top: 30px;
}

/* COLUNA FORMULÁRIO */
.cadastrar-conta {
    width: 55%;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

/* TÍTULOS */
.cadastrar-conta h2 {
    font-size: 20px;
    font-weight: 700;
    color: #333;
}

.titulo-azul {
    margin-top: 10px;
    font-size: 18px;
    font-weight: 700;
    color: #007bff;
}

/* CAMPOS */
.dados-bancarios {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.campo {
    display: flex;
    flex-direction: column;
}

.campo label {
    font-size: 14px;
    font-weight: 600;
    color: #444;
    margin-bottom: 5px;
}

.campo input,
.campo select {
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 15px;
}

/* Input checkbox */
.campo.check {
    flex-direction: row;
    align-items: center;
    gap: 8px;
}

.campo.check label {
    margin: 0;
    font-weight: 500;
}

/* BOTÃO */
.btn-proximo {
    margin-top: 10px;
    background: #007bff;
    color: #fff;
    padding: 12px 22px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    width: 100%;
    transition: 0.2s ease;
}

.btn-proximo:hover {
    background: #005fcc;
}

/* COLUNA INFO */
.solicitar-acerto {
    width: 45%;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    min-height: 150px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

/* RESPONSIVO */
@media (max-width: 768px) {
    .cadastro-info {
        flex-direction: column;
    }

    .cadastrar-conta,
    .info {
        width: 100%;
    }
}
</style>

    <!-- COLUNA 2 — INFORMAÇÕES -->
    
       <!-- ====================================================== -->
<!-- ================== SOLICITAR ACERTO ================== -->
<!-- ====================================================== -->

<div class="solicitar-acerto">

  <h2>Como solicitar seu acerto</h2>

  <p class="acerto-info">
    Em caso de repasse antecipado da data de realização do evento, a Central dos Eventos disponibilizará 
    <strong>70% do valor de vendas à receber</strong>, os 30% restantes estarão disponíveis após o fechamento 
    do evento e acerto sobre a prestação de serviços. 
    <a href="">Saiba mais.</a>
  </p>

  <button class="btn-acerto">Solicitar repasse</button>

</div>

<style>
.solicitar-acerto {
  width: 100%;
  padding: 25px;
  margin-top: 30px;
  text-align: center;
}

.solicitar-acerto h2 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 15px;
}

.acerto-info {
  text-align: left;
  font-size: 15px;
  line-height: 1.6;
  margin-bottom: 25px;
}

.btn-acerto {
  background: #007bff;
  color: #fff;
  padding: 12px 22px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
}

.acerto-info strong {
  color: #007bff;
}
.acerto-info a {
  text-decoration: none;
  color: #007bff;
}
.btn-acerto:hover {
  background: #005fcc;
}
@media (max-width: 768px) {

  .solicitar-acerto {
    width: 100%;
    padding: 20px;
    margin-top: 20px;
  }

  .solicitar-acerto h2 {
    font-size: 20px;
    text-align: center;
    line-height: 1.3;
  }

  .solicitar-acerto p {
    font-size: 14px;
    text-align: justify;
  }

  .solicitar-acerto button {
    width: 100%;
    padding: 14px;
    font-size: 15px;
  }
}

</style>

</div>
</div> <!-- fim da div .controle-principal -->

</body>
</html>
