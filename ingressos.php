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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<div class="Ingressos">

    <div class="topo-ingressos">
        <h2>Ingressos</h2>

        <div class="acoes-box">
            <!-- Botão de ações do bloco superior -->
                <a href="ingresso-lote.php"><button class="btn-acoes">Lote <i class="bi bi-ticket-detailed"></i></button></a>
                <button id="btnAcoesIngressos" class="btn-acoes">Ações <i class="bi bi-caret-down-fill"></i></button>
                <div id="listaAcoesIngressos" class="lista-acoes">
                <div class="item" id="novoIngresso">Novo ingresso</div>
                <div class="item" id="abrirPopupLote">Lote de ingresso</div>
                <a href="gerenciar-ingresso.php" class="item-link"><div class="item">Gerenciar ingresso</div></a>
                <a href="gerenciar-ingresso.php"><div class="item">Ordem de exibição</div></a>
            </div>
        </div>
    </div>

</div>

<!-- POPUP NOVO INGRESSO -->
<div class="modal-ingresso" id="modalNovoIngresso">

    <div class="modal-conteudo">
        <!-- BOTÃO FECHAR -->
        <button class="modal-close" id="fecharModalNovo">&times;</button>

        <h3>Qual tipo de ingresso deseja criar?</h3>

        <div class="tipo-ingresso">
            <a href="ingresso-novo.php" class="opcao-ingresso padrao">
                <h4>Padrão</h4>
                <p>Os usuários pagarão o valor estipulado pelo ingresso.</p>
            </a>

            <a href="ingresso-novo-cortesia.php" class="opcao-ingresso cortesia">
                <h4>Cortesia</h4>
                <p>Os usuários não pagarão nenhum valor estipulado pelo ingresso.</p>
            </a>
        </div>
    </div>

</div>



<style>
    /* Fundo escuro */
.modal-ingresso {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    z-index: 10000;
    align-items: center;
    justify-content: center;
}

/* Conteúdo */
.modal-conteudo {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
}

.modal-conteudo h3 {
    margin-bottom: 20px;
    color: #333;
}

/* botão fechar (X) */
.modal-conteudo {
    position: relative; /* NECESSÁRIO para o botão X */
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    width: 90%;
    max-width: 500px;
}

/* Botão X */
.modal-close {
    position: absolute;
    top: 10px;
    right: 12px;
    background: none;
    border: none;
    font-size: 26px;
    cursor: pointer;
    color: #333;
}

.modal-close:hover {
    color: #007bff;
}

/* Opções */
.tipo-ingresso {
    flex-direction: column; /* empilha as opções */
    display: flex;
    gap: 15px;
}

.opcao-ingresso {
    flex: 1;
    border: 1px solid #007bff;
    border-radius: 8px;
    padding: 15px;
    text-decoration: none;
    transition: 0.3s;
}

.opcao-ingresso h4 {
    color: #007bff;
    margin-bottom: 8px;
}

.opcao-ingresso p {
    color: #555;
    font-size: 14px;
}

.opcao-ingresso:hover {
    background: #f0f7ff;
}

@media (max-width: 768px) {

    .modal-conteudo {
        width: 92%;
        max-width: 420px;
        padding: 20px;
    }

    .modal-conteudo h3 {
        font-size: 18px;
        line-height: 1.3;
        margin-bottom: 18px;
    }

    .tipo-ingresso {
       
        gap: 12px;
    }

    .opcao-ingresso {
        padding: 14px;
    }

    .opcao-ingresso h4 {
        font-size: 16px;
    }

    .opcao-ingresso p {
        font-size: 14px;
    }

    .modal-close {
        font-size: 24px;
        top: 8px;
        right: 10px;
    }
}

</style>

<script>
// referências
const btnNovoIngresso = document.getElementById("novoIngresso");
const modalNovoIngresso = document.getElementById("modalNovoIngresso");
const btnFecharModal = document.getElementById("fecharModalNovo");
const opcoesIngresso = modalNovoIngresso.querySelectorAll(".opcao-ingresso");

// abre modal
btnNovoIngresso.addEventListener("click", () => {
    modalNovoIngresso.style.display = "flex";
    // opcional: focar no botão fechar para acessibilidade
    btnFecharModal.focus();
});

// fecha ao clicar no X
btnFecharModal.addEventListener("click", () => {
    modalNovoIngresso.style.display = "none";
});

// fecha ao clicar fora do conteúdo
modalNovoIngresso.addEventListener("click", (e) => {
    if (e.target === modalNovoIngresso) {
        modalNovoIngresso.style.display = "none";
    }
});

// fecha ao pressionar Esc
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && modalNovoIngresso.style.display === "flex") {
        modalNovoIngresso.style.display = "none";
    }
});

