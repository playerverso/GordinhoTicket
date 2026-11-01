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
    padding: 50px 0px;
    width: 100%;
  }


}

</style>


<div class="conteudoAba">
    <div class="padrao">   
        <div class="titulo-plus">
    <h1>Descontos</h1>
    <style>

.titulo-plus {
    width: 100%;
    padding: 20px 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    border-bottom: 2px solid #e5e5e5;
}

.titulo-plus h1 {
    font-size: 26px;
    font-weight: 700;
    color: #333;
    margin: 0;
}



@media (max-width: 768px) {

    .titulo-plus {
        padding: 16px 0;
        margin-bottom: 16px;
    }

    .titulo-plus h1 {
        font-size: 22px;
        margin: 0 15px ;
    }
}

    </style>
</div>

<style>

/* ============================
   PADRÃO
============================ */
.padrao {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

@media (max-width: 768px) {

    /* PADRÃO */
    .padrao {
        gap: 16px;
    }


}

</style>

<div class="btn-inpotação">
    <button id="btnImportacaoMassa" class="btn-opcao">Importação em massa</button>
    <button id="btnImportacaoEvento" class="btn-opcao">Importação por evento</button>
    <a href="novo-desconto.php"><button id="btnNovoDesconto" class="btn-opcao btn-desconto">Novo desconto</button></a>
</div>
<style>
    /* ============================
   BOTÕES DE IMPORTAÇÃO
============================ */
.btn-inpotação {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.btn-inpotação .btn-opcao {
    padding: 10px 18px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.2s;
    white-space: nowrap;
}

.btn-inpotação .btn-opcao:hover {
    background: #005fcc;
}

.btn-inpotação .btn-desconto {
    background: #27ae60;
}

.btn-inpotação .btn-desconto:hover {
    background: #1f8d4f;
}


/* ============================
        RESPONSIVO 768px
============================ */
@media (max-width: 768px) {

    .btn-inpotação {
        flex-wrap: wrap;
        gap: 8px;
    }

    .btn-inpotação .btn-opcao {
        padding: 8px 14px;
        font-size: 13px;
    }
}

</style>



<!-- ============================
      POPUP IMPORTAÇÃO EM MASSA
============================= -->
<div id="popupImportacaoMassa" class="popup-overlay">

    <div class="popup-box">

        <!-- Título -->
        <h2>Importar descontos em massa</h2>

        <!-- Input de arquivo -->
        <label class="label-input">Selecionar arquivo XLSX</label>
        <div class="upload-area">
            <input type="file" id="arquivoXLSX" accept=".xlsx">
            <button class="btn-add-arquivo">Adicionar</button>
        </div>

        <!-- Informativo -->
        <p class="info-text">
            O formato do arquivo deve ser XLSX, você pode baixar um exemplo clicando <a href="#">aqui</a>.
        </p>

        <!-- Campo Grupo -->
        <label class="label-input">Nome do grupo</label>
        <input type="text" class="campo-texto" placeholder="Digite o nome do grupo">

        <!-- Datas -->
        <div class="datas-container">
            <div class="campo-data">
                <label class="label-input">Data de início</label>
                <input type="date">
            </div>

            <div class="campo-data">
                <label class="label-input">Data de término</label>
                <input type="date">
            </div>
        </div>

        <!-- Botões -->
        <div class="popup-botoes">
            <button class="btn-cancelar">Cancelar</button>
            <button class="btn-confirmar">Importar</button>
        </div>

    </div>

</div>





<style>
    /* ============================
   BOTÕES DE IMPORTAÇÃO
============================ */
.btn-inpotação {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.btn-inpotação .btn-opcao {
    padding: 10px 18px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.2s;
    white-space: nowrap;
}

.btn-inpotação .btn-opcao:hover {
    background: #005fcc;
}

.btn-inpotação .btn-desconto {
    background: #27ae60;
}

.btn-inpotação .btn-desconto:hover {
    background: #1f8d4f;
}


/* ============================
          POPUP BASE
============================ */
.popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.55);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 999;
}

.popup-box {
    width: 520px;
    background: #fff;
    padding: 28px;
    border-radius: 14px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.15);
}

.popup-box h2 {
    margin-top: 0;
    margin-bottom: 18px;
    font-size: 22px;
    color: #333;
}

.label-input {
    font-size: 14px;
    font-weight: 600;
    display: block;
    margin: 10px 0 6px;
    color: #444;
}

.upload-area {
    display: flex;
    gap: 10px;
    align-items: center;
}

.upload-area input[type="file"] {
    flex: 1;
}

.btn-add-arquivo {
    padding: 8px 14px;
    background: #007bff;
    border: none;
    color: #fff;
    border-radius: 8px;
    cursor: pointer;
}

.info-text {
    margin-top: 8px;
    font-size: 13px;
    color: #555;
}

