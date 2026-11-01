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

<div class="gerenciar-ingressos">

    <h3>Gerenciar ingressos</h3>

    <div class="gerenciar-card">

        <!-- LINHA PRINCIPAL -->
        <div class="linha-gerenciar">

            <!-- ESQUERDA -->
            <div class="info-esquerda">
                <strong >Ingresso</strong>
                <span>1°</span>
            </div>

            <!-- CENTRO -->
            <div class="info-centro">
                <strong>Tipo</strong>
                <span class="tipo">Cortesia</span>
            </div>

            <!-- DIREITA -->
            <div class="info-direita">
                <button class="btn-proximo" id="btnDefinirProximo">
                    Definir próximo ingresso
                </button>
            </div>


        </div>

        <!-- OCULTAR AUTOMATICAMENTE -->
        <div class="linha-ocultar">

            <div class="slide-toggle" id="slideOcultar">
                <div class="slide-bola"></div>
            </div>

            <span class="texto-ocultar">
                Ocultar ingresso automaticamente
            </span>

        </div>

    </div>

</div>

<style>
/* ===============================
   GERENCIAR INGRESSOS
================================ */

.gerenciar-ingressos {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    margin-top: 25px;
    width: 100%;
}

/* TÍTULO */
.gerenciar-ingressos h3 {
    font-size: 18px;
    color: #333;
    margin-bottom: 15px;
}

/* CARD PRINCIPAL */
.gerenciar-card {
    background: #f7f7f7;
    border-radius: 10px;
    padding: 15px;
}

/* LINHA SUPERIOR */
.linha-gerenciar {
    display: grid;
    grid-template-columns: 1fr 1.5fr 2fr;
    align-items: center;
    gap: 20px;
}

