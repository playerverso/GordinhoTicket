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
    <title>Gordinho-Eventos</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    @font-face {
        font-family: 'font';
        src: url('Mansalva-Regular.ttf') format('truetype');
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Sidebar fixa (supondo...) */
    /* Ajuste este valor caso sua sidebar tenha outra largura */
    .sidebar {
        width: 350px;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
    }

    /* Área principal */
    .controle-principal {
        margin-left: 350px; /* mesma largura da sidebar */
        padding: 50px 30px;
        width: calc(100% - 350px);
        min-height: 100vh;
    }

    @media (max-width: 768px) {  
        .controle-principal {
            margin-left: 0;
            width: 100%;
            padding: 40px 20px;
        }

        .menu-config {
            margin-top: 50px;
        }
    }
</style>

</head>
<body>

    <?=$sidebar?>

    <div class="menu-config">
        <?=$menucomp?>
    </div>

    <div class="controle-principal">

        <!-- AQUI DENTRO VAI O SEU CONTEÚDO -->
<div class="criar-combo">
    <h2>Novo combo de ingresso</h2>

        <div class="combo-ingresso">

                <!-- Inputs nome -->
                <label>Nome do Combo</label>
                <input type="text" id="nomeCombo" placeholder="Digite o nome do combo">

                <!-- Informativo -->
                <p class="info">Selecione os ingressos desejados para este combo</p>

                <!-- Input list -->
                <label>Ingresso:</label>
                <input list="listaIngressos" id="inputIngresso" placeholder="Selecione um ingresso">

                <!-- Cabeçalho da tabela -->
                <div class="status-combo">
                    <div class="campo-col">Nome</div>
                    <div class="campo-col">Valor original</div>
                    <div class="campo-col">Valor no combo</div>
                    <div class="campo-col"></div>
                </div>

                <!-- Ingressos ajustados -->
                <div class="ajuste-ingresso" id="listaAjustes"></div>

            </div>
        

        <datalist id="listaIngressos">
            <option value="INGRESSO PRE-VENDA MEIA - R$ 100">
            <option value="PRE-VENDA CAMAROTE - R$ 100">
            <option value="INGRESSO CAMAROTE - R$ 150">
            <option value="INGRESSO PRE-VENDA OPEN-BAR - R$ 250">   
            <option value="INGRESSO PROMOCIONAL - R$ 200">
            <option value="INGRESSO ARÉA VIP OPEN-BAR - R$ 350">
        </datalist>

        <!-- Área onde ingressos ajustados serão mostrados -->
            <div class="ajuste-ingresso" id="listaAjustes">
                <p id="msgNenhum" class="msg-nenhum">Nenhum ingresso foi adicionado</p>
                <button id="btnSalvarCombo" class="btn-salvar-combo">Salvar Combo</button>
            </div>
</div>
<style>


</style>

    </div>
</div>

<!-- POPUP -->
<div id="popupConfig" class="popup-overlay">
    <div class="popup-box">
        <h3>Configurar valor do ingresso</h3>

        <p class="popup-ingresso-nome"></p>
        <p class="popup-ingresso-valor"></p>

        <label>Novo preço no combo:</label>
        <input type="number" id="precoCombo" class="popup-input" placeholder="Digite o novo valor">

        <button id="btnAdicionar" class="popup-btn">Adicionar</button>
    </div>
</div>

<style>
.criar-combo {
    margin-top: 20px;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
    padding: 20px 25px;
}

.criar-combo h2 {
    margin-bottom: 15px;
    text-align: left;
}

.combo-ingresso {
    display: flex;
    flex-direction: column;
    gap: 12px;
    width: 100%;
}

.combo-ingresso input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

.info {
    margin: 5px 0 0 0;
    font-size: 14px;
    color: #555;
}

/* LISTA DE AJUSTES */
.ajuste-ingresso {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.item-ajuste {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 12px;
    background: #f6f6f6;
    border-radius: 8px;
    border: 1px solid #ddd;
}


/*status */
.status-combo {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 0.5fr;
    background: #f3f3f3;
    padding: 14px;
    border-radius: 10px;
    margin-top: 15px;
    font-weight: bold;
    text-align: left;
}

.campo-col {
    font-size: 14px;
    color: #444;
}


    /* Mensagem de nenhum item */
.msg-nenhum {
    text-align: center;
    padding: 15px 0;
    color: #777;
    font-size: 15px;
}

/* Botão salvar */
.btn-salvar-combo {
    display: none; /* só aparece quando houver itens */
    margin: 20px auto 0 auto;
    padding: 12px 20px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 17px;
    cursor: pointer;
    font-weight: 600;
    text-align: center;
}

.btn-salvar-combo:hover {
    background: #0664c9ff;
}

/* Cada item exibido */
.item-ingresso-ajustado {
    display: grid;
    grid-template-columns: 1.3fr 0.8fr 0.8fr 0.3fr;
    padding: 12px;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 10px;
    margin-top: 10px;
    align-items: center;
    font-size: 15px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}

.item-ingresso-ajustado i {
    cursor: pointer;
    color: #d9534f;
    font-size: 18px;
}

/* Itens exibidos */
.item-ingresso-ajustado {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 0.5fr;
    background: #ffffff;
    padding: 14px;
    border-radius: 10px;
    margin-top: 10px;
    align-items: center;
    box-shadow: 0px 3px 12px rgba(0,0,0,0.07);
}

.item-ingresso-ajustado span {
    font-size: 15px;
    color: #333;
}

/* Ícone de excluir */
.btn-remover {
    font-size: 20px;
    color: #d9534f;
    cursor: pointer;
    transition: .2s;
}

.btn-remover:hover {
    color: #b52b27;
}







/* POPUP */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.45);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 999;
}

