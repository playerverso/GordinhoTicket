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

            body{
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <?=$sidebar?>
            <div class="menu-config">
            <?=$menucomp?>
            <style>
            @media (max-width: 768px) {
            .menu-config{
                margin-top:50px;
                }
            }
            
        </style>
    </div>

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
    padding: 50px 15px;
    width: 100%;
  }

}
</style>

<!-- ============================
     RELATÓRIOS INTELIGENTES
=============================== -->
<div class="relatorio-inteligente">

  <h2 class="titulo-relatorios">Relatórios Inteligentes</h2>

  <div class="relatorios">

    <!-- RETÂNGULO 1 -->
    <div id="relatorio-info-participante" class="retangulo-relatorio">
    <h3>Informações adicionais do participante</h3>
    <p>
        O relatório consiste em exportar as informações adicionais dos participantes
        em cada venda aprovada do evento.
    </p>
    </div>

    <!-- RETÂNGULO 2 -->
    <div class="retangulo-relatorio">
      <h3>Relatório de vendas por Ponto de vendas</h3>
      <p>
        Exportação de planilha com informações detalhadas de quantidade vendida
        por tipo de pagamento de cada Ponto de vendas.
      </p>
    </div>

    <!-- RETÂNGULO 3 -->
    <div class="retangulo-relatorio">
      <h3>Relatório de abandono de carrinho</h3>
      <p>
        Este relatório retorna os dados de possíveis compradores
        que abandonaram o carrinho.
      </p>
    </div>

  </div>
</div>

<style>
/* CONTAINER GERAL */
.relatorio-inteligente {
  width: 100%;
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  gap: 25px;
}

/* TÍTULO */
.titulo-relatorios {
  font-size: 22px;
  font-weight: 700;
  color: #333;
}

/* GRID DOS RETÂNGULOS */
.relatorios {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
}

/* RETÂNGULOS */
.retangulo-relatorio {
  background: #fff;
  padding: 25px;
  border-radius: 12px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
  display: flex;
  flex-direction: column;
  gap: 12px;
  transition: 0.2s ease;
}

/* HOVER */
.retangulo-relatorio:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 16px rgba(0,0,0,0.12);
}

/* TÍTULO DO RETÂNGULO */
.retangulo-relatorio h3 {
  font-size: 17px;
  font-weight: 700;
  color: #007bff;
}

/* TEXTO */
.retangulo-relatorio p {
  font-size: 15px;
  color: #444;
  line-height: 1.6;
}

/* RESPONSIVO */
@media (max-width: 900px) {
  .relatorios {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 600px) {
  .relatorios {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- ===========================
         POPUP RELATÓRIO
=========================== -->
<div id="popupInfo" class="popup-info">
  <div class="popup-content">
    <span class="fechar-popup" id="fecharPopup">&times;</span>

    <h3>Informações adicionais do participante</h3>

    <!-- Steps -->
    <div class="steps">
      <div class="step ativo">
        <span class="numero">1</span>
        <span class="texto">Formato</span>
      </div>

      <div class="linha"></div>

      <div class="step">
        <span class="numero">2</span>
        <span class="texto">Finalizar</span>
      </div>
    </div>

    <!-- Conteúdo Interno -->
    <div id="infoConteudo" class="conteudo-info">
      <p class="sem-info">Nenhuma informação adicional disponível neste evento</p>
    </div>

  </div>
</div>


</div>
<style>
  .popup-info {
  position: fixed;
  padding: 15px;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.25);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.popup-info .popup-content {
  width: 650px;
  background: #fff;
  padding: 25px 30px;
  border-radius: 6px;
  position: relative;
}

.popup-info h3 {
  margin-bottom: 25px;
  font-size: 18px;
  color: #333;
}

.fechar-popup {
  position: absolute;
  top: 15px;
  right: 18px;
  font-size: 22px;
  cursor: pointer;
  color: #555;
}

/* ======== STEPS ======== */
.steps {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 25px;
}

.step {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #999;
  font-weight: 500;
}

.step .numero {
  width: 28px;
  height: 28px;
  border-radius: 50%;
  background: #c7c7c7;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 14px;
}

.step.ativo .numero {
  background: #007bff;
}

.step.ativo .texto {
  color: #007bff;
}

.linha {
  flex: 1;
  height: 1px;
  background: #ccc;
}

/* ======== TEXTO DO CONTEÚDO ======== */
.sem-info {
  margin-top: 15px;
  text-align: center;
  color: #777;
  font-size: 15px;
}


</style>

<script>
// ======== ABRIR POPUP AO CLICAR NO RETÂNGULO ========
const boxInfoParticipante = document.getElementById("relatorio-info-participante");

if (boxInfoParticipante) {
    boxInfoParticipante.addEventListener("click", abrirPopupInfo);
}

// ======== FECHAR POPUP ========
document.getElementById("fecharPopup").addEventListener("click", fecharPopupInfo);

// ======== FUNÇÃO: ABRIR ========
function abrirPopupInfo() {
    document.getElementById("popupInfo").style.display = "flex";
    carregarInformacoesAdicionais();
}

// ======== FUNÇÃO: FECHAR ========
function fecharPopupInfo() {
    document.getElementById("popupInfo").style.display = "none";
}



// =========================================================
//        LÓGICA DAS INFORMAÇÕES ADICIONAIS
// =========================================================

// Aqui você controla se existe informação real (AJUSTE DINAMICO)
let temInformacoes = false; 
// Coloque TRUE quando o PHP retornar dados reais



function carregarInformacoesAdicionais() {
    const semInfoTexto = document.querySelector(".sem-info");
    const conteudoInfo = document.getElementById("infoConteudo");

    // Reseta o conteúdo antes de exibir
    conteudoInfo.innerHTML = "";
    conteudoInfo.appendChild(semInfoTexto);

    if (temInformacoes) {
        // Se houver informações → remove o texto de "nenhuma informação..."
        semInfoTexto.style.display = "none";

        // Conteúdo real (exemplo)
        conteudoInfo.innerHTML += `
            <div class="info-item">
                <p><strong>Pergunta:</strong> Camiseta tamanho?</p>
                <p><strong>Resposta:</strong> M</p>
            </div>
        `;
    } else {
        // Se não houver → exibe texto padrão
        semInfoTexto.style.display = "block";
    }
}



// =========================================================
//          AVANÇAR PARA O STEP 2 (opcional)
// =========================================================

function irParaStep2() {
    const step1 = document.querySelector(".step.ativo");
    const step2 = document.querySelectorAll(".step")[1];

    step1.classList.remove("ativo");
    step2.classList.add("ativo");

    // Coloque aqui conteúdos da etapa 2
}

</script>


</div>


</body>
</html>