// fecha ao clicar numa opção (útil se for navegar depois)
opcoesIngresso.forEach(a => {
    a.addEventListener("click", () => {
        modalNovoIngresso.style.display = "none";
    });
});

</script>

<!-- POPUP LOTE DE INGRESSOS -->
<div id="popupLoteIngresso" class="popup-overlay">

    <div class="popup-conteudo">

        <!-- FECHAR -->
        <button class="popup-fechar" id="fecharPopupLote">&times;</button>

        <!-- TÍTULO -->
        <h3>Lote de ingressos</h3>

        <!-- CRIAR LOTE -->
        <div class="criar-lote">
            <label for="nomeLote">Nome do lote</label>
            <input type="text" id="nomeLote" placeholder="Ex: 1º Lote">

            <button id="salvarLote">Salvar</button>
        </div>

        <!-- STATUS / INFO DO LOTE -->
        <div class="popup-lote-info" id="infoLote" style="display:none;">

            <div class="popup-lote-item">
                <label>ID</label>
                <span id="loteId">#000000</span>
            </div>

            <div class="popup-lote-item">
                <label>Nome do Lote</label>
                <span id="loteNome">-</span>
            </div>

        </div>

    </div>
</div>


<style>
    /* OVERLAY */
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 10000;
}

/* CONTEÚDO */
.popup-conteudo {
    background: #fff;
    width: 90%;
    max-width: 450px;
    border-radius: 12px;
    padding: 25px;
    position: relative;
}

/* TÍTULO */
.popup-conteudo h3 {
    margin-bottom: 20px;
    font-size: 20px;
    color: #333;
}

/* BOTÃO FECHAR */
.popup-fechar {
    position: absolute;
    top: 12px;
    right: 15px;
    border: none;
    background: none;
    font-size: 26px;
    cursor: pointer;
    color: #999;
}

.popup-fechar:hover {
    color: #333;
}

/* CRIAR LOTE */
.criar-lote {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 20px;
}

.criar-lote label {
    font-size: 14px;
    color: #666;
}

.criar-lote input {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
}