.popup-box {
    background: #fff;
    width: 380px;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.25);
}

.popup-box h3 {
    margin-bottom: 15px;
    font-size: 20px;
    font-weight: 700;
}

.popup-input {
    width: 100%;
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-bottom: 15px;
}

.popup-btn {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: #fff;
    border: none;
    font-size: 16px;
    border-radius: 6px;
    cursor: pointer;
}

.popup-btn:hover {
    background: #0064cc;
}
@media (max-width: 768px) {

    /* Container principal */
    .criar-combo {
        margin-top: 10px;
        padding: 0 10px;
    }

    .criar-combo h2 {
        font-size: 20px;
        text-align: left;
    }

    /* Inputs */
    .combo-ingresso {
        gap: 10px;
    }

    .combo-ingresso input {
        font-size: 14px;
        padding: 9px;
    }

    .info {
        font-size: 13px;
    }

    /* Status do combo */
    .status-combo {
        grid-template-columns: 1.5fr 1fr 1fr 0.5fr;
        padding: 12px;
        font-size: 13px;
    }

    .campo-col {
        font-size: 12px;
    }

    /* Itens ajustados */
    .item-ingresso-ajustado {
        grid-template-columns: 1.5fr 1fr 1fr 0.4fr;
        padding: 12px;
        font-size: 14px;
    }

    .item-ingresso-ajustado span {
        font-size: 14px;
    }

    .btn-remover {
        font-size: 18px;
    }

    /* Aviso "nenhum item" */
    .msg-nenhum {
        font-size: 14px;
        padding: 12px 0;
    }

    /* Botão salvar */
    .btn-salvar-combo {
        width: 100%;
        max-width: 320px;
        padding: 12px;
        font-size: 16px;
    }
}


</style>

<script>
const inputIngresso = document.getElementById("inputIngresso");
const popup = document.getElementById("popupConfig");

const popupNome = document.querySelector(".popup-ingresso-nome");
const popupValor = document.querySelector(".popup-ingresso-valor");

const precoComboInput = document.getElementById("precoCombo");
const btnAdicionar = document.getElementById("btnAdicionar");

const listaAjustes = document.getElementById("listaAjustes");

// Mensagem e botão salvar
const msgNenhum = document.getElementById("msgNenhum");
const btnSalvarCombo = document.getElementById("btnSalvarCombo");

// Inicialmente o botão deve estar oculto
btnSalvarCombo.style.display = "none";

// Variáveis temporárias
let ingressoSelecionado = "";
let valorOriginal = 0;

// Ao selecionar item → abrir popup
inputIngresso.addEventListener("change", () => {
    const texto = inputIngresso.value;

    if (!texto.includes("R$")) return;

    let partes = texto.split(" - R$ ");
    ingressoSelecionado = partes[0];
    valorOriginal = Number(partes[1]);

    popupNome.innerHTML = `<b>Ingresso selecionado:</b> ${ingressoSelecionado}`;
    popupValor.innerHTML = `<b>Valor original:</b> R$ ${valorOriginal.toFixed(2)}`;

    precoComboInput.value = "";

    popup.style.display = "flex";
});

// Adicionar ingresso
btnAdicionar.addEventListener("click", () => {
    let novoPreco = precoComboInput.value;

    if (novoPreco === "" || Number(novoPreco) < 0) {
        alert("Digite um valor válido!");
        return;
    }

    // Remover aviso inicial
    msgNenhum.style.display = "none";

    // Mostrar botão salvar
    btnSalvarCombo.style.display = "block";

    const itemHTML = `
        <div class="item-ingresso-ajustado">
            <span>${ingressoSelecionado}</span>
            <span>R$ ${valorOriginal.toFixed(2)}</span>
            <span>R$ ${Number(novoPreco).toFixed(2)}</span>
            <i class="bi bi-trash btn-remover"></i>
        </div>
    `;

    listaAjustes.insertAdjacentHTML("beforeend", itemHTML);

    popup.style.display = "none";
    inputIngresso.value = "";

    adicionarEventosLixeira();
});

// Fechar popup clicando fora
popup.addEventListener("click", (e) => {
    if (e.target === popup) popup.style.display = "none";
});

// Função para remover item
function adicionarEventosLixeira() {
    document.querySelectorAll(".btn-remover").forEach(btn => {
        btn.onclick = function () {
            this.parentElement.remove();
            verificarVazio();
        };
    });
}

// Verificar se ficou vazio
function verificarVazio() {
    const itens = listaAjustes.querySelectorAll(".item-ingresso-ajustado").length;

    if (itens === 0) {
        msgNenhum.style.display = "block";
        btnSalvarCombo.style.display = "none";
    }
}

</script>

    </div>

</body>
</html>