.info-text a {
    color: #007bff;
    text-decoration: underline;
}

.campo-texto {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
}

.datas-container {
    margin-top: 16px;
    display: flex;
    gap: 12px;
}

.campo-data {
    flex: 1;
}

.campo-data input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
}

.popup-botoes {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    margin-top: 24px;
}

.btn-cancelar {
    padding: 10px 16px;
    background: #aaa;
    color: #fff;
    border-radius: 8px;
    border: none;
}

.btn-confirmar {
    padding: 10px 16px;
    background: #2ecc71;
    color: #fff;
    border-radius: 8px;
    border: none;
}

/* ============================
        RESPONSIVO 768px
============================ */
@media (max-width: 768px) {

    .btn-inpotação {
        flex-wrap: wrap;
        gap: 8px;
    }

    .btn-inpotação .btn-opcao {
        padding: 8px 14px;
        font-size: 13px;
    }

    .popup-box {
        width: 90%;
        padding: 20px;
    }

    .datas-container {
        flex-direction: column;
    }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', () => {

  // Funções genéricas
  const abrirPopup = (overlay) => {
    if (!overlay) return;
    overlay.style.display = 'flex';
    document.body.style.overflow = 'hidden';
  };

  const fecharPopup = (overlay) => {
    if (!overlay) return;
    overlay.style.display = 'none';
    document.body.style.overflow = '';
  };

  // POPUP: Importação por evento
  const btnImportacaoEvento = document.getElementById('btnImportacaoEvento');
  const popupImportacaoEvento = document.getElementById('popupImportacaoEvento');

  if (btnImportacaoEvento && popupImportacaoEvento) {
    // abrir
    btnImportacaoEvento.addEventListener('click', (e) => {
      e.preventDefault();
      abrirPopup(popupImportacaoEvento);
    });

    // fechar via botão com classe .popup-close (se existir)
    const closeBtn = popupImportacaoEvento.querySelector('.popup-close');
    if (closeBtn) {
      closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        fecharPopup(popupImportacaoEvento);
      });
    }

    // fechar clicando no overlay (fora da caixa interna)
    popupImportacaoEvento.addEventListener('click', (e) => {
      if (e.target === popupImportacaoEvento) fecharPopup(popupImportacaoEvento);
    });

    // opcional: fechar com Esc
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && popupImportacaoEvento.style.display === 'flex') {
        fecharPopup(popupImportacaoEvento);
      }
    });
  }

  // POPUP: Importação em massa (se já existir)
  const btnImportacaoMassa = document.getElementById('btnImportacaoMassa');
  const popupImportacaoMassa = document.getElementById('popupImportacaoMassa');

  if (btnImportacaoMassa && popupImportacaoMassa) {
    btnImportacaoMassa.addEventListener('click', (e) => {
      e.preventDefault();
      abrirPopup(popupImportacaoMassa);
    });

    const closeBtnM = popupImportacaoMassa.querySelector('.btn-cancelar') || popupImportacaoMassa.querySelector('.popup-close');
    if (closeBtnM) closeBtnM.addEventListener('click', () => fecharPopup(popupImportacaoMassa));

    popupImportacaoMassa.addEventListener('click', (e) => {
      if (e.target === popupImportacaoMassa) fecharPopup(popupImportacaoMassa);
    });

    // Esc também para esse popup
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && popupImportacaoMassa.style.display === 'flex') {
        fecharPopup(popupImportacaoMassa);
      }
    });
  }

});
</script>

<!-- POPUP — IMPORTAÇÃO POR EVENTO -->
<div id="popupImportacaoEvento" class="popup-overlay">
    <div class="popup">
        <h2>Importar descontos por evento</h2>

        <!-- Categoria de eventos -->
        <label class="popup-label">Selecione o evento</label>
        <select class="popup-input">
            <option value="">Selecione...</option>
            <option>Evento 1</option>
            <option>Evento 2</option>
            <option>Evento 3</option>
            <option>Evento 4</option>
            <option>Evento 5</option>
            <option>Evento 6</option>
            <option>Evento 7</option>
            <option>Evento 8</option>
            <option>Evento 9</option>
            <option>Evento 10</option>
        </select>

        <!-- Botão Importar -->
        <button class="popup-btn-importar">Importar</button>

        <!-- Fechar -->
        <button class="popup-close">Fechar</button>
    </div>
</div>

<script>
    // === IMPORTAÇÃO POR EVENTO ===
const btnImportacaoEvento = document.getElementById("btnImportacaoEvento");
const popupImportacaoEvento = document.getElementById("popupImportacaoEvento");

// abrir popup
btnImportacaoEvento.addEventListener("click", () => {
    popupImportacaoEvento.style.display = "flex";
});