.criar-lote button {
    margin-top: 5px;
    padding: 10px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.criar-lote button:hover {
    background: #0056b3;
}

/* INFO DO LOTE (PADRÃO STATUS) */
.popup-lote-info {
    background: #f7f7f7;
    border-radius: 10px;
    padding: 12px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

/* ITEM */
.popup-lote-item {
    display: flex;
    flex-direction: column;
}

.popup-lote-item label {
    font-size: 13px;
    color: #666;
}

.popup-lote-item span {
    font-size: 14px;
    font-weight: 500;
    color: #333;
}

</style>



<script>

// ABRIR POPUP (ligue esse ID ao item "Lote de ingresso")
document.getElementById("abrirPopupLote").addEventListener("click", () => {
    document.getElementById("popupLoteIngresso").style.display = "flex";
});

// FECHAR POPUP
document.getElementById("fecharPopupLote").addEventListener("click", () => {
    document.getElementById("popupLoteIngresso").style.display = "none";
});

// FECHAR AO CLICAR FORA
document.getElementById("popupLoteIngresso").addEventListener("click", (e) => {
    if (e.target.id === "popupLoteIngresso") {
        e.target.style.display = "none";
    }
});

// SALVAR LOTE
document.getElementById("salvarLote").addEventListener("click", () => {
    const nome = document.getElementById("nomeLote").value.trim();

    if (!nome) {
        alert("Informe o nome do lote");
        return;
    }

    // Simulação de ID
    const id = Math.floor(Math.random() * 999999);

    document.getElementById("loteId").textContent = `#${id}`;
    document.getElementById("loteNome").textContent = nome;

    document.getElementById("infoLote").style.display = "grid";
    document.getElementById("nomeLote").value = "";
});


</script>



<div class="agrupar">
    <span>Agrupar</span>
    <label class="switch">
        <input type="checkbox" id="switchAgrupar">
        <span class="slider"></span>
    </label>
    <span id="textoSwitch">Não</span>
</div>

<!-- Botões de filtro -->
<div class="btn-organizar" id="btnOrganizar">
    <button class="filtro-btn" data-tipo="Todos">Todos</button>
    <button class="filtro-btn" data-tipo="Ingresso">Ingresso</button>
    <button class="filtro-btn" data-tipo="Cortesia">Cortesia</button>
</div>



<div class="status" id="statusIngressos">

    <div class="linha-status">

        <div class="campo">
            <label>Nome</label>
            <span>Ingresso</span>
        </div>

        <div class="campo">
            <label>Lote</label>
            <span>1°</span>
        </div>

        <div class="campo">
            <label>Preço</label>
            <span>R$ 255,00</span>
        </div>

        <div class="campo">
            <label>Tipo</label>
            <span class="tipo-ingresso">Cortesia</span>
        </div>

        <div class="campo">
            <label>Repassar taxas</label>
            <i class="bi bi-x-circle-fill recusado"></i>
        </div>

        <div class="campo">
            <label>Visível</label>
            <i class="bi bi-check-circle-fill confirmado"></i>
        </div>

<div class="acoes2-box">
    <!-- Botão de ações do status -->
    <button id="btnAcoesStatus" class="btn-acoes2">
        Ações <i class="bi bi-caret-down-fill"></i>
    </button>

    <div id="listaAcoesStatus" class="lista-acoes2">
        <div class="item" id="btnGerarLink">Gerar link</div>
        <a href="canais-vendas.php"><div class="item">Gerenciar canais de vendas</div></a>
        <a href="editar-cortesia.php"><div class="item">Editar</div></a>
    </div>
</div>
    </div>

</div>






<style>
.Ingressos {
    width: 100%;
    padding: 20px;
    background: #f7f7f7;
    border-radius: 10px;
    margin-bottom: 30px;
}

/* topo */
.topo-ingressos {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn-acoes, .btn-acoes2 {
    padding: 8px 16px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}


.btn-organizar {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
}

.btn-organizar .filtro-btn {
    padding: 8px 16px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-organizar .filtro-btn:hover,
.btn-organizar .filtro-btn.active {
    background: #0056b3;
}


.acoes-box, .acoes2-box {
    position: relative;
}

.lista-acoes a,
.lista-acoes2 a {
    text-decoration: none !important;
    color: inherit;
    border: none;
    outline: none;
}

.lista-acoes a:hover,
.lista-acoes2 a:hover,
.lista-acoes a:focus,
.lista-acoes2 a:focus,
.lista-acoes a:active,
.lista-acoes2 a:active,
.lista-acoes a:visited,
.lista-acoes2 a:visited {
    text-decoration: none !important;
    color: inherit;
    border: none;
    outline: none;
}

.lista-acoes, .lista-acoes2 {
    display: none;
    position: absolute;
    top: 40px;
    left: -100px;
    background: #fff;
    padding: 10px;
    border-radius: 6px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
     flex-direction: column;  /* agora vertical */
    gap: 12px;
    z-index:9999;
}

.lista-acoes .item, .lista-acoes2 .item {
    padding: 8px 12px;
    background: #eee;
    border-radius: 4px;
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    color: #222;
    display: block;
}

.lista-acoes .item:hover,
.lista-acoes2 .item:hover {
    background: #ddd;
}

/* Agrupar */
.agrupar {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 20px;
}

/* slide */
.switch {
    position: relative;
    width: 45px;
    height: 22px;
    display: inline-block;
}

.switch input {
    display: none;
}

.slider {
    position: absolute;
    background: #ccc;
    border-radius: 20px;
    width: 100%;
    height: 100%;
    cursor: pointer;
    transition: .3s;
}

.slider:before {
    content: "";
    width: 18px;
    height: 18px;
    position: absolute;
    left: 2px;
    top: 2px;
    background: #fff;
    border-radius: 50%;
    transition: .3s;
}

input:checked + .slider {
    background: #4CAF50;
}

input:checked + .slider:before {
    transform: translateX(23px);
}

/* Status */
.status {
    padding: 0px;
    margin-top: 20px;
    background: #fff;
    border-radius: 10px;
}

.linha-status {
    background: #f7f7f7;
    border-radius: 10px;
    padding: 10px;
    display: grid;
    grid-template-columns: repeat(7, auto);
    gap: 25px;
    align-items: center;
}

.campo {
    display: flex;
    flex-direction: column;
}

.campo label {
    font-size: 13px;
    color: #666;
}

.confirmado {
    color: #28a745;
    font-size: 20px;
}

.recusado {
    color: #dc3545;
    font-size: 20px;
}
@media (max-width: 768px) {
    .topo-ingressos {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .acoes-box, .acoes2-box {
        width: 100%;
    }

    .lista-acoes, .lista-acoes2 {
        left: 0 !important; /* corrige posição em telas menores */
        top: 35px;
        min-width: 150px;
    }

    .btn-organizar {
        flex-wrap: wrap;
        gap: 8px;
    }

    .linha-status {
        grid-template-columns: 1fr 1fr; /* organiza em 2 colunas */
        gap: 15px;
    }

    .campo label {
        font-size: 12px;
    }

    .campo span {
        font-size: 14px;
    }
}

</style>


<script>
// =============================
// MENU AÇÕES (Ingressos e Status)
// =============================
function fecharTodosMenus() {
    document.querySelectorAll(".lista-acoes, .lista-acoes2").forEach(menu => {
        menu.style.display = "none";
    });
}

// Ações do bloco superior
document.getElementById("btnAcoesIngressos").addEventListener("click", (e) => {
    e.stopPropagation();
    const menu = document.getElementById("listaAcoesIngressos");

    // Fecha outro menu
    document.getElementById("listaAcoesStatus").style.display = "none";

    // Alterna visibilidade
    menu.style.display = menu.style.display === "flex" ? "none" : "flex";
});

// Ações do bloco Status
document.getElementById("btnAcoesStatus").addEventListener("click", (e) => {
    e.stopPropagation();
    const menu = document.getElementById("listaAcoesStatus");

    // Fecha outro menu
    document.getElementById("listaAcoesIngressos").style.display = "none";

    // Alterna visibilidade
    menu.style.display = menu.style.display === "flex" ? "none" : "flex";
});

// Fecha menus ao clicar fora
document.addEventListener("click", fecharTodosMenus);


// =============================
// SLIDE AGRUPAR
// =============================
const switchBtn = document.getElementById("switchAgrupar");
const textoSwitch = document.getElementById("textoSwitch");

switchBtn.addEventListener("change", () => {
    textoSwitch.textContent = switchBtn.checked ? "Sim" : "Não";
});


// =============================
// FILTRO POR TIPO
// =============================
const botoesFiltro = document.querySelectorAll("#btnOrganizar .filtro-btn");
const linhasStatus = document.querySelectorAll("#statusIngressos .linha-status");

botoesFiltro.forEach(botao => {
    botao.addEventListener("click", () => {
        // Marca botão ativo
        botoesFiltro.forEach(b => b.classList.remove("active"));
        botao.classList.add("active");

        const tipoSelecionado = botao.dataset.tipo;

        linhasStatus.forEach(linha => {
            const tipo = linha.querySelector(".tipo-ingresso").textContent.trim();

            if(tipoSelecionado === "Todos" || tipo === tipoSelecionado) {
                linha.style.display = "grid";
            } else {
                linha.style.display = "none";
            }
        });
    });
});


</script>

<div class="popup-overlay" id="popupGerarLink">

    <div class="popup-gerar-link">

        <!-- TOPO -->
        <div class="popup-topo">
            <h3>Gerar link de ingresso</h3>
            <span class="fechar-popup" id="fecharGerarLink">&times;</span>
        </div>

        <!-- CRIAR LINK -->
        <div class="campo">
            <label>Criar link</label>
            <input type="text" placeholder="https://evento.com/ingresso">
        </div>

        <!-- BOTÃO -->
        <div class="acoes-popup">
            <button class="btn-salvar-popup">Salvar</button>
        </div>

        <!-- LINKS EXISTENTES -->
        <div class="popup-links-existentes">
            <h4>Links gerados</h4>

            <div class="link-item">
                https://evento.com/ingresso/abc123
            </div>

            <div class="link-item">
                https://evento.com/ingresso/xyz456
            </div>

            <div class="link-item">
                https://evento.com/ingresso/ing789
            </div>
        </div>

    </div>

</div>

<style>
    /* OVERLAY */
.popup-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.6);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

/* POPUP */
.popup-gerar-link {
    width: 100%;
    max-width: 420px;
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 18px;
}

/* TOPO */
.popup-topo {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-topo h3 {
    font-size: 18px;
}

.fechar-popup {
    cursor: pointer;
    font-size: 22px;
}

/* CAMPOS */
.popup-gerar-link .campo {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.popup-gerar-link .campo label {
    font-size: 13px;
    color: #555;
}

.popup-gerar-link input {
    padding: 8px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* BOTÃO */
.acoes-popup {
    display: flex;
    justify-content: center;
}

.btn-salvar-popup {
    padding: 8px 30px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

/* LINKS EXISTENTES */
.popup-links-existentes {
    background: #f7f7f7;
    border-radius: 8px;
    padding: 12px;
}

.popup-links-existentes h4 {
    font-size: 14px;
    margin-bottom: 10px;
}

.link-item {
    font-size: 13px;
    background: #fff;
    padding: 6px 8px;
    border-radius: 6px;
    margin-bottom: 6px;
    word-break: break-all;
}

</style>

<script>
const btnGerarLink = document.getElementById("btnGerarLink");
const popupGerarLink = document.getElementById("popupGerarLink");
const fecharGerarLink = document.getElementById("fecharGerarLink");

btnGerarLink.addEventListener("click", () => {
    popupGerarLink.style.display = "flex";
});

fecharGerarLink.addEventListener("click", () => {
    popupGerarLink.style.display = "none";
});

popupGerarLink.addEventListener("click", (e) => {
    if (e.target === popupGerarLink) {
        popupGerarLink.style.display = "none";
    }
});
</script>


</div>

</body>
</html>