/* COLUNAS */
.info-esquerda,
.info-centro {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.info-esquerda strong,
.info-centro strong {
    font-size: 14px;
    color: #333;
}

.estilo{
    padding: 10px;
    border: 1px solid #007bff;
    background: #fff;
}

.info-esquerda span,
.info-centro span {
    font-size: 13px;
    color: #666;
}

/* BOTÃO DEFINIR PRÓXIMO */
.info-direita {
    display: flex;
    justify-content: flex-end;
}

.btn-proximo {
    padding: 10px 16px;
    background: #007bff;
    color: #ffffff;
    font-size: 14px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.3s;
    white-space: nowrap;
}

.btn-proximo:hover {
    background: #0056b3;
}

/* ===============================
   BOTÃO SLIDE (REAL)
================================ */

.linha-ocultar {
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

/* CONTAINER DO SLIDE */
.slide-toggle {
    width: 46px;
    height: 22px;
    background: #cfcfcf;
    border-radius: 30px;
    cursor: pointer;
    position: relative;
    transition: background 0.3s ease;
}

/* BOLINHA */
.slide-bola {
    width: 18px;
    height: 18px;
    background: #ffffff;
    border-radius: 50%;
    position: absolute;
    top: 2px;
    left: 2px;
    transition: transform 0.3s ease;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

/* ATIVO */
.slide-toggle.ativo {
    background: #007bff;
}

.slide-toggle.ativo .slide-bola {
    transform: translateX(24px);
}

/* TEXTO AO LADO */
.texto-ocultar {
    font-size: 14px;
    color: #555;
    user-select: none;
}
@media (max-width: 768px) {

    /* CONTAINER */
    .gerenciar-ingressos {
        padding: 15px;
    }

    /* CARD */
    .gerenciar-card {
        padding: 15px;
    }

    /* LINHA PRINCIPAL */
    .linha-gerenciar {
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    /* AJUSTE DAS COLUNAS */
    .info-esquerda,
    .info-centro,
    .info-direita {
        width: 100%;
    }

    .info-esquerda strong,
    .info-centro strong {
        font-size: 15px;
    }

    /* BOTÃO */
    .info-direita {
        justify-content: flex-start;
    }

    .btn-proximo {
        width: 100%;
        text-align: center;
    }

    /* SLIDE + TEXTO */
    .linha-ocultar {
        flex-direction: row;
        gap: 10px;
        margin-top: 15px;
    }

    .texto-ocultar {
        font-size: 13px;
        line-height: 1.4;
    }

}


</style>

<script>
const slideOcultar = document.getElementById("slideOcultar");

slideOcultar.addEventListener("click", () => {
    slideOcultar.classList.toggle("ativo");

    if (slideOcultar.classList.contains("ativo")) {
        console.log("Ocultar ingresso ATIVADO");
    } else {
        console.log("Ocultar ingresso DESATIVADO");
    }
});
</script>


<!-- POPUP DEFINIR PRÓXIMO INGRESSO -->
<div id="popupProximoIngresso" class="popup-overlay">

    <div class="popup-conteudo popup-proximo">

        <!-- FECHAR -->
        <button class="popup-fechar" id="fecharPopupProximo">&times;</button>

        <!-- TÍTULO -->
        <h3>Selecionar próximo ingresso</h3>

        <!-- TEXTO -->
        <label class="label-popup">
            Selecione o ingresso que deseja definir como próximo a ser vendido:
        </label>

        <!-- INPUT PADRÃO DO SISTEMA -->
        <div class="campo">

            <label>Tipos de ingressos</label>

            <div class="input-list" data-list="ingressos" id="inputProximoIngresso">

                <!-- INPUT PRINCIPAL -->
                <input type="text" placeholder="Buscar ingresso" readonly>

                <!-- LISTA -->
                <div class="lista-opcoes">

                    <!-- BARRA DE PESQUISA -->
                    <div class="barra-pesquisa">
                        <i class="bi bi-search"></i>
                        <input type="text" class="pesquisar" placeholder="Pesquisar...">
                    </div>

                    <!-- OPÇÕES -->
                    <label class="item-check">
                        <input type="checkbox" value="Cortesia"> Cortesia
                    </label>

                    <label class="item-check">
                        <input type="checkbox" value="Padrão"> Padrão
                    </label>

                    <label class="item-check">
                        <input type="checkbox" value="VIP"> VIP
                    </label>

                </div>
            </div>

        </div>

        <!-- BOTÕES -->
        <div class="acoes-popup">
            <button class="btn-cancelar" id="cancelarProximo">Cancelar</button>
            <button class="btn-salvar" id="salvarProximo">Salvar</button>
        </div>

    </div>

</div>


<style>
/* ===============================
   POPUP DEFINIR PRÓXIMO INGRESSO
================================ */

/* ===============================
   POPUP DEFINIR PRÓXIMO INGRESSO
   (estilos completos e input-list)
================================ */

/* Overlay */
.popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.5);
    display: none;               /* controlado por JS */
    align-items: center;
    justify-content: center;
    z-index: 10000;
}

/* Conteúdo do popup */
.popup-conteudo {
    background: #fff;
    width: 95%;
    max-width: 520px;
    border-radius: 12px;
    padding: 22px;
    position: relative;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

/* Específico para este popup */
.popup-proximo h3 {
    font-size: 18px;
    margin-bottom: 8px;
    color: #222;
}

.label-popup {
    font-size: 14px;
    color: #555;
    display: block;
    margin-bottom: 14px;
}

/* Botão fechar (X) */
.popup-fechar {
    position: absolute;
    top: 12px;
    right: 14px;
    font-size: 24px;
    background: none;
    border: none;
    cursor: pointer;
    color: #999;
    line-height: 1;
    padding: 4px;
    border-radius: 6px;
}
.popup-fechar:hover { color: #333; background: rgba(0,0,0,0.04); }

/* Área do campo (mantendo seu padrão .campo) */
.popup-proximo .campo {
    margin-bottom: 18px;
}

/* ===============================
   INPUT-LIST (comportamento dropdown)
   mantém nomes: .input-list .lista-opcoes
================================ */

/* container do input-list (deve ser position: relative) */
.input-list {
    position: relative;
    display: inline-block;
    width: 100%;
}

/* input principal (readonly) */
.input-list > input[readonly] {
    width: 100%;
    padding: 10px 12px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
    background: #fff;
    cursor: pointer;
    box-sizing: border-box;
}

/* lista de opções (dropdown) */
.input-list .lista-opcoes {
    display: none; /* aberto via JS */
    position: absolute;
    top: calc(100% + 8px);
    left: 0;
    width: 100%;
    max-height: 220px;
    overflow-y: auto;
    background: #fff;
    border-radius: 8px;
    padding: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.12);
    border: 1px solid rgba(0,0,0,0.06);
    z-index: 10100;
    box-sizing: border-box;
}

/* barra de pesquisa dentro do dropdown */
.input-list .lista-opcoes .barra-pesquisa {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px;
    border-radius: 6px;
    border: 1px solid #eee;
    background: #fafafa;
    margin-bottom: 10px;
}

/* ícone de pesquisa (bootstrap icon) */
.input-list .lista-opcoes .barra-pesquisa .bi-search {
    font-size: 16px;
    color: #666;
}

/* campo de pesquisa */
.input-list .lista-opcoes .barra-pesquisa .pesquisar {
    border: none;
    outline: none;
    background: transparent;
    width: 100%;
    font-size: 14px;
    padding: 2px 4px;
}

/* itens: cada opção com checkbox */
.input-list .lista-opcoes .item-check {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 6px;
    cursor: pointer;
    border-radius: 6px;
    user-select: none;
    color: #222;
    font-size: 14px;
}

/* hover do item */
.input-list .lista-opcoes .item-check:hover {
    background: #f4f7fb;
}

/* checkbox padrão (visível à esquerda) */
.input-list .lista-opcoes .item-check input[type="checkbox"] {
    width: 16px;
    height: 16px;
    margin: 0;
    accent-color: #007bff; /* modernos navegadores - cor do check */
    cursor: pointer;
}

/* se quiser um visual custom do checkbox (opcional, mantém compatibilidade)
   - comente/descomente conforme preferir */

/* .input-list .lista-opcoes .item-check input[type="checkbox"] {
    -webkit-appearance: none;
    appearance: none;
    width: 16px;
    height: 16px;
    border: 1px solid #cfcfcf;
    border-radius: 3px;
    background: #fff;
    position: relative;
}
.input-list .lista-opcoes .item-check input[type="checkbox"]:checked {
    background: #007bff;
    border-color: #007bff;
}
.input-list .lista-opcoes .item-check input[type="checkbox"]:checked::after {
    content: "✓";
    position: absolute;
    left: 3px;
    top: 0px;
    font-size: 12px;
    color: #fff;
} */

/* ===============================
   AÇÕES DO POPUP
================================ */

.acoes-popup {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 6px;
}

.btn-cancelar {
    padding: 8px 16px;
    background: #f2f2f2;
    border: 1px solid #d8d8d8;
    border-radius: 6px;
    cursor: pointer;
    color: #333;
}

.btn-salvar {
    padding: 8px 16px;
    background: #007bff;
    border: none;
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
}
.btn-salvar:hover { background: #0056b3; }

/* ===============================
   EXTRAS: scrollbar leve para lista (opcional)
================================ */
.input-list .lista-opcoes::-webkit-scrollbar {
    width: 8px;
}
.input-list .lista-opcoes::-webkit-scrollbar-thumb {
    background: rgba(0,0,0,0.12);
    border-radius: 8px;
}

/* ===============================
   RESPONSIVO: ajustes até 768px
================================ */
@media (max-width: 768px) {
    .popup-conteudo {
        padding: 18px;
        max-width: 440px;
    }

    .input-list 
    .lista-opcoes {
        max-height: 200px;
    }

    .popup-proximo h3 { 
        font-size: 17px; 
    }

    .label-popup { 
        font-size: 13px;
    }

    .btn-cancelar, 
    .btn-salvar { 
        padding: 8px 12px; 
        font-size: 14px; 
    }
}


</style>

<script>
// ===============================
// ABRIR / FECHAR POPUP
// ===============================
const popupProximo = document.getElementById("popupProximoIngresso");
const btnAbrirProximo = document.getElementById("btnDefinirProximo");
const btnFecharProximo = document.getElementById("fecharPopupProximo");
const btnCancelarProximo = document.getElementById("cancelarProximo");

btnAbrirProximo.addEventListener("click", () => {
    popupProximo.style.display = "flex";
});

function fecharPopupProximo() {
    popupProximo.style.display = "none";
}

btnFecharProximo.addEventListener("click", fecharPopupProximo);
btnCancelarProximo.addEventListener("click", fecharPopupProximo);

// Fechar clicando fora
popupProximo.addEventListener("click", (e) => {
    if (e.target === popupProximo) fecharPopupProximo();
});


// ===============================
// INPUT-LIST (PADRÃO DO SISTEMA)
// ===============================
const inputList = document.getElementById("inputProximoIngresso");
const inputPrincipal = inputList.querySelector("input[readonly]");
const listaOpcoes = inputList.querySelector(".lista-opcoes");
const pesquisar = inputList.querySelector(".pesquisar");
const itens = inputList.querySelectorAll(".item-check");
const checks = inputList.querySelectorAll(".item-check input");

// Abrir lista
inputPrincipal.addEventListener("click", (e) => {
    e.stopPropagation();

    document.querySelectorAll(".input-list .lista-opcoes")
        .forEach(lista => lista.style.display = "none");

    listaOpcoes.style.display = "block";
});

// Fechar lista clicando fora
document.addEventListener("click", () => {
    listaOpcoes.style.display = "none";
});

// Selecionar apenas 1 ingresso
checks.forEach(check => {
    check.addEventListener("change", () => {

        checks.forEach(c => c.checked = false);
        check.checked = true;

        inputPrincipal.value = check.value;
        listaOpcoes.style.display = "none";
    });
});

// Pesquisa
pesquisar.addEventListener("keyup", () => {
    const termo = pesquisar.value.toLowerCase();

    itens.forEach(item => {
        item.style.display =
            item.textContent.toLowerCase().includes(termo)
                ? "flex"
                : "none";
    });
});

// ===============================
// SALVAR
// ===============================
document.getElementById("salvarProximo").addEventListener("click", () => {
    if (!inputPrincipal.value) {
        alert("Selecione um ingresso");
        return;
    }

    console.log("Próximo ingresso:", inputPrincipal.value);
    fecharPopupProximo();
});
</script>




</div>


</body>
</html>