// fechar popup
popupImportacaoEvento.querySelector(".popup-close").addEventListener("click", () => {
    popupImportacaoEvento.style.display = "none";
});

</script>


<style>
    /* -----------------------------
      POPUP OVERLAY
------------------------------ */
.popup-overlay {
    display: none;           
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* -----------------------------
        CAIXA DO POPUP
------------------------------ */
.popup {
    background: #fff;
    padding: 24px;
    width: 380px;
    max-width: 90%;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
    display: flex;
    flex-direction: column;
    gap: 14px;
    animation: fadePopup 0.2s ease-out;
}

@keyframes fadePopup {
    from {
        transform: scale(0.95);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* -----------------------------
          TÍTULO
------------------------------ */
.popup h2 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
}

/* -----------------------------
       LABEL DOS CAMPOS
------------------------------ */
.popup-label {
    font-size: 14px;
    font-weight: 500;
    color: #444;
}

/* -----------------------------
      INPUT/SELECT PADRÃO
------------------------------ */
.popup-input {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    color: #333;
    outline: none;
    background: #fff;
    appearance: none;
}

.popup-input:focus {
    border-color: #007bff;
}

/* -----------------------------
      BOTÃO IMPORTAR
------------------------------ */
.popup-btn-importar {
    margin-top: 10px;
    background: #007bff;
    padding: 10px 18px;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
    font-size: 14px;
}

.popup-btn-importar:hover {
    background: #005fcc;
}

/* -----------------------------
      BOTÃO FECHAR
------------------------------ */
.popup-close {
    background: #ccc;
    padding: 9px 14px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
    font-size: 14px;
}

.popup-close:hover {
    background: #b1b1b1;
}

</style>

            <!-- Tabela -->
            <div class="status-ingressos">

                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">Codigo</label></div>
                    <div class="lote"><label class="titulo-campo">Ingresso</label></div>
                    <div class="preco"><label class="titulo-campo">Tipo</label></div>
                    <div class="tipo"><label class="titulo-campo">Valor</label></div>
                    <div class="repassar"><label class="titulo-campo">Maximo</label></div>
                    <div class="visivel"><label class="titulo-campo">Ativo</label></div>
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    <div class="nome"><span class="valor">40028922</span></div>
                    <div class="lote"><span class="valor">1°</span></div>
                    <div class="tipo"><span class="valor tipo-cortesia">Cortesia</span></div>
                    <div class="preco"><span class="valor">R$ 120,00</span></div>
                    

                    <div class="repassar">
                        <span class="valor">maximo</i></span>
                    </div>

                    <div class="visivel">
                        <span class="valor"><i class="bi bi-check-circle-fill icon-aprovar"></i></span>
                    </div>

                    
                       
                    </div>
                </div>

            </div>

            
        </div>

</div>


<style>
    .status-ingressos {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

/* TITULOS */
.linha-titulos {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr;
    gap: 12px;
    padding: 16px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
}

.titulo-campo {
    font-size: 13px;
    color: #666;
    margin-bottom: 3px;
}

.valor {
    font-size: 15px;
    color: #333;
}

.tipo-cortesia {
    width: 80px;
    padding: 4px 8px;
    background: #eafaf0;
    border: 1px solid #27ae60;
    border-radius: 6px;
    color: #27ae60;
}

.icon-reprovar { 
    color: #e63946; 
    font-size: 20px; 
}

.icon-aprovar { 
    color: #2ecc71; 
    font-size: 20px; 
}

.btn-acoes {
    padding: 8px 12px;
    border: none;
    background: #007bff;
    color: #fff;
    border-radius: 8px;
    cursor: pointer;
}




@media (max-width: 768px) {

    /* Botões de filtro mais compactos */
    .filtros-ingressos {
        gap: 6px;
        flex-wrap: wrap;
    }

    .btnFiltro {
        padding: 6px 10px;
        font-size: 13px;
    }

    /* Ajuste das colunas */
    .linha-titulos,
    .item-ingresso {
        grid-template-columns: 
            1fr   /* Nome */
            0.6fr /* Lote */
            0.7fr /* Preço */
            0.7fr /* Tipo */
            0.7fr /* Repassar */
            0.6fr /* Visível */
            0.8fr /* Ações */
        ;
        padding: 12px;
        gap: 8px;
    }

    /* Fontes menores */
    .titulo-campo {
        font-size: 12px;
    }

    .valor {
        font-size: 14px;
    }

    .tipo-cortesia {
        font-size: 12px;
        width: auto;
        padding: 3px 6px;
    }

    /* Ícones menores */
    .icon-aprovar,
    .icon-reprovar {
        font-size: 18px;
    }

    /* Botão ações reduzido */
    .btn-acoes {
        padding: 6px 10px;
        font-size: 13px;
    }
}
</style>






</div>

</div>


</div>

</body>
</html>